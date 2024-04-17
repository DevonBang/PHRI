<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function admin(Admin $admin)
    {
        // $this->authorize('superadmin', $admin);
        // if (!auth('admin')->user()->can('superadmin')) {
        //     abort(403);
        // }
        $admin = auth()->guard('admin')->user();

        if (!$admin || !$admin->is_superadmin) {
            abort(403);
        }
        $admin = Admin::all();
        return view('dashboard.admin.index', ['admins' => $admin]);
    }
    public function add_admin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5',
        ]);

        $store = new Admin;
        $store->name = $request->name;
        $store->username = $request->username;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->save();

        return redirect()->route('dashboard.admin');
    }
    public function destroy_admin(Admin $id)
    {
        $data = Admin::find($id);

        Admin::destroy($data);

        return redirect()->route('dashboard.admin');
    }
}
