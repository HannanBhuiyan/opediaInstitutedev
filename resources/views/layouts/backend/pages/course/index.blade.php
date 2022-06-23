@extends('layouts.backend.backend-master')
@section("content")
<div class="row">
    <div class="col-md-12 m-auto">
        <div class="title mb-3">
            <h3>All Message</h3>
        </div>
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">SL.NO</th>
                <th scope="col">Course Name</th>
                <th scope="col">Course Title</th>
                <th scope="col">Course Video</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>Web Development</td>
                        <td><img src="{{ $course->course_thumbnail_vedio }}" alt="image"></td>
                        <td>{{ $course->course_title }}</td>
                        <td>
                            <a href="" class="btn btn-info">view</a>
                            <a href="" class="btn btn-success">Edit</a>
                            <a data-id="{{ $course->id }}"  class="btn btn-danger categoryDeleteId">Delete</a>
                        </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5" style="color: red; font-size:25px; font-weight:blod" >Course Not Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">

    $('.categoryDeleteId').click(function(){
        let deleteId = $(this).attr('data-id')
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
                window.location.href = "/category/Delete/"+deleteId;
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    })
</script>
@endsection
