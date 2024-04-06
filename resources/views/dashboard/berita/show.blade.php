@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $berita->title }}</h1>

            <a class="btn btn-success" href="{{ route('dashboard.berita') }}">Back to all berita</a>
            <div style="max-height: 350px; overflow:hidden;">
                <img class="img-fluid mt-3" src="{{ asset('storage/berita-images/' . $berita->image) }}" class="card-img-top">
            </div>

            <article class="my-3 fs-5">
                {!! $berita->description !!}
            </article>
        </div>
    </div>
</div>
@endsection