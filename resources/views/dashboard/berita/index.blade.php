@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> All Berita </h1>
    </div>
    <div class="table-responsive col-lg-9">
        <a class="btn btn-primary mb-3" href="{{ route('dashboard.berita.create') }}">Create new berita</a>
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
                        <a class="text-decoration-none badge bg-warning" href="{{ route('dashboard.berita.edit', ['slug' => $post->slug]) }}">Edit</a>
                        <form action="{{ route('dashboard.berita.destroy', ['id' => $post->id]) }}" method="post" class="d-inline" id="delete-form-{{ $post->id }}">
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
    <script>
        $(function(){
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