@extends('layouts.backend.backend-master')
@section("content")
<div class="row">
    <div class="col-md-12 m-auto">
        <div class="title mb-3">
            <h3>Add Course</h3>
        </div>

        <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
            <div class="card-body">
               <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select name="category_id" class="form-control">
                                    <option value>--Choose One--</option>
                                    @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('category_name')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Title</label>
                                <input type="text" name="course_title" class="form-control mb-2" placeholder="Course Title">
                                @error('course_title')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Duration</label>
                                <input type="text" name="course_duration" class="form-control mb-2" placeholder="Course Duration">
                                @error('course_duration')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Total Class</label>
                                <input type="text" name="total_class" class="form-control mb-2" placeholder="Total Class">
                                @error('total_class')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Short Description</label>
                                <textarea name="course_short_desc" class="form-control" id="" cols="30" rows="5" placeholder="Course Short Description Write Here..."></textarea>
                                @error('course_short_desc')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Course Long Description</label>
                                <textarea name="course_long_desc" class="form-control" id="" cols="30" rows="7" placeholder="Course Long Description Write Here..."></textarea>
                                @error('course_long_desc')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Thumbnail Vedio</label>
                                <input type="file" name="course_thumbnail_vedio" class="form-control mb-2">
                                @error('course_thumbnail_vedio')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Background Vedio</label>
                                <input type="file" name="course_bg_vedio" class="form-control mb-2">
                                @error('course_bg_vedio')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Certificate Image</label>
                                <input type="file" name="certificate_image" class="form-control mb-2">
                                @error('certificate_image')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Item</label>
                                <table class="table text-center table-bordered" id="courseItem">
                                    <tr>
                                      <td>
                                        <input type="text" name="course_item_name[]" id="courseitem" class="form-control">
                                    </td>
                                      <td>
                                       <button type="button" id="addcourseitem" name="addcourseitem" class="btn btn-info">Add</button>
                                      </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label>Course Details Item</label>
                                <table class="table text-center table-bordered" id="courseDetailsitem">
                                    <tr>
                                        <td>
                                            <input type="text" name="list_item_name[]" id="list_item_name" class="form-control">
                                        </td>
                                      <td>
                                       <button type="button" id="addCourseDetailsItem" name="addCourseDetailsItem" class="btn btn-info">Add</button>
                                      </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label>Total Project</label>
                                <input type="text" name="total_project" class="form-control mb-2" placeholder="Total Project">
                                @error('total_project')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Career Title</label>
                                <input type="text" name="career_title" class="form-control mb-2" placeholder="Career Title">
                                @error('career_title')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Career Description</label>
                                <input type="text" name="career_desc" class="form-control mb-2" placeholder="Career Description">
                                @error('career_desc')
                                    <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
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
    // course item
      var i = 1;
      $("#addcourseitem").click(function(e){
          i++;
          $("#courseItem").append('<tr id="row'+i+'" ><td><input type="text" name="course_item_name[]" id="name" class="form-control">   </td>  <td> <button id="'+i+'" name="remove" class="btn btn-danger remove_btn">x</button>  </td></tr>')
      });
      $(document).on('click', '.remove_btn', function(){
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
      });
    // end
    // course item
      var i = 1;
      $("#addCourseDetailsItem").click(function(e){
          i++;
          $("#courseDetailsitem").append('<tr id="row'+i+'" ><td><input type="text" name="list_item_name[]" id="name" class="form-control">   </td>  <td> <button id="'+i+'" name="remove" class="btn btn-danger remove_btn">x</button>  </td></tr>')
      });
      $(document).on('click', '.remove_btn', function(){
        var button_id = $(this).attr('id');
        $('#row'+button_id+'').remove();
      });
    // end
</script>

@endsection
