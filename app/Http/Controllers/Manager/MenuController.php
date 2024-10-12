<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\PrepareDish;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // dd('index');
        $authId = Auth::id();

        $menu = Menu::where('manager_id', $authId)->get();

        return view('manager_panel.admin_dashboard.menu.index', compact('menu'));
    }

    public function create()
    {
        $authId = Auth::id();
        // dd($authId);
       $dishname = Dish::where('manager_id', $authId)->get();
    //  dd( $dishname);
        return view('manager_panel.admin_dashboard.menu.add', compact('dishname'));
    }

    public function save(Request $request)
{
    // Assuming the authenticated user is the chef, you can retrieve their ID
    $chef_id = auth()->user()->id;  // Get the logged-in user's ID (assuming they are a chef)

    // Validate the request data
    $validatedData = $request->validate([
        'dish_id' => 'required|exists:dishes,id',
        'serving' => 'required|string',
        'price' => 'required|numeric|min:0',
        'profit_percentage' => 'required|numeric|min:0|max:100',
        'manager_id' => 'required|exists:managers,id',
    ]);

    // Calculate the final price after deducting the profit percentage
    $price = $validatedData['price'];
    $profitPercentage = $validatedData['profit_percentage'];
    $finalPrice = $price - ($price * ($profitPercentage / 100));

    // Prepare the data for saving, including the chef_id
    $data = array_merge($validatedData, [
        'final_price' => $finalPrice,
        'chef_id' => $chef_id  // Store the chef_id from the authenticated user
    ]);

    // If menu_id exists, update the existing menu, otherwise create a new one
    if ($request->menu_id != null) {
        $menu = Menu::findOrFail($request->menu_id);
        $menu->update($data);
        $msg = 'Menu Updated';
    } else {
        Menu::create($data);
        $msg = 'Menu Inserted';
    }

    // Redirect back to menu index with success message
    return redirect()->route('manager.menu.index')->with('success', $msg);
}

    public function edit($id)
    {
        // dd($id);
        $menu = Menu::find($id);
        $dishname = Dish::get();

        return view('manager_panel.admin_dashboard.menu.add', compact('menu', 'dishname'));
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        // Delete the user
        $menu->delete();
        return redirect()->back();
    }
}
