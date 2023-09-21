<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Age;
class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Age::insert([
            ['name'=>'All','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'0 - 10+','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'10+','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'20+','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'30+','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'40+','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'50+','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
