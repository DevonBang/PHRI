@extends('dashboard.layouts.main')
@section('content')
    <div class="card mb-0">
        <div class="card-body">
            <h4 class="card-title text-center">All Mitra</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Bagian</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Diterima</th>
                            <th scope="col">Alasan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mitras as $m)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $m->nama_pic }}</td>
                                <td>{{ $m->jenis_usaha->name }}</td>
                                <td>{{ $m->email }}</td>
                                <td>+62{{ $m->no_hp }}</td>
                                <td>{{ $m->created_at }}</td>
                                <td>
                                    @if ($m->status === 'n/a')
                                        <span class="badges bg-lightyellow">{{ $m->status }}</span>
                                    @elseif($m->status === 'diterima')
                                        <span class="badges bg-lightgreen">{{ $m->status }}</span>
                                    @else
                                        <span class="badges bg-lightred">{{ $m->status }}</span>
                                    @endif
                                </td>


                                @if ($m->status === 'diterima')
                                    <td>{{ $m->created_at }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                @if ($m->status === 'ditolak')
                                    <td>{{ $m->alasan }}</td>
                                @else
                                    <td>-</td>
                                @endif

                                @if ($m->status === 'n/a')
                                    <td>
                                        <button class="btn btn-sm btn-primary btn-terima">Terima</button>
                                        <button class="btn btn-sm btn-danger btn-tolak" data-bs-toggle="modal" data-bs-target="#exampleModal">Tolak</button>
                                    </td>
                                @else
                                    <td>-</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

{{-- Modals nolak mitra --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Form Tolak Mitra</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_store-jenis" class="mb-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Alasan</label><span
                            style="margin-left: 1px;color: red">*</span>
                        <input type="text" class="form-control" id="alasan" name="alasan" required autofocus
                            placeholder="misal: Belum butuh saat ini">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
