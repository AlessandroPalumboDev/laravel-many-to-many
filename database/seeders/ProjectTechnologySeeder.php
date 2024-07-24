<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;
use App\Models\ProjectTechnology;


class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++){
            $new_project_technology =  new ProjectTechnology();

            $new_project_technology = Project::inRandomOrder()->first()->id;
            $new_project_technology = Technology::inRandomOrder()->first()->id;

            $new_project_technology->save();

        }
    }
}
