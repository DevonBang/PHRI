@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> All Berita </h1>
    </div>
    <div class="table-responsive col-lg-9">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Berita
          </button>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $post)    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a class="text-decoration-none badge bg-info" href="{{ route('dashboard.berita-detail', ['slug' => $post->slug]) }}">See more</a>
                        <button type="button" class="badge bg-warning edit-berita" value="{{ $post->id }}">
                            Edit
                        </button>
                        <form action="{{ route('dashboard.berita.destroy', ['id' => $post->id]) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal Tambah Berita -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Berita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form_store" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title_create" name="title" value="{{ old('title') }}" required autofocus>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug_create" name="slug" required>
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Input gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <textarea class="form-control" id="description" name="description" aria-label="With textarea"></textarea>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Tambah Berita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit Berita -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModal2Label">Edit Berita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form_update" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="edit_berita_id">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="edit_title" name="title" required autofocus>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="edit_slug" name="slug" required>
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <img id="image-old" width="100px" height="100px" alt="old-image">
                        <div class="mb-3">
                            <label for="image" class="form-label">Input gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="edit_image" name="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <textarea class="form-control" id="edit_description" name="description" aria-label="With textarea"></textarea>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit Berita</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(function(){
            $(document).on('submit', '#form_store', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/dashboard/berita-store",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Good job!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                $('#exampleModal').modal('hide');
                                window.location.reload();
                            });
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

            $(document).on('click', '.edit-berita', function(e) {
                e.preventDefault();
                var berita_id = $(this).val();
                $('#edit_berita_id').val(berita_id);
                $('#staticBackdrop').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/dashboard/berita-edit/" + berita_id,
                    success: function(response) {
                        // console.log(response);
                        if (response.status === 200) {
                            $('#edit_title').val(response.berita.title);
                            $('#edit_slug').val(response.berita.slug);
                            $('#edit_description').val(response.berita.description);
                            $('#image-old').attr('src', '/storage/berita-images/' + response.berita.image);                            
                        } else {

                        }
                    }
                })
            });

            $(document).on('submit', '#form_update', function(e) {
                e.preventDefault();
                var berita_id = $('#edit_berita_id').val();
                $.ajax({
                    type: "POST",
                    url: "/dashboard/berita-update/" + berita_id,
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Good job!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                $('#staticBackdrop').modal('hide');
                                window.location.reload();
                            });
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

            $(document).on('click', '.btn-delete', function(e){
                e.preventDefault();
                var delay = $(this).data('delay');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function(){
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });

                            // Submit the form
                            $(e.target).closest('form').submit();

                            // Reload the page after the form is submitted
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                        }, delay);
                    }
                });
            })

            $(document).ready(function() {
                $('#title_create').on('input', function() {
                    $('#slug_create').val(
                        $('#title_create').val()
                        .toLowerCase()
                        .replace(/\s+/g, '-')
                        .replace(/[^\w\-]+/g, '')
                        .replace(/\-\-+/g, '-')
                        .replace(/^-+/, '')
                        .replace(/-+$/, '')
                    );
                });
            });
            $(document).ready(function() {
                $('#edit_title').on('input', function() {
                    $('#edit_slug').val(
                        $('#edit_title').val()
                        .toLowerCase()
                        .replace(/\s+/g, '-')
                        .replace(/[^\w\-]+/g, '')
                        .replace(/\-\-+/g, '-')
                        .replace(/^-+/, '')
                        .replace(/-+$/, '')
                    );
                });
            });
        })
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection