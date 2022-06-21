<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function FrontendIndex()
    {
        return view('layouts.frontend.master');
    }
}
