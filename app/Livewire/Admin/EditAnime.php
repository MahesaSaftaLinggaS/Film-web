<?php

namespace App\Livewire\Admin;

use App\Models\Anime;
use App\Models\Genre;
use Livewire\Component;

class EditAnime extends Component
{
    public $anime;
    public $title, $slug, $description, $status, $thumbnail, $released_year;

    public $genres = [];         // Semua genre dari database
    public $selectedGenres = []; // ID genre yang dipilih

    public function mount($id)
    {
        $this->anime = Anime::with('genres')->findOrFail($id);

        $this->title = $this->anime->title;
        $this->slug = $this->anime->slug;
        $this->description = $this->anime->description;
        $this->status = $this->anime->status;
        $this->thumbnail = $this->anime->thumbnail;
        $this->released_year = $this->anime->released_year;

        $this->genres = Genre::all(); // Ambil semua genre
        $this->selectedGenres = $this->anime->genres->pluck('id')->toArray(); // Genre terpilih
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|unique:animes,slug,' . $this->anime->id,
            'description' => 'required',
            'status' => 'required',
            'thumbnail' => 'required|url',
            'released_year' => 'required|numeric',
        ]);

        $this->anime->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'status' => $this->status,
            'thumbnail' => $this->thumbnail,
            'released_year' => $this->released_year,
        ]);

        // Sinkronkan genre
        $this->anime->genres()->sync($this->selectedGenres);

        session()->flash('success', 'Anime berhasil diupdate!');
        return redirect()->route('anime.detail', $this->slug);
    }

    public function render()
    {
        return view('livewire.admin.edit-anime');
    }
}
