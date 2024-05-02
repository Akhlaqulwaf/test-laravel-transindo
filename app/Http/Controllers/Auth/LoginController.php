<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $data = $request->validated();

        if(Auth::attempt($data)){
            if(Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            }
            else{
                return redirect('/');
            }
        }else{
            return redirect()->route('login')->withErrors('Email dan password tidak sesuai')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
