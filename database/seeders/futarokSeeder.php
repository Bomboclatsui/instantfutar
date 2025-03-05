<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourierSeeder extends Seeder {
    public function run() {
        DB::table('couriers')->insert([
            ['user_id' => 3, 'vehicle_type' => 'Bike', 'license_plate' => 'ABC-123'],
        ]);
    }
}
