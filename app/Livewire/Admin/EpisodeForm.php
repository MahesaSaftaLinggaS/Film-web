<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Episode;
use App\Models\Anime;

class EpisodeForm extends Component
{
    public $anime_id;
    public $episode_number;
    public $title;
    public $stream_url;
    public $download_url;

    public function save()
    {
        $this->validate([
            'anime_id' => 'required|exists:animes,id',
            'episode_number' => [
                'required',
                'integer',
                'min:1',
                Rule::unique('episodes')->where(function ($query) {
                    return $query->where('anime_id', $this->anime_id);
                }),
            ],
            'title' => 'required|string|max:255',
            'stream_url' => 'required|url',
            'download_url' => 'required|url',
        ]);


        Episode::create([
            'anime_id' => $this->anime_id,
            'episode_number' => $this->episode_number,
            'title' => $this->title,
            'stream_url' => $this->stream_url,
            'download_url' => $this->download_url,
        ]);

        session()->flash('success', 'Episode berhasil ditambahkan.');
        $this->reset(['episode_number', 'title', 'stream_url', 'download_url']);
    }

    public function render()
    {
        return view('livewire.admin.episode-form', [
            'animes' => \App\Models\Anime::all(),
        ]);
    }
}
