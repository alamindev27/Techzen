<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontnedContrller extends Controller
{
    public function index(){
        $banners = Banner::all();
        $categories = Category::where('is_featured', 'yes')->get();
        return view('welcome', compact('banners', 'categories'));
    }
}
