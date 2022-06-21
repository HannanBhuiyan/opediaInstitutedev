@extends('layouts.backend.backend-master')

@section("content")
<div class="row">
    <div class="col-md-3">
        <div class="card-box">
            <img width="100%" id="img_Id"  src="{{ asset(Auth::user()->profile_image) }}" alt="">
        </div>
    </div>
    <div class="col-md-9">
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">Profile Setting</h4>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#change_image" data-toggle="tab" aria-expanded="false" class="nav-link active show">
                       <i class="fi-monitor mr-2"></i> Change Image
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#change_password" data-toggle="tab" aria-expanded="true" class="nav-link">
                        <i class="fa fa-unlock-alt mr-2"></i>Change Password
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                        <i class="fi-mail mr-2"></i> Change Profile
                    </a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="change_image">
                    <div class="profile_image_section mt-3">
                        <form action="{{ route('profile.image.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Choose Image</label>
                            <input type="file"  onchange="document.getElementById('img_Id').src=window.URL.createObjectURL(this.files[0])" class="form-control" name="profile_image">
                            <div class="text-center">
                                <input type="submit" class="btn btn-info mt-3" name="submit" value="Update Image">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" id="change_password">
                    <form action="{{ route('profiles.password.update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
                                    <div class="card-body">
                                        <label>Current Password</label>
                                        <input type="password" name="old_password" class="form-control mb-2" placeholder="Current Password">
                                        @error('old_password')
                                            <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
                                    <div class="card-body">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control mb-2" placeholder="New Password">
                                        @error('new_password')
                                        <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
                                    <div class="card-body">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="confirm_password" class="form-control mb-2" placeholder="Confirm New Password">
                                        @error('confirm_password')
                                        <span class="text-danger font-weight-bold" >{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="m-auto pt-5 pb-4">
                                <button type="submit" class="btn btn-custom" >Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="messages">
                    <form action="{{ route('profiles.update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
                                    <div class="card-body">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card" style="background:#dddddd2b; border: 1px solid #c0c0c042;">
                                    <div class="card-body">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="m-auto pt-5 pb-4">
                                <button type="submit" class="btn btn-custom" >Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
