<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Episode;

class EditEpisode extends Component
{
    public $episodeId;
    public $anime_id;
    public $episode_number;
    public $title;
    public $stream_url;
    public $download_url;

    public function mount($id)
    {
        $episode = Episode::findOrFail($id);

        $this->episodeId = $id;
        $this->anime_id = $episode->anime_id;
        $this->episode_number = $episode->episode_number;
        $this->title = $episode->title;
        $this->stream_url = $episode->stream_url;
        $this->download_url = $episode->download_url;
    }

    public function update()
    {
        $this->validate([
            'anime_id' => 'required|exists:animes,id',
            'episode_number' => 'required|integer|min:1',
            'title' => 'required|string|max:255',
            'stream_url' => 'required|url',
            'download_url' => 'required|url',
        ]);

        $episode = Episode::findOrFail($this->episodeId);
        $episode->update([
            'anime_id' => $this->anime_id,
            'episode_number' => $this->episode_number,
            'title' => $this->title,
            'stream_url' => $this->stream_url,
            'download_url' => $this->download_url,
        ]);

        session()->flash('success', 'Episode berhasil diperbarui.');

        return redirect()->route('admin.episode.index');
    }

    public function render()
    {
        return view('livewire.admin.edit-episode');
    }
}
