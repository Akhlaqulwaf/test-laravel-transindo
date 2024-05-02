<?php

namespace Database\Seeders;

use App\Models\StatusCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $car = [
            'dipinjam',
            'tidak dipinjam'
        ];
        foreach($car as $val){
            StatusCar::create([
                'name' => $val
            ]);
        }
    }
}
