<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create('en_US');

        Category::create([
            "nama" => "Information and Technology",
            "logo" => "assets/ITCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);

        Category::create([
            "nama" => "Marketing",
            "logo" => "assets/MarketingCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);

        Category::create([
            "nama" => "Insurance",
            "logo" => "assets/InsuranceCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);
       
        Category::create([
            "nama" => "Education & Training",
            "logo" => "assets/ITCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);
        
        Category::create([
            "nama" => "Design & Creatives",
            "logo" => "assets/DesignCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);

        Category::create([
            "nama" => "Human & Resources",
            "logo" => "assets/HRCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);

        Category::create([
            "nama" => "Hospitality & Tourism",
            "logo" => "assets/HTCategories.png",
            "descriptions" => $faker->paragraph(8),
        ]);
        
    }
}
