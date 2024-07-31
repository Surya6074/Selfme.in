<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aboutpages')->insert([
            [
                'user_id' => 1,
                'ap_name' => 'John Doe',
                'ap_role' => 'Software Engineer',
                'ap_resume' => 'john_doe_resume.pdf',
                'ap_desc' => 'John Doe is a seasoned software engineer with over 10 years of experience in developing scalable web and mobile applications. His expertise includes full-stack development, cloud services, and machine learning.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'ap_name' => 'Jane Smith',
                'ap_role' => 'UI/UX Designer',
                'ap_resume' => 'jane_smith_resume.pdf',
                'ap_desc' => 'Jane Smith is a talented UI/UX designer specializing in creating intuitive and visually appealing user interfaces. With a keen eye for detail and a passion for design, she brings innovative solutions to every project.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'ap_name' => 'Alice Johnson',
                'ap_role' => 'Product Manager',
                'ap_resume' => 'alice_johnson_resume.pdf',
                'ap_desc' => 'Alice Johnson is an experienced product manager with a strong background in leading cross-functional teams to deliver successful products. She excels in project management, market research, and strategic planning.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'ap_name' => 'Bob Brown',
                'ap_role' => 'Marketing Specialist',
                'ap_resume' => 'bob_brown_resume.pdf',
                'ap_desc' => 'Bob Brown is a dynamic marketing specialist with a knack for crafting compelling campaigns and driving brand growth. His expertise spans digital marketing, content creation, and social media strategy.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'ap_name' => 'Charlie Black',
                'ap_role' => 'Data Scientist',
                'ap_resume' => 'charlie_black_resume.pdf',
                'ap_desc' => 'Charlie Black is a skilled data scientist with extensive experience in data analysis, machine learning, and statistical modeling. He leverages data-driven insights to support business decision-making and strategic initiatives.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
