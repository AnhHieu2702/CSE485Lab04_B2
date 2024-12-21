<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order_detail;
use App\Models\Order;
use App\Models\Product;
use Faker\Factory as Faker;
class OrderDetailSeeder extends Seeder
{
    
    public function run(): void
    {
        $orderIds = Order::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();
        //dd($orderIds, $productIds);
        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++) {
            Order_detail::create([
                'order_id' => $faker->randomElement($orderIds),
                'product_id' => $faker->randomElement($productIds),
                'quantity' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}
