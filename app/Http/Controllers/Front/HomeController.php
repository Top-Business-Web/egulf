<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);
        $settings = Setting::first();
        return view('Front.index', compact('products', 'settings'));
    }
}
