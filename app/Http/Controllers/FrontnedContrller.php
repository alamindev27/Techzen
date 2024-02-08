<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontnedContrller extends Controller
{
    public function index(){
        $banners = Banner::all();
        $categories = Category::where('is_featured', 'active')->get();
        $products = Product::orderBy('created_at', 'DESC')->limit(12)->get();
        return view('welcome', compact('banners', 'categories', 'products'));
    }

    public function details($slug) {

        $product = Product::where('slug', $slug)->first();
        return view('product-details', compact('product'));
    }
}
