<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Coupon::orderBy('created_at', 'DESC')->get();
        return view('admin.coupon.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255 | unique:coupons',
            'discount_type' => 'required | string',
            'discount_amount' => 'required | numeric | min:1',
            'total_use_limit' => 'required | numeric | min:1',
            'total_use_limit_per_user' => 'required | numeric | min:1',
            'start_date' => 'required | after:yesterday',
            'end_date' => 'required | after:today',
            'status' => 'required',
        ]);
        Coupon::insert([
            'name' => $request->name,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
            'total_use_limit' => $request->total_use_limit,
            'total_use_limit_per_user' => $request->total_use_limit_per_user,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
            'created_at' => Carbon::now()
        ]);
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
        $data = Coupon::where('id', $id)->first();
        return view('admin.coupon.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Coupon::where('id', $id)->first();
        $request->validate([
            'name' => 'required | string | max:255 | unique:coupons,name,'.$data->id.',id',
            'discount_type' => 'required | string',
            'discount_amount' => 'required | numeric | min:1',
            'total_use_limit' => 'required | numeric | min:1',
            'total_use_limit_per_user' => 'required | numeric | min:1',
            'total_use_limit_per_user' => 'required | numeric | min:1',
            'start_date' => 'required | after:yesterday',
            'end_date' => 'required | after:today',
        ]);
        $data->update([
            'name' => $request->name,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
            'total_use_limit' => $request->total_use_limit,
            'total_use_limit_per_user' => $request->total_use_limit_per_user,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Coupon::where('id', $id)->first();
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
