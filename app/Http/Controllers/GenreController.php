<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function show($slug)
    {
        $genre = Genre::where('slug', $slug)->firstOrFail();
        $animes = $genre->animes()->latest()->paginate(8);

        return view('genre.show', compact('genre', 'animes'));
    }
}
