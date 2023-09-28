<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntActivity;

class EntActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntActivity::insert([
            ['title'=>'Meetings','image'=>'teamicon.png','description'=>'Workshops, Presentations, Retreats, More','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Ententainers','image'=>'camera.png','description'=>'Birthdays, Networking Event, Corporate Party, More','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Events','image'=>'events.png','description'=>'Film shoots, Photo shoots, Audio recording, More','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
