<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'telepon' => '347284728',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'alamat' => 'wilis',
            'no_sim' => '0',
            'password' => 'admin'
        ]);
    }
}
