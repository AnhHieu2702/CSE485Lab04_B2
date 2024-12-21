<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Order;
use App\Models\Customer;
class OrderSeeder extends Seeder
{
    
    public function run(): void
    {
        $customerIds = Customer::pluck('id')->toArray();
        
        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++) {
            Order::create([
                'customer_id' => $faker->randomElement($customerIds),
                'order_date' => $faker->dateTimeThisYear(),
                'status' => $faker->randomElement([0, 1]),
            ]);
        }
    }
}
