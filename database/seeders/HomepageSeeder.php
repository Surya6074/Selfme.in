<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homepages')->insert([
            [
                'user_id' => 1,
                'hp_name' => 'Tech Haven',
                'hp_desc' => 'Welcome to Tech Haven, your ultimate destination for the latest tech news, reviews, and tutorials. Stay updated with the newest trends and innovations in technology.',
                'hp_img' => 'tech_haven.jpg',
                'hp_roles' => 'admin,editor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'hp_name' => 'Creative Corner',
                'hp_desc' => 'Creative Corner is a platform dedicated to showcasing artistic talents, design trends, and creative projects. Explore and get inspired by the vibrant world of creativity.',
                'hp_img' => 'creative_corner.jpg',
                'hp_roles' => 'editor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'hp_name' => 'Fitness Fusion',
                'hp_desc' => 'Join Fitness Fusion to discover effective workout routines, healthy eating tips, and wellness advice. Transform your lifestyle with our comprehensive fitness resources.',
                'hp_img' => 'fitness_fusion.jpg',
                'hp_roles' => 'viewer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'hp_name' => 'Gourmet Galore',
                'hp_desc' => 'Gourmet Galore brings you the best in culinary experiences. From delicious recipes to restaurant reviews, dive into the world of gourmet food and dining.',
                'hp_img' => 'gourmet_galore.jpg',
                'hp_roles' => 'admin,editor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'hp_name' => 'Travel Trek',
                'hp_desc' => 'Travel Trek is your guide to exploring the world. Find travel tips, destination guides, and adventure stories to inspire your next journey.',
                'hp_img' => 'travel_trek.jpg',
                'hp_roles' => 'editor',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
