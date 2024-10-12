<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\ingredient_name;
use Illuminate\Http\Request;

class IngredidientController extends Controller
{
    public function list()
    {
       
        $ingredient_name = ingredient_name::get();
        return view('manager_panel.admin_dashboard.Ingredidients.list', compact('ingredient_name'));
    }
}
