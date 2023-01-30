<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('Front.project',compact('settings'));
    }
}