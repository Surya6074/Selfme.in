<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ContactPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contactpages')->insert([
            [
                'user_id' => 1,
                'cp_name' => 'John Doe',
                'cp_phoneno' => '+1-800-555-1234',
                'cp_email' => 'john.doe@example.com',
                'cp_address' => '123 Tech Lane, Silicon Valley, CA 94043, USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'cp_name' => 'Jane Smith',
                'cp_phoneno' => '+1-800-555-5678',
                'cp_email' => 'jane.smith@example.com',
                'cp_address' => '456 Design Avenue, New York, NY 10001, USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'cp_name' => 'Alice Johnson',
                'cp_phoneno' => '+1-800-555-9101',
                'cp_email' => 'alice.johnson@example.com',
                'cp_address' => '789 Product Road, Austin, TX 73301, USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 4,
                'cp_name' => 'Bob Brown',
                'cp_phoneno' => '+1-800-555-1122',
                'cp_email' => 'bob.brown@example.com',
                'cp_address' => '101 Marketing Street, Los Angeles, CA 90001, USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 5,
                'cp_name' => 'Charlie Black',
                'cp_phoneno' => '+1-800-555-3344',
                'cp_email' => 'charlie.black@example.com',
                'cp_address' => '202 Data Drive, San Francisco, CA 94105, USA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
