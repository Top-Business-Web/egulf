<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Product;
use App\Models\Setting;

class AboutUsController extends Controller
{
    public function index()
    {
        $about_us = AboutUs::first();
        $settings = Setting::first();
        $related = Product::latest()->take(6)->get();
        return view('Front.about_us', compact('about_us', 'related', 'settings'));
    }
}
