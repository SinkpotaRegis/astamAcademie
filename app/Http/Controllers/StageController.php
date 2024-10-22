<?php

namespace App\Http\Controllers;

use App\Mail\StageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StageController extends Controller
{
    public function store(){
        $data = request()->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'poste' => 'required',
            'categorie' => 'required',
            'pays' => 'required',
            'motivation' => 'required',
        ]);

        Mail::to('contact@astam-academy-benin.com')->send(new StageMail($data));

        return redirect('/stage')->with('message', 'Votre demande de stage a été bien envoyée');
    }
}
