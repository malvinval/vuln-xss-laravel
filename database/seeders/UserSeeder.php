<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Malvin Valerian",
            "email" => "malvin@gmail.com",
            "password" => Hash::make("12345678")
        ]);

        User::create([
            "name" => "Beyonce",
            "email" => "beyonce@gmail.com",
            "password" => Hash::make("12345678")
        ])->assignRole("admin");
    }
}
