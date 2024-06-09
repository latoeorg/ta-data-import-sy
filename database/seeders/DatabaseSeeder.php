<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed an admin user
        DB::table('users')->insert([
            'name' => 'staff',
            'username' => 'staff',
            'email' => 'staff@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // Hashed password
            'role' => 'STAFF',
            'phone' => '1234567890',
            'birthdate' => '1990-01-01',
        ]);

        // Seed a regular user
        DB::table('users')->insert([
            'name' => 'manager',
            'username' => 'manager',
            'email' => 'manager@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // Hashed password
            'role' => 'MANAGER',
            'phone' => '9876543210',
            'birthdate' => '1995-05-05',
        ]);

        DB::table('o_e_e_standards')->insert([
            'name' => 'Availability',
            'standard' => 90,
        ]);
        DB::table('o_e_e_standards')->insert([
            'name' => 'Performance',
            'standard' => 95,
        ]);
        DB::table('o_e_e_standards')->insert([
            'name' => 'Quality',
            'standard' => 98,
        ]);
        DB::table('o_e_e_standards')->insert([
            'name' => 'OEE',
            'standard' => 85,
        ]);
    }
}
