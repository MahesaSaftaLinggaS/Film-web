<?php

namespace App\Livewire;

use App\Models\Anime;
use Livewire\Component;

class AnimeDetail extends Component
{
    public $slug;
    public $anime;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->anime = Anime::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $episodes = $this->anime->episodes()->orderBy('episode_number')->get();

        return view('livewire.anime-detail', compact('episodes'));
    }
}
