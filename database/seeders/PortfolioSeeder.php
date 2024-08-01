<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'user_id' => 1,  // Assuming user with ID 1 exists
                'template_id' => 1,  // Assuming template with ID 1 exists
                'visibility' => 'public',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,  // Assuming user with ID 2 exists
                'template_id' => 1,  // Assuming template with ID 2 exists
                'visibility' => 'private',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,  // Assuming user with ID 3 exists
                'template_id' => 1,  // Assuming template with ID 3 exists
                'visibility' => 'public',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,  // Assuming user with ID 4 exists
                'template_id' => 1,  // Assuming template with ID 4 exists
                'visibility' => 'private',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,  // Assuming user with ID 5 exists
                'template_id' => 1,  // Assuming template with ID 5 exists
                'visibility' => 'public',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
