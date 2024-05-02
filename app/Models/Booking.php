<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'user_id',
        'car_id',
        'tgl_mulai',
        'tgl_selesai',
        'total',
        'status_booking_id'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Car(){
        return $this->belongsTo(Car::class);
    }

    public function StatusBooking(){
        return $this->belongsTo(StatusBooking::class);
    }
}
