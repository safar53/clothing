<?php

namespace App\Http\Controllers;

use Validator;
use App\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {   
        $rules = Validator::make($request->all(), 
        [
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'string|email|max:255',
            'subject' => 'string|max:300',
            'message' => 'string|max:300',
        ]);
        if($rules->fails()){
            alert()->warning('WarningAlert','Your message has been not sent!');
            return redirect()->back()->withErrors($rules)->withInput();
        }else{
            $swal = 'swal("Good job!", "You clicked the button!", "success");';
            Contact::create($request->all());
            alert()->success('SuccessAlert','Your message has been sent!');
            return redirect()->back();

        }
    }
}
