<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function detail(int $id){
        $data = Car::with('statusCar')->first();

        return view('users.carDetail', ['data' => $data]);
    }
}
