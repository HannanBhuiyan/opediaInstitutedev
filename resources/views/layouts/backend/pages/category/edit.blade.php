@extends('layouts.backend.backend-master')
@section("content")
<div class="row">
    <div class="col-md-10 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Category</li>
            </ol>
          </nav>
        <div class="title mb-3">
            <h3>Update Category</h3>
        </div>
        <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
            <div class="card-body">
               <form action="{{ route('category.update', $data->id) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="old_image" value="{{ $data->category_image }}" >
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="category_name" name="category_name" value="{{ $data->category_name }}" class="form-control mb-2" placeholder="Category Name">
                        @error('category_name')
                            <span class="text-danger font-weight-bold" >{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Category Image</label><br>
                        <img src="{{ asset($data->category_image) }}" class="mb-2" alt="image">
                        <input type="file" name="category_image" class="form-control">
                        @error('category_image')
                            <span class="text-danger font-weight-bold" >{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-info" value="Update Category">
               </form>
            </div>
        </div>
    </div>
</div>
@endsection


