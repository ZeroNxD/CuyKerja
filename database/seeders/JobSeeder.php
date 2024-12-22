<?php

namespace Database\Seeders;

use App\Models\HireJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HireJob::create([
            'employer_id' => 2,
            'types_id' => 1,
            'Logo' => 'assets/Software Engineer.png',
            'job_title' => 'Software Engineer',
            'job_description' => 'Develop and maintain web applications.',
            'location' => 'Jakarta',
            'salary_min' => 8000000,
            'salary_max' => 12000000,
            'requirements' => 'Proficiency in PHP, Laravel, and MySQL.',
            'responsibilities' => 'Build robust APIs, write clean code, and collaborate with team members.',
            'categories_id' => 1,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 3,
            'Logo' => 'assets/UI.png',
            'job_title' => 'UI/UX Designer',
            'job_description' => 'Design user-friendly interfaces and enhance user experiences.',
            'location' => 'Bandung',
            'salary_min' => 6000000,
            'salary_max' => 9000000,
            'requirements' => 'Experience with Figma, Adobe XD, and user research.',
            'responsibilities' => 'Create wireframes, prototypes, and collaborate with developers.',
            'categories_id' => 1,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 3,
            'Logo' => 'assets/Marketing.png',
            'job_title' => 'Marketing Product Sales',
            'job_description' => 'Try to sell product of companies more frequently',
            'location' => 'Pekanbaru',
            'salary_min' => 5000000,
            'salary_max' => 7000000,
            'requirements' => 'Experience with selling, management, accountant, and have expert communication skills',
            'responsibilities' => 'Able to report the sale of the product',
            'categories_id' => 2,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 2,
            'Logo' => 'assets/Assurance.png',
            'job_title' => 'Agent Assurance',
            'job_description' => 'Offers a new client about the benefit of our assurance',
            'location' => 'Jakarta',
            'salary_min' => 2000000,
            'salary_max' => 7000000,
            'requirements' => 'Good Communication skills, self-confidence',
            'responsibilities' => 'About 3 months of works, must have a client/closing',
            'categories_id' => 3,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 1,
            'Logo' => 'assets/Teacher.png',
            'job_title' => 'Kindergarten Teacher',
            'job_description' => 'Teaching and playinh with kindergarten children',
            'location' => 'America',
            'salary_min' => 3000000,
            'salary_max' => 5000000,
            'requirements' => 'Like Children and avaiable 24/7',
            'responsibilities' => 'able to keep professional in front of children and not doing any harassment by any reason',
            'categories_id' => 4,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 1,
            'Logo' => 'assets/Architect.png',
            'job_title' => 'Building Architect',
            'job_description' => 'We are seeking a talented and creative Architect to join our team. The ideal candidate 
            will be responsible for designing, planning, and overseeing the construction of buildings and structures. The Architect will collaborate with clients, engineers, and 
            construction teams to bring projects from concept to completion, ensuring functionality, sustainability, 
            and aesthetic appeal.',
            'location' => 'America',
            'salary_min' => 10000000,
            'salary_max' => 15000000,
            'requirements' => 'Bachelor Degree in Architecture and strong visualization skill',
            'responsibilities' => 'Project Design and Planning with clients with development of blueprint and detailed plans of building',
            'categories_id' => 5,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 4,
            'Logo' => 'assets/HR.png',
            'job_title' => 'Human Resource Management',
            'job_description' => 'Able to selective choose the best among the applied intern of college students that applied on companies',
            'location' => 'America',
            'salary_min' => 5000000,
            'salary_max' => 7000000,
            'requirements' => 'Good communication skills and critical thinking',
            'responsibilities' => 'Choosing the best among the best to enter the company',
            'categories_id' => 6,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        HireJob::create([
            'employer_id' => 2,
            'types_id' => 1,
            'Logo' => 'assets/Chef.png',
            'job_title' => 'Chef',
            'job_description' => 'able to work as team in a big kitchen as anything including cooking, cutting, dish washer and any other',
            'location' => 'America',
            'salary_min' => 10000000,
            'salary_max' => 20000000,
            'requirements' => 'Master of Cooking any kind of food, good communication skill, and good critical thinking skill',
            'responsibilities' => 'Cooking the best food for the restaurant',
            'categories_id' => 7,
            'status' => 'Open',
            'deadline' => now()->addDays(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
