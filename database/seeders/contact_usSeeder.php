<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class contact_usSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 10 dummy records
        for($i=1; $i<=10; $i++){
            DB::table('contact_us')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'phone' => Str::random(10),
                'subject' => Str::random(20),
                'message' => Str::random(50),
                'attachment' => 'none'
            ]);
        }
    }
}
