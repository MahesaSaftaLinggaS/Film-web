<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Episode;
use App\Models\Anime;

class EpisodeTable extends Component
{
    public $anime_id;

    public function delete($id)
    {
        Episode::findOrFail($id)->delete();
        session()->flash('success', 'Episode berhasil dihapus.');
    }

    public function render()
    {
        $episodes = Episode::with('anime')->latest()->get();

        return view('livewire.admin.episode-table', [
            'episodes' => $episodes
        ]);
    }
}
