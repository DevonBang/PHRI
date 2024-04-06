<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::orderBy('id', 'ASC')->get();
        return view('berita', ['beritas' => $berita]);
    }
    public function detail_berita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('detail-berita', ['berita' => $berita]);
    }
}
