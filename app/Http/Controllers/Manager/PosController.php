<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Dish;
use App\Models\ingredient_name;
use App\Models\Chef;
use App\Models\Menu;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Auth;

class PosController extends Controller
{
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();
    
        // Fetch all subcategories
        $subcategories = Subcategory::all();
    
        // Fetch all chefs
        $chefs = Chef::all();
    
        // Create an array to hold categories with their subcategories
        $categoriesWithSubcategories = $categories->map(function ($category) use ($subcategories) {
            // Filter subcategories that belong to the current category
            $category->subcategories = $subcategories->filter(function ($subcategory) use ($category) {
                return $subcategory->category_id === $category->id;
            });
    
            return $category;
        });
    
        // Pass the categories with subcategories and chefs to the view
        return view('manager_panel.admin_dashboard.pos.index', [
            'categories' => $categoriesWithSubcategories,
            'chefs' => $chefs, // Include chefs here
        ]);
    }
    // public function index()
    // {
    //     // Fetch all categories
    //     $categories = Category::all();

    //     // Fetch all subcategories
    //     $subcategories = Subcategory::all();

    //     // Create an array to hold categories with their subcategories
    //     $categoriesWithSubcategories = $categories->map(function ($category) use ($subcategories) {
    //         // Filter subcategories that belong to the current category
    //         $category->subcategories = $subcategories->filter(function ($subcategory) use ($category) {
    //             return $subcategory->category_id === $category->id;
    //         });

    //         return $category;
    //     });

    //     // Pass the categories with subcategories to the view
    //     return view('manager_panel.admin_dashboard.pos.index', ['categories' => $categoriesWithSubcategories]);
    // }

    // public function getSubcategories($categoryId)
    // {
    //     // Fetch subcategories for the given category
    //     $subcategories = Subcategory::where('cat_id', $categoryId)->get();

    //     // Get the IDs of the fetched subcategories
    //     $subcategoryIds = $subcategories->pluck('id');

    //     // Fetch dishes that belong to the fetched subcategories
    //     $dishes = Dish::whereIn('subcategory_id', $subcategoryIds)->get();

    //     // Debug the fetched subcategories and dishes
    //     // dd($subcategories, $dishes); // Check the data before processing further

    //     // Manually associate dishes with their respective subcategories
    //     $subcategories->each(function ($subcategory) use ($dishes) {
    //         $subcategory->dishes = $dishes->filter(function ($dish) use ($subcategory) {
    //             return $dish->subcategory_id == $subcategory->id; // Use == instead of ===
    //         });
    //     });

    //     // Return the response as JSON
    //     return response()->json($subcategories);
    // }


    // public function getSubcategories($categoryId)
    // {
    //     // Fetch subcategories for the given category
    //     $subcategories = Subcategory::where('cat_id', $categoryId)->get();

    //     // Get the IDs of the fetched subcategories
    //     $subcategoryIds = $subcategories->pluck('id');

    //     // Fetch dishes that belong to the fetched subcategories
    //     $dishes = Dish::whereIn('subcategory_id', $subcategoryIds)->get();

    //     // Fetch prices from the menus table for the dishes
    //     $menus = Menu::whereIn('dish_id', $dishes->pluck('id'))->get()->keyBy('dish_id');

    //     // Manually associate dishes with their respective subcategories and prices
    //     $subcategories->each(function ($subcategory) use ($dishes, $menus) {
    //         $subcategory->dishes = $dishes->filter(function ($dish) use ($subcategory) {
    //             return $dish->subcategory_id == $subcategory->id;
    //         })->map(function ($dish) use ($menus) {
    //             // Attach price from the menus table
    //             $menu = $menus->get($dish->id);
    //             $dish->price = $menu ? $menu->price : 'N/A'; // Default to 'N/A' if price is not found
    //             return $dish;
    //         });
    //     });
    //     $add_exrta = ingredient_name::get(); 
    //     // name or price 

    //     // Return the response as JSON
    //     return response()->json($subcategories);
    // }
    public function getSubcategories($categoryId)
    {
        // Fetch subcategories for the given category
        $subcategories = Subcategory::where('cat_id', $categoryId)->get();

        // Get the IDs of the fetched subcategories
        $subcategoryIds = $subcategories->pluck('id');

        // Fetch dishes that belong to the fetched subcategories
        $dishes = Dish::whereIn('subcategory_id', $subcategoryIds)->get();

        // Fetch prices from the menus table for the dishes
        $menus = Menu::whereIn('dish_id', $dishes->pluck('id'))->get()->keyBy('dish_id');

        // Fetch extra ingredients
        $extraIngredients = ingredient_name::get();  // Assume Ingredient contains name and price

        // Manually associate dishes with their respective subcategories, prices, and ingredients
        $subcategories->each(function ($subcategory) use ($dishes, $menus, $extraIngredients) {
            $subcategory->dishes = $dishes->filter(function ($dish) use ($subcategory) {
                return $dish->subcategory_id == $subcategory->id;
            })->map(function ($dish) use ($menus, $extraIngredients) {
                // Attach price from the menus table
                $menu = $menus->get($dish->id);
                $dish->price = $menu ? $menu->price : 'N/A'; // Default to 'N/A' if price is not found

                // Attach extra ingredients
                $dish->extra_ingredients = $extraIngredients->map(function ($ingredient) {
                    return [
                        'name' => $ingredient->name,
                        'price' => $ingredient->price,
                    ];
                });
                return $dish;
            });
        });
        // dd($subcategories);

        // Return the response as JSON
        return response()->json($subcategories);
    }


    public function create()
    {
        $dishname = Dish::get();
        return view('manager_panel.admin_dashboard.menu.add', compact('dishname'));
    }

    public function save()
    {
        dd('save');
    }
}
