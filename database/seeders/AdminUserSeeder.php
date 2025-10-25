<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Triatek',
            'email' => 'admin@triatek.id', // Ganti dengan email Anda
            'password' => Hash::make('password'), // Ganti 'password' dengan password yang kuat
        ]);
    }
}
