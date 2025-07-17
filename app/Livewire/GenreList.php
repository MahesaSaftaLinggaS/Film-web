<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Genre;

class GenreList extends Component
{
    public function render()
    {
        $genres = Genre::orderBy('name')->get();

        return view('livewire.genre-list', compact('genres'));
    }
}
