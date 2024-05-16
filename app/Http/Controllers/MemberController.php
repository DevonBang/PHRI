<?php

namespace App\Http\Controllers;

use App\Models\Jenis_usaha;
use App\Models\Member;
use App\Models\Klasifikasi_usaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:members',
                'no_hp' => 'required|min:9',
                'password' => 'required|confirmed|min:8',
                'jenis_usaha_id' => 'required',
                'klasifikasi_usaha_id' => 'required',
                'rating_usaha' => 'required',
                'nama_usaha' => 'required',
                'alamat' => 'required',
            ]);

            $store = new Member();
            $store->name = $request->name;
            $store->email = $request->email;
            $store->nama_usaha = $request->nama_usaha;
            $store->alamat = $request->alamat;
            $store->no_hp = $request->no_hp;
            $store->jenis_usaha_id = $request->jenis_usaha_id;
            $store->klasifikasi_usaha_id = $request->klasifikasi_usaha_id;
            $store->rating_usaha = $request->rating_usaha;
            $store->password = Hash::make($request->password);
            $store->save();

            // return redirect()->route('login');
            return ['status' => true, 'pesan' => 'Anda Berhasil Daftar sebagai Member'];
        } catch (\Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    
}