<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminHomeController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function listCustomar() {
        $datas = User::where('role', 'user')->get();
        return view('admin.customars.index', compact('datas'));
    }

    public function createCustomar() {
        return view('admin.customars.create');
    }
    public function storeCustomar(Request $request) {
        $request->validate([
            'name' => 'required | string | max:255',
            'number' => 'required | string | min:11 | max:11 | uniques:users',
            'password' => 'required | string | min:6'
        ]);
        User::insert([
            'name' => $request->name,
            'phone' => $request->number,
            'phone_verified_at' => Carbon::now(),
            'password' => Hash::make($request->password),
            'role' => 'user',
            'status' => 'active',
        ]);
        return redirect()->route('admin.customar.index')->with('success', 'Created Successfully');
    }

    public function editCustomar($id) {
        $user = User::where('id', $id)->first();
        return view('admin.customars.edit', compact('user'));
    }

    public function updateCustomar(Request $request, $id) {
        $user = User::where('id', $id)->first();
        $request->validate([
            'name' => 'required | string | max:255',
            'phone' => 'required | string | min:11 | max:11 | unique:users,phone,'.$id.',id',
            // 'password' => 'required | string | min:6'
        ]);
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            // 'password' => Hash::make($request->password),
            'status' => $request->status == 'yes' ? 'active' : 'deactive',
        ]);
        return redirect()->route('admin.customar.index')->with('success', 'Update Successfully');
    }

}
