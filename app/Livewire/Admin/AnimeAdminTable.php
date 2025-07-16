<?php

namespace App\Livewire\Admin;

use App\Models\Anime;
use Livewire\Component;
use Livewire\WithPagination;

class AnimeAdminTable extends Component
{
    use WithPagination;          // ← trait diaktifkan di sini

    public function render()
    {
        // ambil 8 anime per halaman
        $animes = Anime::latest()->paginate(5);

        // kirim ke blade
        return view('livewire.admin.anime-admin-table', [
            'animes' => $animes,
        ]);
    }
}
