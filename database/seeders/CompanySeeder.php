<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'Nama_Perusahaan' => "Bina Nusantara University",
            'description' => "BINUS itu mudah dan menyenangkan bukan"
        ]);

        Company::create([
            'Nama_Perusahaan' => "WIBU Coorperation",
            'description' => "WIBU 4Life"
        ]);
    }
}
