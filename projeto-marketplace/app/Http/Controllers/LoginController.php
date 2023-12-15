<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function showLoginForm(Request $request){
        return view('login', ['error' => session('error')]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'Email não cadastrado.',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('home.index');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'senha');

    if (Auth::attempt($credentials)) {
        return redirect()->route('home');
    }

    return redirect()->route('login')->withErrors([
        'email' => 'Email não cadastrado ou senha incorreta.',
    ]);
}


    
}