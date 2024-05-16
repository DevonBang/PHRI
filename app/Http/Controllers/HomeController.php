<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_usaha;
use App\Models\Mitra;
use App\Models\Penawaran;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Auth('admin')->user();
        return view('home', ['profile' => $profile, 'member' => auth('member')->user()]);
    }
    public function berita()
    {
        $profile = Auth('admin')->user();
        return view('berita', ['profile' => $profile, 'member' => auth('member')->user()]);
    }
    public function informasi()
    {
        $profile = Auth('admin')->user();
        return view('informasi', ['profile' => $profile, 'member' => auth('member')->user()]);
    }
    public function kemitraan()
    {
        $profile = Auth('admin')->user();
        return view('kemitraan', ['jenis_usaha' => Jenis_usaha::all(), 'profile' => $profile, 'member' => auth('member')->user()]);
    }
    public function kemitraan_store(Request $request)
    {
        try{
            $request->validate([
                'nama_pic' => 'required|max:255',
                'no_hp' => 'required|max:15',
                'jenis_usaha_id' => 'required',
                'email' => 'required|email|unique:admins',
                'nama_perusahaan' => 'required|max:255',
                'jenis_kerjasama' => 'required',
            ]);
    
            $store = new Mitra;
            $store->nama_pic = $request->nama_pic;
            $store->no_hp = $request->no_hp;
            $store->email = $request->email;
            $store->jenis_usaha_id = $request->jenis_usaha_id;
            $store->jenis_kerjasama = $request->jenis_kerjasama;
            $store->nama_perusahaan = $request->nama_perusahaan;
            $store->save();

            return ['status' => true, 'pesan' => 'Penawaran berhasil dikirim'];
        }catch(\Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }

    public function penawaran_store(Request $request)
    {
        try{
            $request->validate([
                'nama_lengkap' => 'required|max:255',
                'username' => 'required|max:255',
                'tanggal_lahir' => 'required|date',
                'ktp' => 'required|mimes:jpg,jpeg,png',
                'no_hp' => 'required|max:15',
                'email' => 'required|email',
                'tempat_tinggal' => 'required',
                'tawaran' => 'required',
            ]);

            $foto = $request->file('ktp');
            $filename = date('Y-m-d-').$foto->getClientOriginalName();
            $path = 'foto-ktp/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($foto));

            $store = new Penawaran;
            $store->nama_lengkap = $request->nama_lengkap;
            $store->username = $request->username;
            $store->tanggal_lahir = $request->tanggal_lahir;
            $store->foto_ktp = $filename;
            $store->no_hp = $request->no_hp;
            $store->email = $request->email;
            $store->tawaran = $request->tawaran;
            $store->tempat_tinggal = $request->tempat_tinggal;
            $store->save();

            return ['status' => true, 'pesan' => 'Penawaran berhasil dikirim'];
        }catch(\Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}