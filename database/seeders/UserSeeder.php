<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pengen buat dummy User dulu
        $faker = Faker::create();
        User::create([
            'name' => "Kevin Petersen",
            'email' => "KevinPetersen@gmail.com",
            'password' => Hash::make('password'),
            'roles_id' => 1,
            'companies_id' => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(50),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => "Komi Shouko",
            'email' => "KomiShouko@gmail.com",
            'password' => Hash::make('password'),
            'roles_id' => 2,
            'companies_id' => 2,
            'email_verified_at' => now(),
            'remember_token' => Str::random(50),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
