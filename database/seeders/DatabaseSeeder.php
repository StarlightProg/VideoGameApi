<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Genre::insert([
            ['genre_name' => 'Action', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['genre_name' => 'Adventure', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['genre_name' => 'RPG', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['genre_name' => 'Simulation', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['genre_name' => 'Strategy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['genre_name' => 'Sports', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);

        Game::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
