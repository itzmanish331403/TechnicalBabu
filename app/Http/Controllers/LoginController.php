<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
       return view('login-backend.login');
    }   


  public function loginuser(Request $request)
{
    $loginData = $request->only('email', 'password');

    if (Auth::attempt($loginData)) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login')->withError('Something went wrong....');
    }
}

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

}

