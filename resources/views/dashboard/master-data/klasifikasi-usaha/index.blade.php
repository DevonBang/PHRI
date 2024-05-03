@extends('dashboard.layouts.main')

@section('content')
    <div class="card mt-3 mb-0">
        <div class="card-body">
            <h4 class="card-title text-center">Data Klasifikasi Usaha</h4>
            <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modal2">
                Tambah Data
            </button>
            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($klasifikasis as $klasifikasi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-capitalize">{{ $klasifikasi->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning edit-klasifikasi border-0"
                                        value="{{ $klasifikasi->id }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('dashboard.klasifikasi.destroy', ['id' => $klasifikasi->id]) }}"
                                        method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger border-0 btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modals tambah klasifikasi usaha --}}
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Form Tambah Klasifikasi Usaha</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_store-klasifikasi" class="mb-5">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label><span style="margin-left: 1px;color: red">*</span>
                            <input type="text" class="form-control"
                                id="name" name="name" placeholder="misal: Hotel" required autofocus
                                >
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

    <!-- Modal Edit jenis usaha -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-black" id="exampleModal2Label">Edit Data Jenis Usaha</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form_update" class="mb-5">
                        @csrf
                        <input type="hidden" id="edit_klasifikasi_id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label><span style="margin-left: 1px;color: red">*</span>
                            <input type="text" class="form-control"
                                id="edit_name" name="name" required autofocus placeholder="misal: Pribadi">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $(document).on('submit', '#form_store-klasifikasi', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/dashboard/klasifikasi-usaha-store",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                $('#exampleModal').modal('hide');
                                window.location.reload();
                            }, 1000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.error,
                                icon: "error"
                            });
                        }
                    }
                });
            });

            $(document).on('click', '.edit-klasifikasi', function(e) {
                e.preventDefault();
                var klasifikasi_id = $(this).val();
                $('#edit_klasifikasi_id').val(klasifikasi_id);
                $('#staticBackdrop').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/dashboard/klasifikasi-usaha-edit/" + klasifikasi_id,
                    success: function(response) {
                        if (response.status === 200) {
                            $('#edit_name').val(response.klasifikasi.name);
                        } else {

                        }
                    }
                })
            });

            $(document).on('submit', '#form_update', function(e) {
                e.preventDefault();
                var klasifikasi_id = $('#edit_klasifikasi_id').val();
                $.ajax({
                    type: "POST",
                    url: "/dashboard/klasifikasi-update/" + klasifikasi_id,
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                $('#staticBackdrop').modal('hide');
                                window.location.reload();
                            }, 1000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.error,
                                icon: "error"
                            });
                        }
                    }
                });
            });

            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Anda Yakin?",
                    text: "setelah dihapus anda dapat memulihkannya di halaman restore",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus"
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function() {
                            Swal.fire({
                                title: "Berhasil!",
                                text: "Data berhasil dihapus.",
                                icon: "success"
                            });

                            // Submit the form
                            $(e.target).closest('form').submit();

                            // Reload the page after the form is submitted
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        });
                    }
                });
            })
        })
    </script>
@endsection
