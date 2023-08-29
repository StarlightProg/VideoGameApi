<?php

namespace App\Services;

use App\Models\Game;
use App\Models\Genre;

class GameService
{
    public function store($data)
    {
        $game = Game::create([
            "title" => $data["title"],
            "company" => $data["company"],
        ]);

        $game->genres()->attach($data['genres']);

        return $game;
    }

    public function update($data, $game)
    {
        $game->fill($data)->save();
        return $game;
    }

    public function delete($game)
    {
        $game->delete();
    }

    public function findByGenre($genre_name)
    {
        $genre = Genre::where('genre_name', $genre_name)->firstOrFail();
        return $genre->games()->get();
    }
}