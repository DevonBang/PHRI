<?php

namespace App\Http\Controllers;

// use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use App\Models\Admin;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function view_login()
    {
        return view('Admin.login');
    }
    public function login_verif(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ], [
                'email.required' => 'email tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
                'email.email' => 'Format email harus benar'
            ]);
    
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('dashboard.index');
            }elseif(Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('dashboard.index');
            } else{
                return redirect()->route('login.admin');
            }
        } catch(\Exception $e) {
            dd($e);
        }
    }
}
