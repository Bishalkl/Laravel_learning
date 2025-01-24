<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path:'database/json/students.json');
        $students = collect(json_decode($json));

        $students->each(function($student){
            student::create([
                'name' => $student->name,
                'email' => $student->email
            ]);
        });

        // for fake data
        // for($i = 1; $i<=10; $i++) {
        //     student::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->email()
        //      ]);
        // }
    }
}
