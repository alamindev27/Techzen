<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Varient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Attribute::all();
        return view('admin.attributes.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
        ]);
        Attribute::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('attributes.index')->with('success', 'Created Successfully');
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
        $data = Attribute::where('id', $id)->first();
        return view('admin.attributes.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | string | max:255',
        ]);
        $data = Attribute::where('id', $id)->first();
        $data->update([
            'name' => $request->name
        ]);
        return redirect()->route('attributes.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Attribute::where('id', $id)->first();
        $data->delete();
        return redirect()->route('attributes.index')->with('success', 'Deleted Successfully');
    }

    public function addNewAttributes($id) {
        $attr = Attribute::where('id', $id)->first();
        $datas = Varient::with('varientWithAttributesRelation')->where('attr_id', $attr->id)->get();
        return view('admin.attributes.add-new', compact('attr', 'datas'));
    }

    public function storeNewAttributes(Request $request, $id) {
        $request->validate([
            'varient' => 'required | string | max:255'
        ]);
        Varient::insert([
            'attr_id' => $id,
            'varient' => $request->varient,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Created Successfully');
    }

    public function varientEdit($id) {
        $data = Varient::with('varientWithAttributesRelation')->where('id', $id)->first();
        return view('admin.attributes.varient-edit', compact('data'));
    }

    public function varientUpdate(Request $request, $id) {
        $request->validate([
            'varient' => 'required | string | max:255',
        ]);
        $data = Varient::where('id', $id)->first();
        $data->update([
            'varient' => $request->varient
        ]);
        return redirect()->route('admin.attribute.addNew', $data->attr_id)->with('success', 'Updated Successfully');
    }

    public function varientDelete($id) {
        $data = Varient::where('id', $id)->first();
        $data->delete();
        return redirect()->route('admin.attribute.addNew', $data->attr_id)->with('success', 'Deleted Successfully');
    }
}
