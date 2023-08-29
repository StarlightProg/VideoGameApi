<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameControllerOld extends Controller
{
    public function index()
    {
        return Game::all();
    }

    public function store(Request $request)
    {
        $game = Game::create($request->all());
        return $game;
    }

    public function show(Game $game)
    {
        return $game;
    }

    public function update(Request $request, Game $game)
    {
        $game->fill($request->all())->save();
        return $game;
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return response()->noContent();
    }

    // public function indexByGenre(Genre $genre)
    // {
    //     return $genre->games;
    // }
}
