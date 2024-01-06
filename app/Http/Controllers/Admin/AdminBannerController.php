<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Banner::all();
        return view('admin.banner.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required | image | mimes:jpg,png,jpeg',
        ]);
        $file = $request->file('image');
        $fileName = time().'-banner.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->image->move($path, $fileName);
        Banner::insert([
            'image' => $path.$fileName,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('banner.index')->with('success', 'Added Successfully');
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
        $data = Banner::where('id', $id)->first();
        return view('admin.banner.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'image | mimes:jpg,png,jpeg',
        ]);
        $data = Banner::where('id', $id)->first();
        if ($request->hasFile('image')) {
            unlink(base_path($data->image));
            $file = $request->file('image');
            $fileName = time().'-brand.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->image->move($path, $fileName);
            $data->update([
                'image' => $path.$fileName
            ]);
        }
        return redirect()->route('banner.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Banner::where('id', $id)->first();
        unlink(base_path($data->image));
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
