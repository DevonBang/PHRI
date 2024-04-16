@extends('template.main')
@section('content')
    <h1>halaman berita</h1>
    @foreach ($beritas as $berita)
        <h1>title: <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}">{{ $berita->title }}</a></h1> 
        <p> {!! $berita->description !!}</p>
        <img src="{{ asset('storage/berita-images/' . $berita->image) }}">
    @endforeach
@endsection