<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('links')->insert([
            // Links for User 1
            ['user_id' => 1, 'link_name' => 'GitHub', 'link' => 'https://github.com/johndoe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'link_name' => 'Portfolio', 'link' => 'https://johndoe.dev', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'link_name' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/johndoe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'link_name' => 'Twitter', 'link' => 'https://twitter.com/johndoe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Links for User 2
            ['user_id' => 2, 'link_name' => 'Behance', 'link' => 'https://www.behance.net/janesmith', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'link_name' => 'Dribbble', 'link' => 'https://dribbble.com/janesmith', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'link_name' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/janesmith', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'link_name' => 'Instagram', 'link' => 'https://www.instagram.com/janesmith', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Links for User 3
            ['user_id' => 3, 'link_name' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/alicejohnson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'link_name' => 'Medium', 'link' => 'https://medium.com/@alicejohnson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'link_name' => 'GitHub', 'link' => 'https://github.com/alicejohnson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'link_name' => 'Portfolio', 'link' => 'https://alicejohnson.dev', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Links for User 4
            ['user_id' => 4, 'link_name' => 'Twitter', 'link' => 'https://twitter.com/bobbrown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'link_name' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/bobbrown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'link_name' => 'Facebook', 'link' => 'https://www.facebook.com/bobbrown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'link_name' => 'YouTube', 'link' => 'https://www.youtube.com/user/bobbrown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Links for User 5
            ['user_id' => 5, 'link_name' => 'GitHub', 'link' => 'https://github.com/charlieblack', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'link_name' => 'LinkedIn', 'link' => 'https://www.linkedin.com/in/charlieblack', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'link_name' => 'Portfolio', 'link' => 'https://charlieblack.dev', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'link_name' => 'Twitter', 'link' => 'https://twitter.com/charlieblack', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
