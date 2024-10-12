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

class AddchefController extends Controller
{
    public function index()
    {
        $authId = Auth::id();
        $chef = Chef::where('manager_id', $authId)->get();
        return view('manager_panel.admin_dashboard.add_chef.index', compact('chef'));
    }


    public function add()
    {
        // dd('add');
        return view('manager_panel.admin_dashboard.add_chef.add');
    }

    public function save(Request $request)
    {
        // Log the request data for debugging
        Log::info('Request Data: ', $request->all());

        // Validation rules
        $rules = [
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:' . ($request->role === 'order_taker' ? 'order_takers' : 'chefs') . ',email,' . ($request->chef_id ?? 'NULL') . ',id',
            'password' => $request->chef_id ? 'nullable|min:8' : 'required|min:8',
            'manager_id' => 'required|exists:managers,id'
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Extract validated user data
        $userData = $validatedData;

        try {
            if ($request->chef_id) {
                // Update existing user based on role
                if ($request->role === 'order_taker') {
                    // $user = OrderTaker::find($request->chef_id); // Update order taker
                    $user = Waiter::find($request->chef_id); // Update order taker

                } elseif ($request->role === 'chef') {
                    $user = Chef::find($request->chef_id); // Update chef
                }

                if ($user) {
                    // Update password if provided
                    if ($request->filled('password')) {
                        $userData['password'] = bcrypt($request->password);
                    }
                    $user->update($userData);
                    $msg = 'User Updated';
                } else {
                    return response()->json(['error' => 'User not found', 'reload' => false]);
                }
            } else {
                // Create a new user based on role
                $userData['password'] = bcrypt($request->password);
                if ($request->role === 'order_taker') {
                    // $user = OrderTaker::create($userData); // Create new order taker
                    $user = Waiter::create($userData); // Create new order taker

                    $msg = 'Order Taker Inserted';
                } elseif ($request->role === 'chef') {
                    $user = Chef::create($userData); // Create new chef
                    $msg = 'Chef Inserted';
                }

                // Optionally send email to the new user
                Mail::to($user->email)->send(new UserCreatedMail($user, $request->password));
            }

            return response()->json(['message' => $msg, 'reload' => true]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error saving user: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }



    public function edit($id)
    {
        // dd($id);
        $chef = Chef::find($id);

        return view('manager_panel.admin_dashboard.add_chef.add', compact('chef'));
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
