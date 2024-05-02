<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBooking extends Model
{
    use HasFactory;

    protected $table = 'status_booking';
    protected $fillable = [
        'name'
    ];

    public function Booking(){
        return $this->hasMany(Booking::class);
    }
}
