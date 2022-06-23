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

    public function singleContect($id)
    {
        $singleContacts = Contact::findOrFail($id);
        $singleContacts->status = 1;
        $singleContacts->save();
        return response()->json($singleContacts);

    }

    public function ContactDelete($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back()->with("success", "Message Delete Success");
    }


}
