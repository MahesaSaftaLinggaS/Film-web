<?php

namespace App\Livewire\Admin;

use App\Models\Anime;
use Livewire\Component;

class AnimeCreate extends Component
{
    public $title, $slug, $description, $status, $thumbnail, $released_year;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:animes,slug',
            'description' => 'required',
            'status' => 'required',
            'thumbnail' => 'required|url',
            'released_year' => 'required|numeric',
        ]);

        Anime::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'status' => $this->status,
            'thumbnail' => $this->thumbnail,
            'released_year' => $this->released_year,
        ]);

        session()->flash('success', 'Anime berhasil ditambahkan!');
        return redirect()->route('anime.detail', $this->slug);
    }

    public function render()
    {
        return view('livewire.admin.anime-create');
    }
}
