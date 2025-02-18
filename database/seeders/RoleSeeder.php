<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => "JobSeeker",
        ]);

        Role::create([
            'name' => "Hirer",
        ]);

        Role::create([
            'name' => 'Admin',
        ]);
        
    }
}
