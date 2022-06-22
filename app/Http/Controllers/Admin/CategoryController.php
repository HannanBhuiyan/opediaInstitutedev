<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::orderBy('id', 'desc')->get();
        return view('layouts.backend.pages.category.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            '*' => 'required'
        ]);

        $file_name = $_FILES['category_image']['name'];
        $file_tmp_name = $_FILES['category_image']['tmp_name'];
        $file_ext = explode('.', $file_name);
        $fileActExt = strtolower(end($file_ext));
        $allow = array('jpg', 'png', 'gif', 'jpeg');
        if(in_array($fileActExt, $allow)){
            $last_image = 'backend/assets/images/uploads/category/'.$file_name;
            move_uploaded_file($file_tmp_name, $last_image );
        }else {
            return redirect()->back()->with("fail", "You can't upload files of this type !");
        }

        $data = new Category();
        $data->category_name = $request->category_name;
        $data->category_image =  $last_image;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with("success", "Category Add Success");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);

        return view('layouts.backend.pages.category.edit', compact('data') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            '*' => 'required'
        ]);

        if($request->hasFile("category_image")){
            if(file_exists($request->old_image)){
                unlink($request->old_image);
            }

            $file_name = $_FILES['category_image']['name'];
            $file_tmp_name = $_FILES['category_image']['tmp_name'];
            $file_ext = explode('.', $file_name);
            $fileActExt = strtolower(end($file_ext));
            $allow = array('jpg', 'png', 'gif', 'jpeg');
            if(in_array($fileActExt, $allow)){
                $last_image = 'backend/assets/images/uploads/category/'.$file_name;
                move_uploaded_file($file_tmp_name, $last_image );
            }else {
                return redirect()->back()->with("fail", "You can't upload files of this type !");
            }
            $data = Category::findOrFail($id);
            $data->category_image = $last_image;
            $data->save();
        }

        $data = Category::findOrFail($id);
        $data->category_name = $request->category_name;
        $data->created_at = Carbon::now();
        $data->save();
        return redirect()->back()->with("success", "Category Update Success");


    }

    public function categoryDelete($id)
    {
        $data = Category::findOrFail($id);
        if(file_exists($data->category_image)){
            unlink($data->category_image);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Category Delete successfully');
    }
}
