<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder {
    public function run() {
        DB::table('deliveries')->insert([
            ['order_id' => 1, 'courier_id' => 1, 'status' => 'assigned'],
        ]);
    }
}
