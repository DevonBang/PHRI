<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_usaha;
use App\Models\Mitra;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Auth('admin')->user();
        return view('home', ['profile' => $profile]);
    }
    public function berita()
    {
        $profile = Auth('admin')->user();
        return view('berita', ['profile' => $profile]);
    }
    public function informasi()
    {
        $profile = Auth('admin')->user();
        return view('informasi', ['profile' => $profile]);
    }
    public function kemitraan()
    {
        $profile = Auth('admin')->user();
        return view('kemitraan', ['jenis_usaha' => Jenis_usaha::all(), 'profile' => $profile]);
    }
    public function kemitraan_store(Request $request)
    {
        try{
            // return ($request->all());
            $request->validate([
                'nama_penanggung' => 'required|max:255',
                'no_hp' => 'required|max:15',
                'jenis_usaha_id' => 'required',
                'email' => 'required|email|unique:admins',
                'nama_perusahaan' => 'required|max:255',
                'jenis_kerjasama' => 'required',
            ]);
    
            $store = new Mitra;
            $store->nama_pic = $request->nama_penanggung;
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
    public function tolak_mitra($id)
    {
        $mitra = Mitra::find($id);
        $mitra->status = 'ditolak';
        $mitra->updated_at = Carbon::now();
        $mitra->save();
    }
    public function terima_mitra($id)
    {
        $mitra = Mitra::find($id);
        $mitra->status = 'diterima';
        $mitra->updated_at = Carbon::now();
        $mitra->save();
    }
}