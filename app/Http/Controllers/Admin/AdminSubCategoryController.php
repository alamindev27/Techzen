<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = SubCategory::with('subCategoryWithCategoryRelation')->orderBy('created_at', 'DESC')->get();
        return view('admin.subcategory.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('category_name', 'ASC')->get(['id', 'category_name']);
        return view('admin.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required | numeric',
            'subcategory_name' => 'required | string | max:255 | unique:sub_categories',
            'image' => 'required | image | mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('image');
        $fileName = time().'-sub-category.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->image->move($path, $fileName);
        SubCategory::insert([
            'category_id' => $request->category,
            'subcategory_name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'image' => $path.$fileName,
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
            'is_featured' => $request->is_featured == 'yes' ? 'active' : 'deactive',
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('subcategory.index')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::orderBy('category_name', 'ASC')->get(['id', 'category_name']);
        $data = SubCategory::where('id', $id)->first();
        return view('admin.subcategory.edit', compact('categories', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = SubCategory::where('id', $id)->first();
        $request->validate([
            'category' => 'required | numeric',
            'subcategory_name' => 'required | string | max:255 | unique:sub_categories,subcategory_name,'.$data->id.',id',
            'image' => 'image | mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('image')) {
            unlink(base_path($data->image));
            $file = $request->file('image');
            $fileName = time().'-sub-category.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->image->move($path, $fileName);
            $data->update([
                'image' => $path.$fileName,
            ]);
        }
        $data->update([
            'category_id' => $request->category,
            'subcategory_name' => $request->subcategory_name,
            'slug' => Str::slug($request->subcategory_name),
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
            'is_featured' => $request->is_featured == 'yes' ? 'active' : 'deactive',
        ]);
        return redirect()->route('subcategory.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SubCategory::where('id', $id)->first();
        unlink(base_path($data->image));
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
