<?php

namespace App\Livewire;

use App\Models\Anime;
use Livewire\Component;
use Livewire\WithPagination;

class CompletedAnime extends Component
{
    use WithPagination;

    public function render()
    {
        $animes = Anime::where('status', 'Completed')->latest()->paginate(12);

        return view('livewire.completed-anime', [
            'animes' => $animes,
        ]);
    }
}
