<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'admin@mobillium.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@mobillium.com',
                'password' => Hash::make('mobillium'),
                'email_verified_at' => now(),
                'role' => 'admin',
                'remember_token' => Str::random(10),
            ]);

        User::firstOrCreate(['email' => 'writer1@mobillium.com'],
            [
                'name' => 'Author',
                'email' => 'writer1@mobillium.com',
                'password' => Hash::make('mobillium'),
                'email_verified_at' => now(),
                'role' => 'writer',
                'remember_token' => Str::random(10),
            ]);
    }
}
