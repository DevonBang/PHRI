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
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Usaha</th>
                            <th scope="col">Klasifikasi Usaha</th>
                            <th scope="col">Rating Usaha</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member as $m)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $m->nama_usaha }}</th>
                                <th>{{ $m->alamat }}</th>
                                <th>{{ $m->jenis_usaha->name }}</th>
                                <th>{{ $m->klasifikasi_usaha->name }}</th>
                                <th>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $m->rating_usaha)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </th>
                                <th>
                                    <a href="{{ route('dashboard.member.detail', ['id' => $m->id]) }}" class="btn btn-sm btn-secondary">Detail</a>
                                    <button class="btn btn-sm btn-primary">Terima</button>
                                    <button class="btn btn-sm btn-danger">Tolak</button>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
