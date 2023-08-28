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
            ['name'=>'18+','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'21+','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
}
