@extends('dashboard.layouts.main')
@section('content')
    <a href="{{ route('dashboard.member') }}" class="btn btn-primary">Kembali</a>
    <div class="card mt-3 mb-0">
        <div class="card-body">
            <h3 class="mb-3">Data Member: </h3>
            <p>Jenis Usaha: {{ $data->jenis_usaha->name }}</p>
            <p>Klasifikasi Usaha: {{ $data->klasifikasi_usaha->name }}</p>
            <p> Rating Usaha:
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $data->rating_usaha)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="far fa-star"></i>
                    @endif
                @endfor
            </p>
            <p>Nama Usaha: {{ $data->nama_usaha }}</p>
            <p>Alamat Usaha: {{ $data->alamat }}</p>
            <p>Nama Pemilik: {{ $owner->nama_pemilik }}</p>
        </div>
    </div>
@endsection
