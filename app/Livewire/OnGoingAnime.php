<?php

namespace App\Livewire;

use App\Models\Anime;
use Livewire\Component;
use Livewire\WithPagination;

class OnGoingAnime extends Component
{
    use WithPagination;

    public function render()
    {
        $animes = Anime::where('status', 'OnGoing')
                       ->orderByDesc('created_at')
                       ->paginate(12);

        return view('livewire.on-going-anime', [
            'animes' => $animes,
        ]);
    }
}
