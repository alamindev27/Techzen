<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductGallury;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Product::with('productWithCategoryRelation', 'productWithBrandRelation')->orderBy('created_at', 'DESC')->get();
        return view('admin.product.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->orderBy('category_name', 'ASC')->get();
        $brands = Brand::all();
        $colors = Color::all();
        $attributes = Attribute::all();
        return view('admin.product.create', compact('categories', 'brands', 'colors', 'attributes'));
    }

    public function getSubCategory(Request $request) {
        $request->validate([
            'catId' => 'required'
        ]);
        $catId = $request->catId;
        $subCategories = SubCategory::where('category_id', $catId)->get();
        return view('admin.partials.sub-categorirs', compact('subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required | string | max:255',
            'description' => 'required | string',
            'buying_price' => 'required | numeric | min:1',
            'whole_sale_price' => 'required | numeric | min:1',
            'regular_price' => 'required | numeric | min:1',
            'discount_type' => 'required',
            'discount' => 'required | numeric | min:1',
            'stock' => 'required | numeric | min:1',
            'brand' => 'required | numeric',
            'category' => 'required | numeric',
            // 'sub_category' => 'required | numeric',
            'shiping_charge' => 'required | numeric | min:1',
            'low_stock_alert' => 'required | numeric | min:1',
            // 'color' => 'required | numeric',
            'thumbnails' => 'required | image | mimes:jpg,jpg,jpeg',
            'gullury.*' => 'required | image | mimes:jpg,jpg,jpeg',
        ]);

        $file = $request->file('thumbnails');
        $fileName1 = time().'-products.'.$file->getClientOriginalExtension();
        $path1 = 'assets/uploads/';
        $request->thumbnails->move($path1, $fileName1);

        $productId = Product::insertGetId([
            'product_name' => $request->product_name,
            'slug' => Str::slug($request->product_name),
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'buying_price' => $request->buying_price,
            'whole_sale_price' => $request->whole_sale_price,
            'regular_price' => $request->regular_price,
            'discount_type' => $request->discount_type,
            'discount' => $request->discount,
            'stock' => $request->stock,
            'brand_id' => $request->brand,
            'category_id' => $request->category,
            'sub_category_id' => $request->sub_category,
            'shiping_charge' => $request->shiping_charge,
            'low_stock_alert' => $request->low_stock_alert,
            // 'color_id' => $request->color,
            'thumbnails' => $path1.$fileName1,
            'thumbnails' => $path1.$fileName1,
            'sku' => 123,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        $images = $request->galluries;
        foreach ($images as $key => $singleImage) {
            $file = $request->file('gullury');
            $fileName2 = time().'-gullury.'.$singleImage->getClientOriginalExtension();
            $path2 = 'assets/uploads/';
            $singleImage->move($path2, $fileName2);
            ProductGallury::insert([
                'product_id' => $productId,
                'images' => $path2.$fileName2,
                'created_at' => Carbon::now()
            ]);
        }



        return back()->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
