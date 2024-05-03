<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Klasifikasi_usaha;
use App\Models\Jenis_usaha;
use App\Models\Member;
use App\Models\Admin;
use App\Models\Mitra;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardAdminController extends Controller
{
    public function index()
    {   
        $profile = Auth('admin')->user();
        return view('dashboard.index', ['profile' => $profile]);
    }
    public function berita()
    {
        $berita = Berita::orderBy('id', 'ASC')->get();
        $profile = Auth('admin')->user();
        return view('dashboard.berita.index', ['beritas' => $berita, 'profile' => $profile]);
    }
    public function store_berita(Request $request)
    {
        try{
            $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|unique:beritas',
                'image' => 'required|mimes:png,jpeg,jpg|max:2048',
                'description' => 'required'
            ]);

            $store = new Berita;
            $store->title = $request->title;
            $store->slug = $request->slug;
            $store->description = $request->description;

            $foto = $request->file('image');
            $filename = date('Y-m-d-').$foto->getClientOriginalName();
            $path = 'berita-images/'.$filename;
            
            Storage::disk('public')->put($path, file_get_contents($foto));

            $store->image = $filename;
            $store->save();

            return ['status' => true, 'pesan' => 'Berita Berhasil Ditambahkan'];
        } catch(\Exception $e){
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function edit_berita($id)
    {
        $berita = Berita::find($id);
        if($berita)
        {
            return response()->json([
                'status' => 200,
                'berita' => $berita,
            ]);
        }
        else
        {
            return response()->json([
                'status' => 404,
                'message' => 'gak ada nih'
            ]);
        }
    }
    public function update_berita(Request $request,$id){
        try {
            $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'image' => 'image|mimes:png,jpeg,jpg|max:2048',
                'description' => 'required'
            ]);

            $update = Berita::find($id);
            $update->title = $request->title;
            $update->slug = $request->slug;
            $update->description = $request->description;

            if ($update->image) {
                Storage::disk('public')->delete('berita-images/' . $update->image);
            }
            $foto = $request->file('image');
            $fotoname = date('Y-m-d-') . $foto->getClientOriginalName();
            $request->image->move('storage/berita-images/', $fotoname);
            $update->image = $fotoname;
            $update->save();

            return ['status' => true, 'pesan' => 'Berita Berhasil Diupdate'];
        } catch(\Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function destroy_berita(Berita $id)
    {
        $data = Berita::find($id);

        foreach ($data as $berita) {
            Storage::disk('public')->delete('berita-images/' . $berita->image);
        }

        Berita::destroy($data);

        return redirect()->route('dashboard.berita');
    }
    public function mitra()
    {
        $profile = Auth('admin')->user();
        $mitra = Mitra::orderBy('id', 'ASC')->get();
        return view('dashboard.kemitraan.index', ['profile' => $profile, 'mitras' => $mitra]);
    }
    public function member()
    {
        $member = Member::orderBy('id', 'ASC')->get();
        $profile = Auth('admin')->user();
        return view('dashboard.member.index', ['member' => $member, 'profile' => $profile]);
    }
    public function jenis()
    {
        $jenis = Jenis_usaha::whereNull('deleted_at')->orderBy('id', 'ASC')->get();
        $profile = Auth('admin')->user();
        return view('dashboard.master-data.jenis-usaha.index', ['jenis' => $jenis, 'profile' => $profile]);
    }
    public function klasifikasi()
    {
        $klasifikasi = Klasifikasi_usaha::whereNull('deleted_at')->orderBy('id', 'ASC')->get();
        $profile = Auth('admin')->user();
        return view('dashboard.master-data.klasifikasi-usaha.index', ['klasifikasis' => $klasifikasi, 'profile' => $profile]);
    }
    public function store_jenis(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|max:255',
            ]);

            $store = new Jenis_usaha;
            $store->name = $request->name;
            $store->save();

            return ['status' => true, 'pesan' => 'Data Berhasil Ditambahkan'];
        } catch(\Exception $e){
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function edit_jenis($id)
    {
        $jenis = Jenis_usaha::find($id);
        if($jenis)
        {
            return response()->json([
                'status' => 200,
                'jenis' => $jenis,
            ]);
        }
        else
        {
            return response()->json([
                'status' => 404,
                'message' => 'gak ada nih'
            ]);
        }
    }
    public function update_jenis(Request $request,$id)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $update = Jenis_usaha::find($id);
            $update->name = $request->name;
            $update->save();

            return ['status' => true, 'pesan' => 'Data Berhasil Diupdate'];
        } catch(\Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function store_klasifikasi(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|max:255',
            ]);

            $store = new Klasifikasi_usaha;
            $store->name = $request->name;
            $store->save();

            return ['status' => true, 'pesan' => 'Data Berhasil Ditambahkan'];
        } catch(\Exception $e){
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function edit_klasifikasi($id)
    {
        $klasifikasi = Klasifikasi_usaha::find($id);
        if($klasifikasi)
        {
            return response()->json([
                'status' => 200,
                'klasifikasi' => $klasifikasi,
            ]);
        }
        else
        {
            return response()->json([
                'status' => 404,
                'message' => 'gak ada nih'
            ]);
        }
    }
    public function update_klasifikasi(Request $request,$id)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $update = Klasifikasi_usaha::find($id);
            $update->name = $request->name;
            $update->save();

            return ['status' => true, 'pesan' => 'Data Berhasil Diupdate'];
        } catch(\Exception $e) {
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function destroy_klasifikasi(Klasifikasi_usaha $id)
    {
        $data = Klasifikasi_usaha::find($id);

        Klasifikasi_usaha::destroy($data);
        return redirect()->route('dashboard.klasifikasi');
    }
    public function profile()
    {
        $profile = Auth('admin')->user();
        return view('dashboard.profile', ['profile' => $profile]);
    }
    public function updProfile(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|max:255',
                'email' => 'required|email|max:255',
                'password' => 'required|min:8',
            ]);
            $store = Auth('admin')->user();
            $store->name = $request->name;
            $store->username = $request->username;
            $store->email = $request->email;
            $store->password = Hash::make($request->password);
            $store->save();

            return ['status' => true, 'pesan' => 'Profile berhasil diupdate'];
        }catch(\Exception $e){
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
    public function updateImg(Request $request)
    {
        try{
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg',
            ]);
            $storesimg = Auth('admin')->user();
            if($storesimg) {
                if ($storesimg->image) {
                    Storage::disk('public')->delete('img-admin/' . $storesimg->image);
                }
            }
            $foto = $request->file('image');
            $fotoname = date('Y-m-d-') . $foto->getClientOriginalName();
            $request->image->move('storage/img-admin/', $fotoname);

            $storesimg->image = $fotoname;
            $storesimg->save();

            return ['status' => true, 'pesan' => 'Image berhasil diupdate'];
        }catch(\Exception $e){
            return ['status' => false, 'error' => $e->getMessage()];
        }
    }
}