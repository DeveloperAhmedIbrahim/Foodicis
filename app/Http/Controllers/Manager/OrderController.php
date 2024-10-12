<?php

namespace App\Http\Controllers\Manager;

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





class OrderController extends Controller
{
    public function list()
{
    $managerId = Auth::id(); // Get the authenticated manager's ID
    $orders = Order::where('manager_id', $managerId)->get(); // Fetch orders only for this manager

    return view('manager_panel.admin_dashboard.orders.list', compact('orders'));
}


public function active_order()
{
    $managerId = Auth::id(); // Get the authenticated manager's ID
    $orders = Order::where('status', 0)->where('manager_id', $managerId)->get(); // Fetch active orders for this manager

    return view('manager_panel.admin_dashboard.orders.active_order', compact('orders'));
}

public function completed_order()
{
    $managerId = Auth::id(); // Get the authenticated manager's ID
    $orders = Order::where('status', 1)->where('manager_id', $managerId)->get(); // Fetch completed orders for this manager

    return view('manager_panel.admin_dashboard.orders.completed_order', compact('orders'));
}

public function pending_order()
{
    $managerId = Auth::id(); // Get the authenticated manager's ID
    $orders = Order::where('status', 2)->where('manager_id', $managerId)->get(); // Fetch pending orders for this manager

    return view('manager_panel.admin_dashboard.orders.pending_order', compact('orders'));
}

public function cancelled_order()
{
    $managerId = Auth::id(); // Get the authenticated manager's ID
    $orders = Order::where('status', 3)->where('manager_id', $managerId)->get(); // Fetch cancelled orders for this manager

    return view('manager_panel.admin_dashboard.orders.cancelled_order', compact('orders'));
}



    // public function store_order(Request $request)
    // {
    //     dd($request->all());
    //     // Auth::user()->manager_id ;
    //     // dd(Auth::id());
    //     $cart = json_decode($request->input('cart'), true); // Receive cart data from frontend
    //     $order_code = rand(10000, 99999);
    //     // dd($order_code);
    //     // Create the order
    //     $order = Order::create([
    //         'manager_id' => Auth::id(),
    //         'subtotal' => $cart['subtotal'],
    //         'tax' => $cart['tax'],
    //         'total' => $cart['total'],
    //         'order_code' => $order_code
    //     ]);

    //     // Save the items in the order
    //     foreach ($cart['items'] as $item) {
    //         OrderItem::create([
    //             'manager_id' => Auth::id(),

    //             'order_id' => $order->id,
    //             'product_id' => $item['id'],
    //             'quantity' => $item['quantity'],
    //             'price' => $item['price'],
    //         ]);
    //     }

    //     return response()->json(['message' => 'Order placed successfully!']);
    // }
    // public function store_order(Request $request)
    // {
    //     $cart = json_decode($request->input('cart'), true); // Receive cart data from frontend
    //     $order_code = rand(10000, 99999);

    //     // Create the order
    //     $order = Order::create([
    //         'manager_id' => Auth::id(),
    //         'subtotal' => $cart['subtotal'],
    //         'tax' => $cart['tax'],
    //         'total' => $cart['total'],
    //         'order_code' => $order_code
    //     ]);

    //     // Save the items in the order
    //     foreach ($cart['items'] as $item) {
    //         // Loop through extras and save them in separate fields
    //         foreach ($item['extras'] as $extra) {
    //             OrderItem::create([
    //                 'manager_id' => Auth::id(),
    //                 'order_id' => $order->id,
    //                 'product_id' => $item['id'],
    //                 'quantity' => $item['quantity'],
    //                 'price' => $item['price'],
    //                 'extra_item' => $extra['name'], // Store extra item name
    //                 'extra_item_price' => $extra['price'], // Store extra item price
    //             ]);
    //         }
    //     }

    //     return response()->json(['message' => 'Order placed successfully!']);
    // }

    public function store_order(Request $request)
    {
        $cart = json_decode($request->input('cart'), true); // Receive cart data from frontend
        $order_code = rand(10000, 99999);
    
        // Create the order with type_of_order instead of chef_id
        $order = Order::create([
            'manager_id' => Auth::id(),
            'subtotal' => $cart['subtotal'],
            'tax' => $cart['tax'],
            'total' => $cart['total'],
            'order_code' => $order_code,
            'order_type' => $cart['order_type']
        ]);
    
        // Save the items in the order
        foreach ($cart['items'] as $item) {
            // Loop through extras and save them in separate fields
            foreach ($item['extras'] as $extra) {
                OrderItem::create([
                    'manager_id' => Auth::id(),
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
    
        // Store the PDF on the server (you can use any path)
        $filePath = 'receipts/order_receipt_' . $order->order_code . '.pdf';
        Storage::put($filePath, $pdf->output());
    
        // Get the full URL to the PDF
        $pdfUrl = Storage::url($filePath);
        return response()->json(['message' => 'Order placed successfully!']);
    }
    

    // public function getOrderItems($orderId)
    // {
    //     // Join the order_items table with the dishes table to fetch product details
    //     $items = DB::table('order_items')
    //         ->join('dishes', 'order_items.product_id', '=', 'dishes.id')
    //         ->where('order_items.order_id', $orderId)
    //         ->select('order_items.product_id', 'order_items.extra_item', 'order_items.extra_item_price', 'order_items.quantity', 'order_items.price', 'dishes.name', 'dishes.image')
    //         ->groupBy('order_items.product_id', 'order_items.extra_item', 'order_items.extra_item_price', 'order_items.quantity', 'order_items.price', 'dishes.name', 'dishes.image') // Group by unique fields
    //         ->get();
    //     // dd($items);
    //     return response()->json(['items' => $items]);
    // }
    public function getOrderItems($orderId)
{
    $order = Order::with('items')->find($orderId);

    if (!$order) {
        return response()->json(['error' => 'Order not found'], 404);
    }

    return response()->json(['items' => $order->items]);
}


    public function updateStatus(Request $request, $orderId)
    {
        $order = Order::find($orderId);
        if ($order) {
            $order->status = $request->input('status');
            $order->save();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }
}
