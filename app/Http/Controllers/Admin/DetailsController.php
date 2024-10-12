<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;  // Assuming you have a Manager model
use App\Models\Lead;     // Assuming you have a Lead model

class DetailsController extends Controller
{
    public function restaurant_details($id)
    {
        dd($id);
    }
}
