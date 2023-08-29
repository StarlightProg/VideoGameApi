<?php

namespace App\Http\Controllers\Api;

use App\Models\Game;
use App\Services\GameService;
use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Http\Resources\GameResource;
use Illuminate\Http\Response;

class GameController extends Controller
{
    protected $game_service;

    public function __construct(GameService $game_service)
    {
        $this->game_service = $game_service;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GameResource::collection(Game::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameRequest $request)
    {
        $game = $this->game_service->store($request->validated());

        return new GameResource($game);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return new GameResource($game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GameRequest $request, Game $game)
    {
        $updated_game = $this->game_service->update($request->validated(), $game);

        return new GameResource($updated_game);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $this->game_service->delete($game);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function findByGenre($genre_name)
    {
        $genre_games = $this->game_service->findByGenre($genre_name);

        return GameResource::collection($genre_games);
    }
}
