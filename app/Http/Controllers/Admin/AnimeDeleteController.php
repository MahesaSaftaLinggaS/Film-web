<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anime;

class AnimeDeleteController extends Controller
{
    public function destroy($id)
    {
        $anime = Anime::findOrFail($id);
        $anime->delete();

        return redirect('/')->with('success', 'Anime berhasil dihapus');
    }
}
