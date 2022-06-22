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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $con)
                    <tr @if ($con->status == 0)  style="background-color:#333; color:#fff" @endif>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $con->name }}</td>
                        <td>{{ $con->email }}</td>
                        <td>{{ $con->message }}</td>
                        <td>
                            <a href="#" class="btn btn-info">View</a>
                            <a data-id="{{ $con->id }}"  class="btn btn-danger categoryDeleteId"> Delete</a>
                        </td>
                  </tr>
                @endforeach
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
