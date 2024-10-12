<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PurchaseIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatsController extends Controller
{
    public function sales()
    {
        $sales = [];
        for($i = 1; $i <= 12; $i++)
        {
            $month = $i > 9 ? $i : '0'.$i;
            $match = date('Y')."-{$month}";
            $sales[] = Order::where([
                ['manager_id', '=', Auth::user()->id],
                ['created_at', 'LIKE', "%{$match}%"]
            ])->sum('total');
        }
        return response()->json($sales);
    }

    public function purchases()
    {
        $purchases = [];
        for($i = 1; $i <= 12; $i++)
        {
            $month = $i > 9 ? $i : '0'.$i;
            $match = date('Y')."-{$month}";
            $purchases[] = PurchaseIngredient::where([
                ['manager_id', '=', Auth::user()->id],
                ['created_at', 'LIKE', "%{$match}%"]
            ])->sum('amount');
        }
        return response()->json($purchases);
    }
}
