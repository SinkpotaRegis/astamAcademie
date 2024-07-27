<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function dologin(LoginRequest $request){
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('getadminindex'));
        }

        return to_route('getlogin')->withErrors([
            'email' => 'Email invalid',
        ])->onlyInput('email');
    }
}
