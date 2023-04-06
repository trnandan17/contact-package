<?php

namespace  Nandan\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nandan\Contact\Models\Contact;

class ContactController extends Controller
{
    
    public function index(){
        return view('contact::contact');
    }

    public function store(Request $request){

        $contact = Contact::create($request->all());
        return redirect(route('contact'));
    }
}
