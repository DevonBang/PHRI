@extends('template.main')
@section('content')
    <h1>halaman berita</h1>
    @foreach ($beritas as $berita)
        <h1>title: <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}">{{ $berita->title }}</a></h1> 
        <p>desc: {{ $berita->description }}</p>
        <img src="{{ asset('assets/img/' . $berita->image) }}">
    @endforeach
@endsection