<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\ingredient_name;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class ChefOrderController extends Controller
{
    public function list()
    {
        // Get all orders for the chef
        $orders = Order::where('chef_id', Auth::id())->get();
        return view('chef_panel.admin_dashboard.orders.list', compact('orders'));
    }

    public function active_order()
    {
        // Get active orders for the chef
        $orders = Order::where('chef_id', Auth::id())->where('status', 0)->get();
        return view('chef_panel.admin_dashboard.orders.active_order', compact('orders'));
    }

    public function completed_order()
    {
        // Get completed orders for the chef
        $orders = Order::where('chef_id', Auth::id())->where('status', 1)->get();
        return view('chef_panel.admin_dashboard.orders.completed_order', compact('orders'));
    }

    public function pending_order()
    {
        // Get pending orders for the chef
        $orders = Order::where('chef_id', Auth::id())->where('status', 2)->get();
        return view('chef_panel.admin_dashboard.orders.pending_order', compact('orders'));
    }

    public function cancelled_order()
    {
        // Get canceled orders for the chef
        $orders = Order::where('chef_id', Auth::id())->where('status', 3)->get();
        return view('chef_panel.admin_dashboard.orders.cancelled_order', compact('orders'));
    }

    public function store_order(Request $request)
    {
        $cart = json_decode($request->input('cart'), true); // Receive cart data from frontend
        $order_code = rand(10000, 99999);

        // Create the order for the chef
        $order = Order::create([
            'chef_id' => Auth::id(),  // Use chef_id instead of manager_id
            'subtotal' => $cart['subtotal'],
            'tax' => $cart['tax'],
            'total' => $cart['total'],
            'order_code' => $order_code
        ]);

        // Save the items in the order
        foreach ($cart['items'] as $item) {
            // Loop through extras and save them in separate fields
            foreach ($item['extras'] as $extra) {
                OrderItem::create([
                    'chef_id' => Auth::id(),  // Use chef_id instead of manager_id
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'extra_item' => $extra['name'], // Store extra item name
                    'extra_item_price' => $extra['price'], // Store extra item price
                ]);
            }
        }

        // Prepare data for the PDF
        $pdfData = [
            'order' => $order,
            'items' => $cart['items'],
            'subtotal' => $cart['subtotal'],
            'tax' => $cart['tax'],
            'total' => $cart['total'],
        ];

        // Generate the PDF receipt
        $pdf = PDF::loadView('pdf.receipt', $pdfData);

        // Store the PDF on the server
        $filePath = 'receipts/order_receipt_' . $order->order_code . '.pdf';
        Storage::put($filePath, $pdf->output());

        // Get the full URL to the PDF
        $pdfUrl = Storage::url($filePath);

        return response()->json(['message' => 'Order placed successfully!', 'pdf_url' => $pdfUrl]);
    }

    public function getOrderItems($orderId)
    {
        // Join the order_items table with the dishes table to fetch product details for chef
        $items = DB::table('order_items')
            ->join('dishes', 'order_items.product_id', '=', 'dishes.id')
            ->where('order_items.order_id', $orderId)
            ->select('order_items.product_id', 'order_items.extra_item', 'order_items.extra_item_price', 'order_items.quantity', 'order_items.price', 'dishes.name', 'dishes.image')
            ->groupBy('order_items.product_id', 'order_items.extra_item', 'order_items.extra_item_price', 'order_items.quantity', 'order_items.price', 'dishes.name', 'dishes.image') // Group by unique fields
            ->get();

        return response()->json(['items' => $items]);
    }

    public function updateStatus(Request $request, $orderId)
    {
        // Find the order by chef_id
        $order = Order::where('chef_id', Auth::id())->where('id', $orderId)->first();
        if ($order) {
            $order->status = $request->input('status');
            $order->save();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }
}
