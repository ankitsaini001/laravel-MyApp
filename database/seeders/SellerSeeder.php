<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Now, for this create a dummmy data for sellers table
        DB::table('sellers')->insert([
            'id' => 100,
            'name' => 'John Doe'
        ]);
    }
}
