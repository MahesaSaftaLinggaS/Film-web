<?php

namespace App\Livewire\Admin;

use App\Models\Genre;
use Livewire\Component;
use Illuminate\Support\Str;


class GenreAdminTable extends Component
{
    public $name, $genreId, $isEdit = false;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        if ($this->isEdit && $this->genreId) {
            $genre = Genre::findOrFail($this->genreId);
        } else {
            $genre = new Genre();
        }

        $genre->name = $this->name;
        $genre->slug = Str::slug($this->name); // <-- auto generate slug

        $genre->save();

        $this->reset(['name', 'genreId', 'isEdit']);
        session()->flash('success', 'Genre berhasil disimpan.');
    }


    public function edit($id)
    {
        $genre = Genre::find($id);
        $this->genreId = $genre->id;
        $this->name = $genre->name;
        $this->isEdit = true;
    }

    public function delete($id)
    {
        Genre::find($id)->delete();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->genreId = null;
        $this->isEdit = false;
    }

    public function render()
    {
        return view('livewire.admin.genre-admin-table', [
            'genres' => Genre::latest()->get(),
        ]);
    }
}
