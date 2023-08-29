<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $genre_arr = ['Action', 'Adventure', 'RPG', 'Simulation', 'Strategy', 'Sports'];

        Genre::insert([
            ['genre_name' => 'Action'],
            ['genre_name' => 'Adventure'],
            ['genre_name' => 'RPG'],
            ['genre_name' => 'Simulation'],
            ['genre_name' => 'Strategy'],
            ['genre_name' => 'Sports'],
        ]);

        // DB::table('body_skills')->insert([
        //     [ 'skill' => 'wiggle' ],
        //     [ 'skill' => 'smooth' ],
        //     [ 'skill' => 'hip' ],
        //     [ 'skill' => 'twist' ],
        //     [ 'skill' => 'rhytm' ]
        // ]);

        Game::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
