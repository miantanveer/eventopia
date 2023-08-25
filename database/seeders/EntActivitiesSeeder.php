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
            ['title'=>'Meetings','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Ententainers','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Events','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
