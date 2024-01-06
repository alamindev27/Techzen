<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255 | unique:brands',
            'logo' => 'required | image | mimes:jpg,png,jpeg',
        ]);
        $file = $request->file('logo');
        $fileName = time().'-brand.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->logo->move($path, $fileName);
        Brand::insert([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'logo' => $path.$fileName,
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
            'is_featured' => $request->is_featured == 'yes' ? 'active' : 'deactive',
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('brand.index')->with('success', 'Created Successfully');
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
        $brand = Brand::where('id', $id)->first();
        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::where('id', $id)->first();
        $request->validate([
            'name' => 'required | string | max:255 | unique:brands,name,'.$brand->id.',id',
            'logo' => 'image | mimes:jpg,png,jpeg',
        ]);
        if ($request->hasFile('logo')) {
            unlink(base_path($brand->logo));
            $file = $request->file('logo');
            $fileName = time().'-brand.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->logo->move($path, $fileName);
            $brand->update([
                'logo' => $path.$fileName,
            ]);
        }
        $brand->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
            'is_featured' => $request->is_featured == 'yes' ? 'active' : 'deactive',
        ]);
        return redirect()->route('brand.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::where('id', $id)->first();
        unlink(base_path($brand->logo));
        return back()->with('success', 'Deleted Successfully');
    }
}
