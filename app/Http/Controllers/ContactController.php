<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        return view('user.contact');
    }

    public function store(){
        $data = request()->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pays' => 'required',
            'message' => 'required',
        ]);

        Mail::to('contact@astam-academy-benin.com')->send(new ContactMail($data));

        return redirect('/contact')->with('message', 'Votre message a été bien envoyé');
    }
}
