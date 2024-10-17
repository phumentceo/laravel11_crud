<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" =>  "I phone 13 pro max",
                "price" =>  600,
                "qty"  => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" =>  "Samsung Galaxy",
                "price" =>  300,
                "qty"  => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" =>  "vivo v53",
                "price" =>  300,
                "qty"  => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        DB::table('products')->insert($products);
    }
}
