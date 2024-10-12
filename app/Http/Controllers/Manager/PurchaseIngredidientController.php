<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ingredient_name;
use App\Models\PurchaseIngredient;
use App\Models\Unit;
use Illuminate\Http\Request;

class PurchaseIngredidientController extends Controller
{
    public function index()
    {
        $authId = Auth::id();
        $ingredient_purchase = PurchaseIngredient::with(['ingredient', 'unit'])
            ->where('manager_id', $authId)
            ->get();
        $units = Unit::get();
        return view('manager_panel.admin_dashboard.purchase_Ingredient.index', compact('ingredient_purchase', 'units'));
    }
    public function add()
    {
        // dd('puchase');
        $authId = Auth::user()->id;
        // dd($authId);
        $units = Unit::get();
        $ingredient_name = ingredient_name::get()->where('manager_id', $authId);

        return view('manager_panel.admin_dashboard.purchase_Ingredient.add', compact('ingredient_name', 'units'));
    }

    public function save(Request $request)
    {
        $data = $request->all();
        // dd(Auth::id());
        $manager_id = Auth::id();
        $purchaseIngredient = PurchaseIngredient::where('ingredient_id', $request->ingredient_id)->first();

        if ($purchaseIngredient) {
            $newWeight = $request->weight;

            if ($request->unit_id == 3) {
                $newWeight = $newWeight / 1000;
            }

            $purchaseIngredient->update([
                'stock_availability' => $purchaseIngredient->stock_availability + $newWeight,
                'amount' => $purchaseIngredient->amount + $request->amount,
                'purchase_quantity' => $data['purchase_quantity'],
                'expiry_date' => $data['expiry_date'],
                'unit_id' => $data['unit_id'],
                'weight' => $data['weight'],
                'price_per_unit' => $data['price_per_unit'], // Add this line

                // 'manager_id' => $data['manager_id']
            ]);

            $message = 'Purchase Ingredient Updated';
        } else {
            $newWeight = $data['weight'];


            if ($data['unit_id'] == 3) {
                $newWeight = $newWeight / 1000;
            }

            $data['stock_availability'] = $newWeight;
            $data['manager_id'] = $manager_id;

            PurchaseIngredient::create($data);
            $message = 'Purchase Ingredient Created';
        }

        return response()->json([
            'success' => $message,
            'reload' => true,
        ]);
    }




    public function getPurchaseIngredientData(Request $request)
    {
        $ingredientId = $request->input('ingredient_id');
        $purchaseIngredient = PurchaseIngredient::where('ingredient_id', $ingredientId)->first();

        return response()->json($purchaseIngredient);
    }


    public function destroy($id)
    {
        // dd($id);

        // Find the user by ID
        $purchaseIngredient = PurchaseIngredient::find($id);
        // Delete the user
        $purchaseIngredient->delete();

        return response()->json([
            'success' => 'Data Deleted',
            'reload' => true,
        ]);
    }


    public function total()
    {
        // Get the authenticated user's ID
        $authId = auth()->id();
    
        // Fetch ingredient purchases for the authenticated user
        $ingredient_purchase = PurchaseIngredient::with(['ingredient', 'unit'])
            ->where('manager_id', $authId) // Assuming you want to filter by manager_id
            ->get();
    
        // Fetch all units (if needed)
        $units = Unit::get();
    
        return view('manager_panel.admin_dashboard.purchase_Ingredient.total', compact('ingredient_purchase', 'units'));
    }
     
    
}
