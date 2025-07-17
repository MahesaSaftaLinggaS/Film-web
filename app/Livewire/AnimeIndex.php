<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Anime;

class AnimeIndex extends Component
{
    public function render()
    {
        $animes = Anime::latest()->paginate(12); // semua anime
        return view('livewire.anime-index', [
            'animes' => $animes,
        ]);
    }
}
