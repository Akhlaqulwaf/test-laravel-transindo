<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){

        $data = $request->validated();

        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->role = 'user';
        $user->save();

        return redirect()->route('login');
    }
}
