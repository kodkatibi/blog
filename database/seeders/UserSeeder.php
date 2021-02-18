<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'role' => 'admin'
            ]);

        User::firstOrCreate(['email' => 'writer1@mobillium.com'],
            [
                'name' => 'Author',
                'email' => 'writer1@mobillium.com',
                'password' => Hash::make('mobillium'),
                'role' => 'writer'
            ]);
    }
}
