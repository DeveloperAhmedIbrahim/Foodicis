<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index()
    {
        $countries = Country::get();
        return view('frontend.home', compact('countries'));
    }
    public function about()
    {
        $countries = Country::get();
        return view('frontend.about', compact('countries'));
    }
    public function ai_page()
    {
        $countries = Country::get();
        return view('frontend.ai_page', compact('countries'));
    }
    public function reporting_analytics()
    {
        $countries = Country::get();
        return view('frontend.reporting_analytics', compact('countries'));
    }

    public function contact()
    {
        $countries = Country::get();
        return view('frontend.contact', compact('countries'));
    }
}
