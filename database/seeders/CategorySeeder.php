<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "nama" => "Information and Technology",
        ]);

        Category::create([
            "nama" => "Marketing",
        ]);

        Category::create([
            "nama" => "Insurance",
        ]);
       
        Category::create([
            "nama" => "Education & Training",
        ]);
        
        Category::create([
            "nama" => "Design & Creatives"
        ]);

        Category::create([
            "nama" => "Human & Resources"
        ]);

        Category::create([
            "nama" => "Hospitality & Tourism"
        ]);
        
    }
}
