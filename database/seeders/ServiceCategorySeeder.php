<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCategory::insert([
            ['name'=>'Wedding','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Auction','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Swimming','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Banquet Hall','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
