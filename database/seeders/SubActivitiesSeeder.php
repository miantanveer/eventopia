<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '1','title' => 'Workshops']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '1','title' => 'Presentations']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '1','title' => 'Retreats']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '1','title' => 'More']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '2','title' => 'Birthdays']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '2','title' => 'Networking Event']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '2','title' => 'Corporate Party']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '2','title' => 'More']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '3','title' => 'Film shoots']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '3','title' => 'Photo shoots']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '3','title' => 'Audio recording']);
        \App\Models\SpaceSubActivity::create(['space_activity_id' => '3','title' => 'More']);
    }
}
