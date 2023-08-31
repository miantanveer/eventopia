<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stripe = new \Stripe\StripeClient(config('stripe.TEST_SECRET_KEY'));

        // Customer 1
        $customer = $stripe->customers->create([
            'name' => 'John Wick',
            'email' => 'customer@example.com',
        ]);
        User::insert([
            [
                'first_name'=>'Seller',
                'last_name'=>'Harrison',
                'customer_id' => $customer->id ?? null,
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
                'customer_id' => $customer->id ?? null,
                'email'=>'customer@example.com',
                'phone_number'=>'+92310182100',
                'date_of_birth'=>'2000-02-01',
                'password'=>Hash::make('123456'),
                'status'=>'1',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
