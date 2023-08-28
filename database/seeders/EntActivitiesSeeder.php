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
            ['title'=>'Meetings','image'=>'teamicon.png','description'=>'Updates Required from ','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Ententainers','image'=>'camera.png','description'=>'Video shoots, photo shoots, audio recording, etc.','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Events','image'=>'events.png','description'=>'Birthday parties, baby showers, holiday parties, etc.','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
