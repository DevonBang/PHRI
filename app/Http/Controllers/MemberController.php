<?php

namespace App\Http\Controllers;

use App\Models\Jenis_usaha;
use App\Models\Member;
use App\Models\Klasifikasi_usaha;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class MemberController extends Controller
{
    public function view_register()
    {
        return view('Member.register', [
            'jenis_usaha' => Jenis_usaha::all(),
            'klasifikasi_usaha' => Klasifikasi_usaha::all(),
        ]);
    }
    public function create_member(Request $request)
    {   
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:members',
            'no_hp' => 'required|min:9',
            'password' => 'required|confirmed|min:8',
            'jenis_usaha_id' => 'required',
            'klasifikasi_usaha_id' => 'required',
            'nama_usaha' => 'required',
            'alamat' => 'required',
        ]);

        Member::create([
            'username' => $request->username,
            'email' => $request->email,
            'nama_usaha' => $request->nama_usaha,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jenis_usaha_id' => $request->jenis_usaha_id,
            'klasifikasi_usaha_id' => $request->klasifikasi_usaha_id,
            'password' => Hash::make($request->password)
        ]);

    return 'sukses';

    }
}