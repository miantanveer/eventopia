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
        \App\Models\SpaceType::create(['type' => 'Restaurant']);
        \App\Models\SpaceType::create(['type' => 'Hotel']);
        \App\Models\SpaceType::create(['type' => 'Conference center']);
        \App\Models\SpaceType::create(['type' => 'Business Center']);
        \App\Models\SpaceType::create(['type' => 'Community Center']);
        \App\Models\SpaceType::create(['type' => 'Sport Club']);
        \App\Models\SpaceType::create(['type' => 'Art Gallery']);
        \App\Models\SpaceType::create(['type' => 'Academic Venue']);
        \App\Models\SpaceType::create(['type' => 'Stately home']);
        \App\Models\SpaceType::create(['type' => 'Stadium / Arena']);
        \App\Models\SpaceType::create(['type' => 'Parks / field']);
        \App\Models\SpaceType::create(['type' => 'Club']);
        \App\Models\SpaceType::create(['type' => 'hall']);
    }
}
