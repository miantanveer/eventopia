<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntAmenity;

class EntAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntAmenity::insert([
            ['name'=>'WiFi','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Tables','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Chairs','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Whiteboard','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Chalkboard','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Projector','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Screen','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Flip Charts','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Monitor','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Conference Phone','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Parking Space(s)','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Public Transportation','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Restrooms','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Wheelchair Accessible','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Breakout Space','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Kitchen','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Coffee','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Apple TV','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Printer','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Rooftop','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Outdoor Area','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Tablecloths','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Freight Elevators','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'AV Technician','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Security','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Janitorial Services','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Speakers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Mics','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Stage','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Street level access','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Soundproof','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Natural Light','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Lighting Equipment','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Green Screen','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Video Equipment','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Sink','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Dressing Room','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'White Backdrop','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Sandbags','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Steamer','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Blackout blinds','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Skylights','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'View','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Dining Plates and Utensils','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
