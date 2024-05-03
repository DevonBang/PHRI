@extends('dashboard.layouts.main')

@section('content')
    <div class="card mb-0">
        <div class="card-body">
            <h4 class="card-title text-center">All Member PHRI</h4>
            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pemilik</th>
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Handphone</th>
                            <th scope="col">Jenis Usaha</th>
                            {{-- <th scope="col">Klasifikasi Usaha</th>
                            <th scope="col">Rating Usaha</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $m)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $m->nama_usaha }}</th>
                                <th>{{ $m->alamat }}</th>
                                <th>{{ $m->no_hp }}</th>
                                <th>{{ $m->jenis_usaha->name }}</th>
                                <th>{{ $m->klasifikasi_usaha->name }}</th>
                                <th>{{ $m->rating_usaha }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
