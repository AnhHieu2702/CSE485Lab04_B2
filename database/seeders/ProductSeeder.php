<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++) {
            Product::create([
                'name' => $faker->name,
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(50, 100),
                'quantity' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
