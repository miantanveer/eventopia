<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'first_name'=>'Seller',
                'last_name'=>'Harrison',
                'email'=>'seller@example.com',
                'phone_number'=>'+9231014782100',
                'date_of_birth'=>'2000-01-01',
                'password'=>Hash::make('123456'),
                'status'=>'1',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'first_name'=>'John',
                'last_name'=>'Wick',
                'email'=>'customer@example.com',
                'phone_number'=>'+92310182100',
                'date_of_birth'=>'2000-01-01',
                'password'=>Hash::make('123456'),
                'status'=>'1',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
