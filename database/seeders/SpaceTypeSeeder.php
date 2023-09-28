<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SpaceType::create(['type' => 'Hotels']);
        \App\Models\SpaceType::create(['type' => 'Event Halls and Convention Centers']);
        \App\Models\SpaceType::create(['type' => 'Event Venues']);
        \App\Models\SpaceType::create(['type' => 'Conference Centers']);
        \App\Models\SpaceType::create(['type' => 'Event Management Companies']);
        \App\Models\SpaceType::create(['type' => 'Government Facilities']);
        \App\Models\SpaceType::create(['type' => 'Universities and Educational Institutions']);
        \App\Models\SpaceType::create(['type' => 'Private Event Spaces']);
        \App\Models\SpaceType::create(['type' => 'Community Centers']);
    }
}
