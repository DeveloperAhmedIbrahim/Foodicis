<?php

namespace App\Http\Controllers\Chef;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\ingredient_name;
use App\Models\PreparedDish;
use App\Models\PrepareDish;
use App\Models\PurchaseIngredient;
use App\Models\Unit;
use App\Models\Waste;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PrepareDishController extends Controller
{
    public function index()
    {
        $authId = Auth::id();
        // dd($authId);

        $Dishes = DB::table('prepared_dishes')->where('chef_id', $authId)->get();

        // dd($Dishes);
        // dd($Dishes);
        return view('chef_panel.admin_dashboard.prepare_dish.index', compact('Dishes'));
    }

    public function add()
    {
        $authId = Auth::user()->manager_id;
        // dd($authId);
        
        $dishname = Dish::get();
        $ingredients = ingredient_name::where('manager_id', $authId)->get();
        $units = Unit::get();

        return view('chef_panel.admin_dashboard.prepare_dish.add', compact('dishname', 'units', 'ingredients'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Storing dish ingredients in the PrepareDish table
        PreparedDish::create([

            'dish_id' => $request->dish_id,
            'chef_id' => $request->chef_id,
            'manager_id' => $request->manager_id,

        ]);
        foreach ($request->ingr_id as $key => $dishId) {
            // Create the prepare dish entry
            PrepareDish::create([
                'chef_id' => $request->chef_id,
                'manager_id' => $request->manager_id,
                'dish_id' => $request->dish_id,
                'qty' => $request->qty[$key],
                'ingr_id' => $request->ingr_id[$key],
                'unit_id' => $request->unit_id[$key],
            ]);

            // Update the corresponding purchase_ingredient weight
            $ingredient = PurchaseIngredient::where('ingredient_id', $request->ingr_id[$key])
                ->where('manager_id', $request->manager_id)
                ->first();
            // dd($ingredient);

            if ($ingredient) {
                $newWeight = $ingredient->weight - $request->qty[$key];
                $newWeights = $ingredient->stock_availability - $request->qty[$key];


                // dd($newWeight);
                // Ensure that weight doesn't go below zero
                if ($newWeight < 0) {
                    $newWeight = 0;
                }
                if ($newWeights < 0) {
                    $newWeights = 0;
                }


                // Update the weight
                $ingredient->update(['weight' => $newWeight, 'stock_availability' => $newWeights]);
                // dd($ingredient);
            }
        }

        // Storing waste data in the Waste table, if any waste data is provided
        if ($request->has('waste_ingr_id')) {
            foreach ($request->waste_ingr_id as $key => $wasteDishId) {
                Waste::create([
                    'chef_id' => $request->chef_id,
                    'manager_id' => $request->manager_id,
                    'dish_id' => $wasteDishId,
                    'waste_ingr_id' => $request->waste_ingr_id[$key],
                    'waste_qty' => $request->waste_qty[$key],
                    'waste_unit' => $request->waste_unit[$key],
                    'purpose' => $request->purpose[$key],
                ]);

                // Optionally, subtract the waste quantity from the purchase_ingredients weight if needed
                $ingredient = PurchaseIngredient::where('ingredient_id', $request->waste_ingr_id[$key])
                    ->where('manager_id', $request->manager_id)
                    ->first();

                if ($ingredient) {
                    $newWeight = $ingredient->weight - $request->waste_qty[$key];
                    $newWeights = $ingredient->stock_availability - $request->waste_qty[$key];


                    if ($newWeight < 0) {
                        $newWeight = 0;
                    }
                    if ($newWeights < 0) {
                        $newWeights = 0;
                    }

                    $ingredient->update(['weight' => $newWeight, 'stock_availability' => $newWeights]);
                }
            }
        }

        return redirect()->route('chef.PrepareDish.index')->with('success', 'Dish and waste data saved successfully');
    }
public function getStockAvailability($ingredient_id)
{
    $stockData = DB::table('purchase_ingredients')
        ->join('units', 'purchase_ingredients.unit_id', '=', 'units.id')  // Join with units table
        ->where('purchase_ingredients.ingredient_id', $ingredient_id)
        ->select(
            'purchase_ingredients.stock_availability', 
            'units.unit', 
            'purchase_ingredients.price_per_unit'  // Select price per unit
        )
        ->first();

    return response()->json([
        'stock' => $stockData->stock_availability ?? 0,  // Default to 0 if null
        'unit' => $stockData->unit ?? '',                // Default to empty string if null
        'price_per_unit' => $stockData->price_per_unit ?? 0  // Default to 0 if null
    ]);
}

    public function destroy($id)
    {
        // dd($id);

        // Find the user by ID
        $dish = PreparedDish::find($id);
        // Delete the user
        $dish->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }
}
