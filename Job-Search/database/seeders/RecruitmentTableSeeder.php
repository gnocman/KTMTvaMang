<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecruitmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Recruitment::factory(20)->create();
    }
}
