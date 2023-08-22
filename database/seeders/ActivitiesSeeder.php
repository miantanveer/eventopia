<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SpaceActivity::create(['title' => 'Meetings']);
        \App\Models\SpaceActivity::create(['title' => 'Events']);
        \App\Models\SpaceActivity::create(['title' => 'Media Productions']);
    }
}
