<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class WecomeController extends Controller
{
    public function index(){
        $data = Car::with('statusCar')->get();
        return view('users.welcome', ['data' => $data]);
    }
}
