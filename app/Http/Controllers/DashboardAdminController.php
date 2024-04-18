<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function berita()
    {
        $berita = Berita::orderBy('id', 'ASC')->get();
        return view('dashboard.berita.index', ['beritas' => $berita]);
    }
    public function berita_detail($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('dashboard.berita.show', ['berita' => $berita]);
    }
    public function create_berita()
    {
        return view('dashboard.berita.create');
    }
    public function store_berita(Request $request)
    {
        try{
            // dd($request->all());
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
        return view('dashboard.kemitraan.index');
    }
    public function member()
    {
        return view('dashboard.member.index');
    }
    
}