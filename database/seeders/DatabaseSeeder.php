<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
        $this->call([
            UserSeeder::class,
        ]);
        Article::factory()->count(100)->create();
        Rate::factory()->count(1000)->create();

    }
}
