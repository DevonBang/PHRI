<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
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
    public function create()
    {
        return view('dashboard.berita.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'image' => 'required|mimes:png,jpeg,jpg|max:2048',
            'description' => 'required'
        ]);

        $foto = $request->file('image');
        $filename = date('Y-m-d-').$foto->getClientOriginalName();
        $path = 'berita-images/'.$filename;
        
        Storage::disk('public')->put($path, file_get_contents($foto));

        $validateData['image'] = $filename;

        Berita::create($validateData);

        return redirect()->route('dashboard.berita')->with('success', 'New post has been added');
    }
    public function edit($slug)
    { 
        $berita = Berita::where('slug', $slug)->first();
        if ($berita === null) {
            abort(404);
        }

        return view('dashboard.berita.edit', [
            'berita' => $berita,
        ]);
    }
    public function update(Request $request,$id){
        $rules = [
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:beritas',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        $validateData = $request->validate($rules);
        
        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('berita-images');
        }

        Berita::whereId($id)->update($validateData);

        return redirect()->route('dashboard.berita')->with('success', 'Post has been updated');
    }
    public function destroy(Berita $id)
    {
        $data = Berita::find($id);

        foreach ($data as $berita) {
            Storage::disk('public')->delete('berita-images/' . $berita->image);
        }

        Berita::destroy($data);

        return redirect()->route('dashboard.berita')->with('success', 'Berita has been deleted!');
    }
}
