<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Auth;
use Carbon\Carbon;
use Hash;

class ProfileController extends Controller
{

    public function AdminProfileIndex()
    {
        return view('layouts.backend.pages.profile.index');
    }

    public function AdminProfileImageUpdate(Request $request)
    {
        $request->validate([
            '*' => 'required'
        ]);

        $file_name = $_FILES['profile_image']['name'];
        $file_tmp_name = $_FILES['profile_image']['tmp_name'];
        $file_ext = explode('.', $file_name);
        $fileActExt = strtolower(end($file_ext));
        $allow = array('jpg', 'png', 'gif', 'jpeg');
        if(in_array($fileActExt, $allow)){
            $last_image = 'backend/assets/images/uploads/profile/'.$file_name;
            move_uploaded_file($file_tmp_name, $last_image );
        }else {
            return redirect()->back()->with("fail", "You can't upload files of this type !");
        }
        // insert
        $data = User::find(Auth::id());
        $data->profile_image = $last_image;
        $data->updated_at = Carbon::now();
        $data->save();
        return back();
        return redirect()->back()->with('success', 'Image Update Success');
    }

    public function AdminProfilePasswordUpdate(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ],[
            'old_password.required' => 'The old Password Required.',
            'new_password.required' => 'The New Password Required.',
            'confirm_password.required' => 'The Confirm Password Required.',
        ]);
        if ( Hash::check($request->old_password, Auth::user()->password) ){
            if($request->new_password == $request->confirm_password){
                User::findOrFail(Auth::id())->update([
                    'password' => Hash::make($request->new_password),
                ]);
                Auth::logout();
                return redirect()->route('login')->with('success', 'Password Update Success');
            }else {
                return redirect()->back()->with('fail', 'New Password and Confirm Password Does not match');
            }
        }else {
            return redirect()->back()->with('fail', 'Old Password Does not match');
        }
    }

    public function AdminProfileUpdate(Request $request)
    {
        $data = User::findOrFail(Auth::id());
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect()->back()->with('success', 'Profile Update Success');
    }



}
