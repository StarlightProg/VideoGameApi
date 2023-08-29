<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $arrayLength = rand(1, 3);

        // $genres = DB::table('genres')->select('genre_name')->get()->pluck('genre_name')->toArray();

        // $random_genres = [];
        // for ($i = 0; $i < $arrayLength; $i++) {
        //     $available_genres  = array_diff($genres, $random_genres);
        //     if (empty($available_genres)) {
        //         break;
        //     }
        //     $random_genres[] = $available_genres[array_rand($available_genres)];
        // }
        
        return [
            'title' => $this->faker->unique()->word,
            'company' => $this->faker->company,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Game $game) {
            $genres = Genre::inRandomOrder()->take(random_int(1, 3))->get();

            $game->genres()->sync($genres);
        });
    }
}
