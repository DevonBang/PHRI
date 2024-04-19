@extends('dashboard.layouts.main')

@section('container')

<h1 class="text-center mt-3 mb-3">All Admin</h1>
<button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Admin
  </button>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admins as $admin)    
        <tr>
            <th>{{ $loop->iteration }}</th>
            <th>{{ $admin->name }}</th>
            <th>{{ $admin->email }}</th>
            <th>
                <button class="badge bg-warning border-0">Reset Password</button>
                <form action="{{ route('dashboard.admin.destroy', ['id' => $admin->id]) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0 btn-delete">Delete</button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Modal Tambah Admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" id="form_store" class="mb-5">
              @csrf
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                  @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autocomplete="username">
                  @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>       
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autocomplete="email">
                  @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>       
              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                  @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>       
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Admin</button>
              </div>
          </form>
        </div>
      </div>
    </div>
</div>
<script>
    $(function(){
        $(document).on('submit', '#form_store', function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/dashboard/admin/add",
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
    })
</script>
@endsection