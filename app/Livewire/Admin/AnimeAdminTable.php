<?php

namespace App\Livewire\Admin;

use App\Models\Anime;
use Livewire\Component;

class AnimeAdminTable extends Component
{
    public $animes;

    public function mount()
    {
        $this->animes = Anime::latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.anime-admin-table');
    }
}
