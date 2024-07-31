<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('new_updates')->insert([
            [
                'name' => 'SelfMe',
                'content' => 'We are excited to introduce new profile enhancement features on SelfMe! Users can now customize their profiles with new themes and backgrounds, upload cover photos, and add more personal details to make their profiles truly unique. Explore these new options in your profile settings and give your SelfMe page a fresh look!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SelfMe',
                'content' => 'Our new Advanced Analytics Dashboard is now live on SelfMe! This feature provides in-depth insights into your activity and engagement, with customizable charts and metrics to track your progress and performance. Gain better understanding and control over your SelfMe experience with these powerful new tools.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SelfMe',
                'content' => 'We’ve rolled out a brand-new Integrated Messaging System on SelfMe! This system allows users to send and receive messages directly within the platform, with enhanced features such as message notifications, chat history, and more. Stay connected with your network effortlessly with our new messaging capabilities!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SelfMe',
                'content' => 'The SelfMe Mobile App is now available for download! Enjoy all the features of SelfMe on the go with our new mobile app, optimized for both iOS and Android devices. Stay connected, manage your profile, and access updates anytime, anywhere. Download the app from the App Store or Google Play today!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SelfMe',
                'content' => 'We’ve upgraded our privacy controls to give you more power over your data on SelfMe. With the new settings, you can now manage who sees your activity, posts, and personal information with greater precision. Check out the new privacy options in your account settings to ensure your SelfMe experience aligns with your privacy preferences.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SelfMe',
                'content' => 'SelfMe now offers a suite of new content creation tools to help you express yourself creatively. From advanced text editors to multimedia integration and customizable templates, these new features make it easier than ever to create engaging and dynamic content. Start creating with our enhanced tools and make your SelfMe presence stand out!',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
