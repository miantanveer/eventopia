<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntSubActivity;

class EntSubActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntSubActivity::insert([
            ['title'=>'Workshops','ent_activity_id'=>'1','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Presentations','ent_activity_id'=>'1','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Retreats','ent_activity_id'=>'1','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'More','ent_activity_id'=>'1','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Birthdays','ent_activity_id'=>'2','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Networking Event','ent_activity_id'=>'2','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Corporate Party','ent_activity_id'=>'2','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'More','ent_activity_id'=>'2','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Film shoots','ent_activity_id'=>'3','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Photo shoots','ent_activity_id'=>'3','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'Audio recording','ent_activity_id'=>'3','created_at'=>now(),'updated_at'=>now()],
            ['title'=>'More','ent_activity_id'=>'3','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
