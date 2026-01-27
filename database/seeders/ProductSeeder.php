<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create dummy data here
        for($i=1; $i<=3;$i++){
                DB::table('products')->insert([
                'name' => 'Sample Product',
                'price' => 19.99,
                'seller_id' => 100
            ]);
        }
        
    }
}
