<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCar extends Model
{
    use HasFactory;

    protected $table = 'status_car';
    protected $fillable = [
        'name'
    ];

    public function Car(){
        return $this->hasMany(Car::class);
    }
}
