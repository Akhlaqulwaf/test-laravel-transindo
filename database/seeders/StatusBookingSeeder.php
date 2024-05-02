<?php

namespace Database\Seeders;

use App\Models\StatusBooking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = [
            'selesai',
            'belum selesai'
        ];
        foreach($car as $val){
            StatusBooking::create([
                'name' => $val
            ]);
        }
    }
}
