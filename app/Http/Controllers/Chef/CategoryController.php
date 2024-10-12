<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        // dd(" index");
        $categories = Category::latest()->get();
        // dd($images);
        return view('chef_panel.admin_dashboard.Category.index', ['categories' => $categories]);
    }

    public function add_Category()
    {
        // dd(" add");
        // dd(Auth::user()->id);
        // $chef_id =  Auth::user()->id
        // $manager_id = Auth::user()->manager_id
        return view('chef_panel.admin_dashboard.Category.add');
    }

    public function store(Request $request)
    {
        // Retrieve all request data
        $categoryData = $request->all();

        // Add the authenticated chef's ID
        $categoryData['chef_id'] = Auth::id(); // Assuming there's a 'chef_id' column in your 'categories' table

        // Check if this is an update operation (i.e., Category_id exists)
        if ($request->Category_id != null) {
            $categoryUpdate = Category::find($request->Category_id);

            if ($categoryUpdate == null) {
                return redirect()->back()->withErrors(['Category not found']);
            }
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName(); // Use timestamp to avoid filename collisions
            $destinationPath = public_path() . '/category_images/';
            $image->move($destinationPath, $filename);
            $categoryData['image'] = $filename; // Save the filename in category data
        } elseif ($request->Category_id != null && !$request->hasFile('image')) {
            // If no new image is uploaded during update, retain the existing image
            $categoryData['image'] = $categoryUpdate->image;
        }

        // Check if this is an update operation
        if ($request->Category_id != null) {
            // Update the category data
            $categoryUpdate->update($categoryData);
            $msg = 'Category Updated';
        } else {
            // If it's a create operation, insert a new category
            Category::create($categoryData);
            $msg = 'Category Inserted';
        }

        // Redirect to the category listing page with a success message
        return redirect('chef/all-Category')->with('message', $msg);
    }




    public function edit($id)
    {
        // dd("edit");

        $Category = Category::find($id);

        return view('chef_panel.admin_dashboard.Category.add', ['Category' => $Category]);
    }

    // deleteCategory
    public function deleteCategory(Request $request, $id)
    {
        $Category = Category::find($id);
        $Category->delete();
        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
