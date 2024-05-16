@extends('dashboard-member.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="mb-3">
            <h4>Member Dashboard</h4>
        </div>
        @if($member->status_data === 'belum_input')
            <a href="{{ route('isidata.member') }}" class="btn btn-primary mb-3">Lengkapi Data</a>
        @endif

        <div class="card bg-white col-md-6">
            <div class="card-header">
                <h5 class="card-title text-black">
                    Member Name: {{ auth('member')->user()->name }}
                </h5>
                <hr>
                <p>jenis usaha: {{ $member->jenis_usaha->name }}</p>
                <p>klasifikasi usaha: {{ $member->klasifikasi_usaha->name }}</p>
                <p>Email: {{ $member->email }}</p>
                <p>Rating Usaha:
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $member->rating_usaha)
                            <i class="fas fa-star"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                    @endfor
                </p>
                <p>Status Data: {{ str_replace('_', ' ', $member->status_data) }}</p>
            </div>
        </div>
    </div>
@endsection
