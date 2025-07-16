<?php
namespace App\Livewire\Admin;

use App\Models\Anime;
use Livewire\Component;

class EditAnime extends Component
{
    public $anime;
    public $title, $slug, $description, $status, $thumbnail, $released_year;

    public function mount($id)
    {
        $this->anime = Anime::findOrFail($id);

        $this->title = $this->anime->title;
        $this->slug = $this->anime->slug;
        $this->description = $this->anime->description;
        $this->status = $this->anime->status;
        $this->thumbnail = $this->anime->thumbnail;
        $this->released_year = $this->anime->released_year;
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

        session()->flash('success', 'Anime berhasil diupdate!');
        return redirect()->route('anime.detail', $this->slug);
    }

    public function render()
    {
        return view('livewire.admin.edit-anime');
    }
}
