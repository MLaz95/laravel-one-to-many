<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $newProject = new Project();
            $newProject->name = $faker->word();
            $newProject->description = $faker->paragraph();
            // $newProject->cover = $faker->imageUrl(640, 480, 'a website', true);
            $newProject->tech = $faker->words(rand(1, 3), true);
            $newProject->github = $faker->url();
            $newProject->save();
        }
    }
}
