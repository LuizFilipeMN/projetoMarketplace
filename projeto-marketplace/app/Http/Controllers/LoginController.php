<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function showLoginForm(Request $request){
        return view('login', ['error' => session('error')]);
    }

    protected function sendFailedLoginResponse(Request $request){
        return redirect()->route('login')->with('error', 'Email não cadastrado.');
    }

    
}