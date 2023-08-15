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
        \App\Models\SpaceType::create(['type' => 'Apartment']);
        \App\Models\SpaceType::create(['type' => 'Suit']);
        \App\Models\SpaceType::create(['type' => 'Studio']);
        \App\Models\SpaceType::create(['type' => 'Gallery']);
        \App\Models\SpaceType::create(['type' => 'Arcade']);
        \App\Models\SpaceType::create(['type' => 'Gym']);
    }
}
