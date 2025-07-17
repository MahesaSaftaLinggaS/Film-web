<?php

namespace App\Livewire;

use App\Models\Anime;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Genre;

class AnimeList extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $animes = Anime::where('title', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(5);

        return view('livewire.anime-list', ['animes' => $animes])
            ->layout('components.layouts.app'); // Wajib ada ini
    }

    public $genres;

    public function mount()
    {
        $this->genres = Genre::orderBy('name')->get();
    }
}
