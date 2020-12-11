<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurriculumVitaeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CurriculumVitae::factory(20)->create();
    }
}
