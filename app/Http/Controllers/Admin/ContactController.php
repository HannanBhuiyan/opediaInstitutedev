<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{


    public function ContactIndex()
    {

        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('layouts.backend.pages.contact.index', compact('contacts'));

    }


}
