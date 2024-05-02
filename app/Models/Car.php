<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'model',
        'description',
        'merek',
        'image',
        'no_plat',
        'tarif',
        'status_car_id'
    ];

    public function statusCar(){
        return $this->belongsTo(StatusCar::class);
    }

    public function Booking(){
        return $this->hasMany(Booking::class);
    }
}
