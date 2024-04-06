@extends('template.main')
@section('content')
    <h1>halaman detail berita</h1>
    <a href="{{ route('berita') }}">Back to berita</a>
        <h1>title: {{ $berita->title }}</h1>
        <p>desc: {{ $berita->description }}</p>
        {{-- <img src="{{ asset('assets/img/news-1.jpg') }}"> --}}
        <img src="{{ asset('assets/img/' . $berita->image) }}">
@endsection