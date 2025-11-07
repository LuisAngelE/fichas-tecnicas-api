<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Luis',
            'middle_name' => null,
            'last_name' => 'Espinoza',
            'second_last_name' => null,
            'email' => 'admin@example.com',
            'phone' => '5551234567',
            'employee_number' => 'ADM001',
            'password' => Hash::make('password'),
            'user_type' => 1, // Admin
        ]);

        User::create([
            'first_name' => 'Juan',
            'middle_name' => null,
            'last_name' => 'Pérez',
            'second_last_name' => null,
            'email' => 'viewer@example.com',
            'phone' => '5559876543',
            'employee_number' => 'USR002',
            'password' => Hash::make('password'),
            'user_type' => 2, // Viewer
        ]);
    }
}
