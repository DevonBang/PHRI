@extends('template.main')
@section('content')
    <h1>halaman detail berita</h1>
    <a href="{{ route('berita') }}">Back to berita</a>
        <h1>title: {{ $berita->title }}</h1>
        <p> {!! $berita->description !!}</p>
        <img src="{{ asset('storage/berita-images/' . $berita->image) }}">
@endsection