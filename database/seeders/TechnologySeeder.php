<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Facades\Schema;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Technology::truncate();

        $technologies = ['HTML', 'CSS', 'Bootstrap', 'Javascript', 'Vue', 'Axios', 'PHP', 'MySQL', 'SQL', 'Laravel'];

        foreach ($technologies as $technology){

            $new_technology = new Technology();

            $new_technology->name = $technology;

            $new_technology->save();
        }




        Schema::enableForeignKeyConstraints();
    }
}
