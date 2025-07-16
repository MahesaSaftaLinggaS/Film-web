<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Anime;
use App\Models\Episode;

class EpisodeDetail extends Component
{
    public $anime;
    public $episode;

    public function mount($slug, $episode)
    {
        $this->anime = Anime::where('slug', $slug)->firstOrFail();
        $this->episode = $this->anime->episodes()->where('episode_number', $episode)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.episode-detail');
    }
}
