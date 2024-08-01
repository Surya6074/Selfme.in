<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            // Skills for User 1
            ['user_id' => 1, 'skill_name' => 'JavaScript', 'skill_percentage' => '90', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'skill_name' => 'PHP', 'skill_percentage' => '85', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'skill_name' => 'Python', 'skill_percentage' => '80', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'skill_name' => 'React', 'skill_percentage' => '75', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'skill_name' => 'Laravel', 'skill_percentage' => '70', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'skill_name' => 'HTML/CSS', 'skill_percentage' => '95', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'skill_name' => 'SQL', 'skill_percentage' => '85', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Skills for User 2
            ['user_id' => 2, 'skill_name' => 'Graphic Design', 'skill_percentage' => '90', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'skill_name' => 'UI/UX Design', 'skill_percentage' => '85', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'skill_name' => 'Adobe Photoshop', 'skill_percentage' => '80', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'skill_name' => 'Illustrator', 'skill_percentage' => '75', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'skill_name' => 'Sketch', 'skill_percentage' => '70', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'skill_name' => 'InVision', 'skill_percentage' => '65', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 2, 'skill_name' => 'Figma', 'skill_percentage' => '75', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Skills for User 3
            ['user_id' => 3, 'skill_name' => 'Product Management', 'skill_percentage' => '90', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'skill_name' => 'Market Research', 'skill_percentage' => '85', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'skill_name' => 'Agile Methodology', 'skill_percentage' => '80', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'skill_name' => 'Scrum', 'skill_percentage' => '75', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'skill_name' => 'Roadmapping', 'skill_percentage' => '70', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'skill_name' => 'Data Analysis', 'skill_percentage' => '65', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 3, 'skill_name' => 'Stakeholder Management', 'skill_percentage' => '80', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Skills for User 4
            ['user_id' => 4, 'skill_name' => 'SEO', 'skill_percentage' => '90', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'skill_name' => 'Content Marketing', 'skill_percentage' => '85', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'skill_name' => 'Google Analytics', 'skill_percentage' => '80', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'skill_name' => 'Social Media Marketing', 'skill_percentage' => '75', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'skill_name' => 'PPC Advertising', 'skill_percentage' => '70', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'skill_name' => 'Email Marketing', 'skill_percentage' => '65', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 4, 'skill_name' => 'Marketing Automation', 'skill_percentage' => '70', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],

            // Skills for User 5
            ['user_id' => 5, 'skill_name' => 'Data Analysis', 'skill_percentage' => '90', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'skill_name' => 'Machine Learning', 'skill_percentage' => '85', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'skill_name' => 'Statistics', 'skill_percentage' => '80', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'skill_name' => 'Python', 'skill_percentage' => '75', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'skill_name' => 'SQL', 'skill_percentage' => '70', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'skill_name' => 'Data Visualization', 'skill_percentage' => '65', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 5, 'skill_name' => 'Big Data', 'skill_percentage' => '60', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
