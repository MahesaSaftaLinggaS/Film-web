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

    // AnimeList.php (Livewire Component)
    public $search = '';

    public function render()
    {
        $animes = Anime::where('title', 'like', '%' . $this->search . '%')
            ->latest()
            ->get();

        return view('livewire.anime-list', compact('animes'));
    }
}
