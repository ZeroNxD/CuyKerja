<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobType::create([
            'Type_Name' => "Full-Time",
        ]);

        JobType::create([
            'Type_Name' => "Part-Time",
        ]);

        JobType::create([
            'Type_Name' => "FreeLance",
        ]);
        
        JobType::create([
            'Type_Name' => "Internship",
        ]);
        
    }
}
