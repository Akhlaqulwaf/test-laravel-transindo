<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        $data1 = Booking::with("Car")->with("User")->with('StatusBooking')->where('user_id', $user)->get();
        dd($data1);
    }
}
