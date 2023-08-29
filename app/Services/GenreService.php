<?php

namespace App\Services;

use App\Models\Genre;

class GenreService
{
    public function store($data)
    {
        $genre = Genre::create([
            "genre_name" => $data["genre_name"],
        ]);

        return $genre;
    }

    public function update($data, $genre)
    {
        $genre->update($data);
        
        return $genre;
    }

    public function delete($genre)
    {
        $genre->delete();
    }
}