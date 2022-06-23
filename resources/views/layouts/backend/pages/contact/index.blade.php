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
                @forelse ($contacts as $con)
                    <tr @if ($con->status == 0)  style="background-color:#33333378; color:#fff" @endif>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $con->name }}</td>
                        <td>{{ $con->email }}</td>
                        <td>{{  Illuminate\Support\Str::of($con->message)->words(10, '......')  }}</td>
                        <td>
                            @if ($con->status == 1)
                                <span class="btn btn-success mr-2" >Seen</span>
                            @else
                                <a data-id="{{ $con->id }}"  class="btn btn-info mr-2 viewSingleData">View</button>
                            @endif
                            <a data-id="{{ $con->id }}"  class="btn btn-danger messageDeleteId"> Delete</a>
                        </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5" style="color: red; font-size:25px; font-weight:blod" >Message Not Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="contactGifImage text-center">
            <div class="image_inner" style="margin-top: 100px ">
                <img src="{{ asset('backend') }}/assets/images/contact.gif" alt="">
            </div>
        </div>
    </div>
</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4>Name : <span id="showName"></span> </h4>
            <h4>Email : <span id="showEmail"></span></h4>
            Message :<p  id="showMessage"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary closebtn"  data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script type="text/javascript">


    $(".contactGifImage").addClass('d-none');
    $(".viewSingleData").click(function(){
        let id = $(this).attr('data-id');
        $(".contactGifImage").removeClass('d-none');
        $(".table").addClass('d-none');
        $.ajax({
            type: "GET",
            url : "/contact/"+id,
            timeout:5000,
            success: function(data){
                setTimeout(() => {
                    $("#showName").html(data.name);
                    $("#showEmail").html(data.email);
                    $("#showMessage").html(data.message);
                    $(".contactGifImage").addClass('d-none');
                    $(".table").removeClass('d-none');
                    $("#exampleModalCenter").modal("show")

                }, 500);

                $(window).on('click',function(e){
                    if(e.target.className == 'modal fade'){
                        window.location.reload(true);
                    }
                })
                $(".closebtn").click(function(){
                    window.location.reload(true);
                })

            },
            error: function(){
                $(".contactGifImage").removeClass('d-none');
                console.log("something went wrong")
            }
        })
    })

    $('.messageDeleteId').click(function(){
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
                window.location.href = "/contact/Delete/"+deleteId;
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    })
</script>
@endsection
