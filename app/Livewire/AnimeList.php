<?php

namespace App\Livewire;

use App\Models\Anime;
use Livewire\Component;

class AnimeList extends Component
{
    public $animes;

    public function mount()
    {
        $this->animes = Anime::latest()->get();
    }

    public function render()
    {
        return view('livewire.anime-list');
    }
}

