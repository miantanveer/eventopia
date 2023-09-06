<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::insert([
            ['name'=>'English','code'=>'en','image'=>'assets/images/flags/us_flag.jpg','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Arabic','code'=>'ar','image'=>'assets/images/flags/sa.svg','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Spanish','code'=>'es','image'=>'assets/images/flags/spain_flag.jpg','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'French','code'=>'fr','image'=>'assets/images/flags/french_flag.jpg','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'German','code'=>'de','image'=>'assets/images/flags/germany_flag.jpg','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Portuguese','code'=>'pt','image'=>'assets/images/flags/portugal.png','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Japanese','code'=>'ja','image'=>'assets/images/flags/japanese.png','created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Chinese','code'=>'zh-CN','image'=>'assets/images/flags/chinese.png','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
