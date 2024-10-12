<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Order;
use App\Models\Waste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatsController extends Controller
{
    public function orders()
    {
        $orders = [];
        $mid = Chef::find(Auth::user()->id)->manager_id;
        for($i = 1; $i <= 12; $i++)
        {
            $month = $i > 9 ? $i : '0'.$i;
            $match = date('Y')."-{$month}";
            $orders[] = Order::where([
                ['manager_id', '=', $mid],
                ['created_at', 'LIKE', "%{$match}%"]
            ])->count();
        }
        return response()->json($orders);
    }

    public function wastes()
    {
        $wastes = [];
        for($i = 1; $i <= 12; $i++)
        {
            $month = $i > 9 ? $i : '0'.$i;
            $match = date('Y')."-{$month}";
            $wastes[] = Waste::where([
                ['chef_id', '=', Auth::user()->id],
                ['created_at', 'LIKE', "%{$match}%"]
            ])->sum('waste_unit');
        }
        return response()->json($wastes);
    }
}
