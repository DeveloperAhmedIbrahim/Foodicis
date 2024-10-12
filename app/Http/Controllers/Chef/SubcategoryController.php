<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        // dd(" index");
        $subcategory = Subcategory::get();
        // dd($images);
        return view('chef_panel.admin_dashboard.subcategory.index', ['subcategory' => $subcategory]);
    }

    public function add_Subcategory()
    {
        // dd("add_Subcategory");
        $categories =  Category::get();

        return view('chef_panel.admin_dashboard.subcategory.add', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $Subcategory = $request->all();
        if ($request->Subcategory_id != null) {
            $Subcategory_update = Subcategory::find($request->Subcategory_id);
        }

        if ($request->Subcategory_id != null) {
            $Subcategory_update->update($Subcategory);
            $msg = 'Subcategory Updated';
            // dd($msg);
        } else {
            Subcategory::create($Subcategory);
            $msg = 'Subcategory Inserted';
            return redirect('chef/all-Subcategory');

            // dd($msg);
            // return response()->json([
            //     'success' => 'Data Inserted',
            //     'redirect' => route('Subcategory.all-Subcategory'),
            // ]);
        }
        // return response()->json([
        //     'success' => 'Data updated',
        //     'redirect' => route('Subcategory.all-Subcategory'),
        // ]);
        return redirect('chef/all-Subcategory');
    }


    public function edit($id)
    {
        // dd("edit");
        $categories =  Category::get();

        $Subcategory = Subcategory::find($id);
        // dd($Subcategory);
        return view('chef_panel.admin_dashboard.subcategory.add', ['Subcategory' => $Subcategory, 'categories' => $categories]);
    }

    // deleteSubcategory
    public function deleteSubcategory(Request $request, $id)
    {
        // dd($id);

        // Find the user by ID
        $Subcategory = Subcategory::find($id);
        // Delete the user
        $Subcategory->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
