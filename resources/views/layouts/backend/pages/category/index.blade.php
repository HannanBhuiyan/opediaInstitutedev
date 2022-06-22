@extends('layouts.backend.backend-master')
@section("content")
<div class="row">
    <div class="col-md-7">
        <div class="title mb-3">
            <h3>All Category</h3>
        </div>
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">SL.NO</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $cat)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $cat->category_name }}</td>
                        <td><img src="{{ asset($cat->category_image) }}" alt="image"></td>
                        <td>
                            <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-success" >Edit</a>
                            <a data-id="{{ $cat->id }}"  class="btn btn-danger categoryDeleteId"> Delete</a>
                        </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-5">
        <div class="title mb-3">
            <h3>Add Category</h3>
        </div>
        <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
            <div class="card-body">
               <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="category_name" name="category_name" class="form-control mb-2" placeholder="Category Name">
                        @error('category_name')
                            <span class="text-danger font-weight-bold" >{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category Image</label>
                        <input type="file" name="category_image" class="form-control">
                        @error('category_image')
                            <span class="text-danger font-weight-bold" >{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-info" value="Add Category">
               </form>
            </div>
        </div>
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
