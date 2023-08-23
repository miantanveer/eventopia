<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceTitle;

class ServiceTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceTitle::insert([
            ['name'=>'Video Graphers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Beauty Services','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Soloists & Ensembles','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Dance Lessons','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Decor','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Invitations','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Reception Venues','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Wedding Photographers','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Wedding Planners','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Wedding Bands','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Wedding Rentals','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Transportation','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Travel Specialists','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Bar Services','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Florists','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
}
