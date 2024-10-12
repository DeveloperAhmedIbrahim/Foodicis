<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    public function index()
    {
        // dd(" index");
        $dishes = Dish::latest()->get();

        return view('chef_panel.admin_dashboard.dish.index', ['dishes' => $dishes]);
    }

    public function add_dish()
    {
        // dd(" index");
        $category = Category::get();
        $subcategory = Subcategory::get();


        return view('chef_panel.admin_dashboard.dish.add-dish', compact('category', 'subcategory'));
    }

    // public function store(Request $request)
    // {
    //     // dd($request->all());

    //     $dish = $request->all();
    //     if ($request->dish_id != null) {
    //         $dish_update = Dish::find($request->dish_id);
    //     }
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $filename = $image->getClientOriginalName();
    //         $destinationPath = public_path() . '/dish_images/';
    //         $image->move($destinationPath, $filename);
    //         // dd($filename);
    //         $dish['image'] = $filename;
    //     } elseif ($request->dish_id != null && $request->hasFile('image') == null) {
    //         $dish['image'] = $dish_update->image;
    //     }
    //     if ($request->dish_id != null) {
    //         $dish_update->update($dish);
    //         $msg = 'dish Updated';
    //         // dd($msg);
    //     } else {
    //         Dish::create($dish);
    //         $msg = 'dish Inserted';
    //         // dd($msg);
    //         // return response()->json([
    //         //     'success' => 'Data Inserted',
    //         //     'redirect' => route('dish.all-dish'),
    //         // ]);
    //         return redirect('chef/all-dish');
    //     }
    //     // return response()->json([
    //     //     'success' => 'Data updated',
    //     //     'redirect' => route('dish.all-dish'),
    //     // ]);
    //     return redirect('chef/all-dish');
    // }


    public function store(Request $request)
    {
        // Retrieve all request data
        $dishData = $request->all();

        // Add the authenticated user's ID to the dish data
        $dishData['manager_id'] = Auth::id(); // Assuming there's a 'manager_id' column in your 'dishes' table

        // Check if this is an update operation (i.e., dish_id exists)
        if ($request->dish_id != null) {
            $dish_update = Dish::find($request->dish_id);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName(); // Use timestamp to avoid filename collisions
            $destinationPath = public_path() . '/dish_images/';
            $image->move($destinationPath, $filename);
            $dishData['image'] = $filename; // Save the filename in dish data
        } elseif ($request->dish_id != null && !$request->hasFile('image')) {
            // If no new image is uploaded during update, keep the existing image
            $dishData['image'] = $dish_update->image;
        }

        // Check if this is an update operation
        if ($request->dish_id != null) {
            $dish_update->update([
                'name' => $dishData['name'],
                'category_id' => $dishData['category'],
                'subcategory_id' => $dishData['subcategory'],
                'image' => $dishData['image'],
                'manager_id' => $dishData['manager_id'] // Update the user ID for auditing purposes
            ]);
            $msg = 'Dish Updated';
        } else {
            // If it's a create operation, insert a new dish
            Dish::create([
                'name' => $dishData['name'],
                'category_id' => $dishData['category'],
                'subcategory_id' => $dishData['subcategory'],
                'image' => $dishData['image'],
                'manager_id' => $dishData['manager_id'] // Assign user ID for new dish
            ]);
            $msg = 'Dish Inserted';
        }

        // Redirect to the dish listing page
        return redirect('chef/all-dish')->with('message', $msg);
    }

    public function edit($id)
    {
        // Find the dish by ID
        $dish = Dish::find($id);
        // Retrieve all categories
        $category = Category::all();

        // Fetch subcategories based on the dish's category
        $subcategories = Subcategory::where('cat_id', $dish->category_id)->get();

        // Return the view with dish, category, and subcategories
        return view('chef_panel.admin_dashboard.dish.add-dish', compact('dish', 'category', 'subcategories'));
    }

    public function getSubcategories_dish($categoryId)
    {
        // Fetch subcategories based on the selected category ID
        $subcategories = Subcategory::where('cat_id', $categoryId)->get();

        // Return as JSON response
        return response()->json($subcategories);
    }
    // deletedish
    public function deletedish(Request $request, $id)
    {
        dd($id);

        // Find the user by ID
        $dish = Dish::find($id);
        // Delete the user
        $dish->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
