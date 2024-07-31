<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OwnPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ownpages')->insert([
            // Ownpages for User 1
            ['user_id' => 1, 'w_title1' => 'Welcome to My Portfolio', 'w_title2' => 'Explore My Work', 'w_desc' => 'This is a showcase of my personal projects and professional achievements. Dive into my work and discover how I can help you achieve your goals.', 'op_name' => 'John Doe Portfolio', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'w_title1' => 'My Latest Projects', 'w_title2' => 'Innovative Solutions', 'w_desc' => 'Check out my most recent projects that demonstrate my skills in software development, problem-solving, and innovation.', 'op_name' => 'John Doe Projects', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Ownpages for User 2
            ['user_id' => 2, 'w_title1' => 'Creative Design Showcase', 'w_title2' => 'My Design Journey', 'w_desc' => 'Here, you can find a collection of my design projects, from user interfaces to graphic designs. Each project represents my passion for creativity and innovation.', 'op_name' => 'Jane Smith Designs', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'w_title1' => 'Design Process', 'w_title2' => 'From Concept to Completion', 'w_desc' => 'Explore the process behind my designs, from initial sketches to final products. Learn about my approach to creating compelling and effective designs.', 'op_name' => 'Jane Smith Design Process', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Ownpages for User 3
            ['user_id' => 3, 'w_title1' => 'Product Innovations', 'w_title2' => 'Leading the Future', 'w_desc' => 'Explore the products I have managed and developed. Learn about the challenges, solutions, and impacts of each project in my journey as a product manager.', 'op_name' => 'Alice Johnson Products', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'w_title1' => 'Case Studies', 'w_title2' => 'Product Success Stories', 'w_desc' => 'Read detailed case studies on the products I have worked on, including the strategies implemented and the results achieved.', 'op_name' => 'Alice Johnson Case Studies', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Ownpages for User 4
            ['user_id' => 4, 'w_title1' => 'Marketing Strategies', 'w_title2' => 'Transforming Brands', 'w_desc' => 'Discover the marketing strategies and campaigns I have crafted. Each campaign is designed to elevate brands and connect with audiences in meaningful ways.', 'op_name' => 'Bob Brown Marketing', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'w_title1' => 'Campaign Highlights', 'w_title2' => 'Successful Campaigns', 'w_desc' => 'Highlighting some of the most successful marketing campaigns I have led. See the impact and results of these campaigns on various brands.', 'op_name' => 'Bob Brown Campaigns', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Ownpages for User 5
            ['user_id' => 5, 'w_title1' => 'Data Insights', 'w_title2' => 'Harnessing Data Power', 'w_desc' => 'Delve into my data science projects and analyses. See how I use data to drive insights, make decisions, and uncover opportunities for growth.', 'op_name' => 'Charlie Black Data', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'w_title1' => 'Analytics Projects', 'w_title2' => 'Data-Driven Success', 'w_desc' => 'Explore various analytics projects that demonstrate my ability to turn data into actionable insights and drive success.', 'op_name' => 'Charlie Black Analytics', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
