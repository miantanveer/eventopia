<?php

namespace Database\Seeders;

use App\Models\SpaceActivity;
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
        SpaceActivity::insert([
            ['title'=>'Meetings','image'=>'teamicon.png','description'=>'Workshops, Presentations, Retreats etc ','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Events','image'=>'events.png','description'=>'Birthday parties, baby showers, holiday parties, etc.','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Media Productions','image'=>'camera.png','description'=>'Video shoots, photo shoots, audio recording, etc.','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
