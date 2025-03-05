<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            ['name' => 'Admin', 'email' => 'admin@example.com', 'password' => Hash::make('password'), 'role' => 'admin'],
            ['name' => 'Customer', 'email' => 'customer@example.com', 'password' => Hash::make('password'), 'role' => 'customer'],
            ['name' => 'Courier', 'email' => 'courier@example.com', 'password' => Hash::make('password'), 'role' => 'courier'],
        ]);
    }
}
