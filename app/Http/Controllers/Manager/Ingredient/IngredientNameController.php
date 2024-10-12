<?php

namespace App\Http\Controllers\Manager\Ingredient;

use App\Http\Controllers\Controller;
use App\Models\ingredient_name;
use Illuminate\Http\Request;
use App\Models\Manager;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;


class IngredientNameController extends Controller
{
    public function index()
    {
        // dd('view all');

        $authId = Auth::id();
        $ingredient_names = ingredient_name::where('manager_id', $authId)->get();
        return view('manager_panel.admin_dashboard.Ingredient.Ingredient_name.index', compact('ingredient_names'));
    }

    public function create()
    {
        // dd('create');
        return view('manager_panel.admin_dashboard.Ingredient.Ingredient_name.add');
    }
    public function save(Request $request)
    {

        $name = $request->all();
        //  dd($name);
        if ($request->ingredient_name_id != null) {
            $name_update = ingredient_name::find($request->ingredient_name_id);
        }

        if ($request->ingredient_name_id != null) {
            $name_update->update($name);
            $msg = 'name Updated';
            // dd($msg);
        } else {
            ingredient_name::create($name);
            $msg = 'name Inserted';
            // dd($msg);
            return response()->json([
                'success' => 'Data Inserted',
                'redirect' => route('manager.IngredientName.index')
            ]);
        }
        return response()->json([
            'success' => 'Data updated',
            'redirect' =>  route('manager.IngredientName.index')


        ]);
    }

    public function edit($id)
    {
        $ingredient_name = ingredient_name::find($id);

        // dd($ingredient_name);
        return view('manager_panel.admin_dashboard.Ingredient.Ingredient_name.add', compact('ingredient_name'));
    }

    public function update()
    {
        dd('update');
    }

    public function destroy($id)
    {
        // dd($id);

        // Find the user by ID
        $ingredient_name = ingredient_name::find($id);
        // Delete the user
        $ingredient_name->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
