<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class aContactController extends Controller
{
    public function create() {

        return view('contact_form');
       }

       public function store(Request $request) {

            Contact::create([

            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'subject' => $request->subject,
            'message' => $request->message

        ]);

        return response()->json(['success'=>'Form is successfully submitted!']);

      }
}
