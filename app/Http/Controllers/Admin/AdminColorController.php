<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::orderBy('id', 'DESC')->get();
        return view('admin.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255 | unique:colors',
            'code' => 'required | string | max:255'
        ]);
        Color::insert([
            'name' => $request->name,
            'code' => $request->code,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('color.index')->with('success', 'Created Successfully');
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
        $color = Color::where('id', $id)->first();
        return view('admin.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $color = Color::where('id', $id)->first();
        $request->validate([
            'name' => 'required | string | max:255 | unique:colors,name,'.$color->id.',id',
            'code' => 'required | string | max:255'
        ]);
        $color->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);
        return redirect()->route('color.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $color = Color::where('id', $id)->first();
        $color->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
