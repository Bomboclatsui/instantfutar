<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder {
    public function run() {
        DB::table('applications')->insert([
            ['user_id' => 3, 'status' => 'approved', 'experience' => '5 years of delivery experience'],
        ]);
    }
}
