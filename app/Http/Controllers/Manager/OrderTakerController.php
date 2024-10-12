<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;
use App\Mail\UserCreatedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use App\Models\OrderTaker;
use App\Models\Waiter;

class OrderTakerController extends Controller
{
    public function index()
    {
        $authId = Auth::id();
        $ordertaker = OrderTaker::where('manager_id', $authId)->get();
        return view('manager_panel.admin_dashboard.order_taker.index', compact('ordertaker'));
    }


    public function edit($id)
    {
        // dd($id);
        $ordertaker = OrderTaker::find($id);

        return view('manager_panel.admin_dashboard.order_taker.edit', compact('ordertaker'));
    }

    public function update()
    {
        dd('update');
    }

    public function destroy()
    {
        dd('destroy');
    }
}
