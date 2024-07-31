<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'john_doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'jane_smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'alice_jones',
                'email' => 'alice@example.com',
                'password' => Hash::make('password123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'bob_brown',
                'email' => 'bob@example.com',
                'password' => Hash::make('password123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'charlie_black',
                'email' => 'charlie@example.com',
                'password' => Hash::make('password123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        //  $users = [
        //             ['id'=>1,'username' => 'surya', 'email' => 'surya@gmail.com', 'password' => '$2y$10$mmmR/Pbmu5oiuzKswZBKMu.rpM/x0jfleChGufAcBm2Slw.f/TrCO'], //surya67
        //             ['id'=>1,'username' => 'manthi', 'email' => 'manthi@gmail.com', 'password' => '$2y$10$XuVn1sfIwwArpHXNQ6LoWOxxtqpsDlOBfUkkPaqk.dEfYQsgy/DL2'], //manthi37
        //             ['id'=>1,'username' => 'Sriram', 'email' => 'sriram@gmail.com', 'password' => '$2y$10$PDIlFS3Tx6wBfHZZLCvzruVzC4CzLBvunjMqaVQ5g.ZAfZpxLv.s.'], //sri77
        //             ['id'=>1,'username' => 'water', 'email' => 'water@gmail.com', 'password' => '$2y$10$nODvgr2DzGeQz0EnwScyaeQamyXv6FjQ79Uv5CT.8yn1Bh/H7Y4vu'], //water123
        //             ['id'=>1,'username' => 'aruvi', 'email' => 'aruvi@gmail.com', 'password' => '$2y$10$pOCH3AgxfJYUz4q7w6adrePOT/3HlKYLN7A5DuJAkKgJppppsVEI.'], //aruvi123
        //         ];



    }
}
