<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // siguraduhing ito ang tama mong User model path
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin account
        User::create([
            'name' => 'Admin Demo',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin2468'), // password: admin2468
            'role' => 'admin', 
        ]);

        // Regular user account
        User::create([
            'name' => 'User Demo',
            'email' => 'user@example.com',
            'password' => Hash::make('user2468'), // password: user2468
            'role' => 'user',
        ]);
    }
}
