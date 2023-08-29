<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use App\Http\Resources\GenreResource;
use App\Models\Genre;
use App\Services\GenreService;
use Illuminate\Http\Response;

class GenreController extends Controller
{
    protected $genre_service;

    public function __construct(GenreService $genre_service)
    {
        $this->genre_service = $genre_service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GenreResource::collection(Genre::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenreRequest $request)
    {
        $genre = $this->genre_service->store($request->validated());

        return new GenreResource($genre);
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return new GenreResource($genre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenreRequest $request, Genre $genre)
    {
        $updated_genre = $this->genre_service->update($request->validated(), $genre);

        return new GenreResource($updated_genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $this->genre_service->delete($genre);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
