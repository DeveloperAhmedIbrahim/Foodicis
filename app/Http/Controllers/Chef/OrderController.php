<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    // public function active_order()
    // {
    //     // dd('active_order');
    //     $authId = Auth::user()->manager_id;
    //     // dd($authId);
    //     $orders = Order::where('status', 0)->where('manager_id', $authId)->get();

    //     return view('chef_panel.admin_dashboard.orders.active_order', compact('orders'));
    // }
    public function active_order()
    {
        // Get the authenticated chef's ID
        $chefId = Auth::user()->id; // Assuming the chef ID is the user ID
    
        // Fetch active orders for the chef
        $orders = Order::where('status', 0)
                       ->where('chef_id', $chefId)
                       ->paginate(10); // Use pagination for better performance
    
        return view('chef_panel.admin_dashboard.orders.active_order', compact('orders'));
    }
    

    public function completed_order()
    {
        // Get the authenticated chef's ID
        $chefId = Auth::user()->id; // Assuming the chef ID is the user ID
    
        // Fetch completed orders for the chef
        $orders = Order::where('status', 1)
                       ->where('chef_id', $chefId)
                       ->paginate(10); // Use pagination for better performance
    
        return view('chef_panel.admin_dashboard.orders.completed_order', compact('orders'));
    }
    
}
