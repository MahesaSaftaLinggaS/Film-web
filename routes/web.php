<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AnimeList;
use App\Livewire\AnimeDetail;
use App\Livewire\EpisodeDetail;
use App\Livewire\Admin\EpisodeForm;
use App\Livewire\Admin\EpisodeTable;
use App\Livewire\Admin\EditEpisode;
use App\Livewire\Admin\AnimeCreate;
use App\Livewire\Admin\EditAnime;
use App\Http\Controllers\Admin\AnimeDeleteController;
use App\Livewire\Admin\AnimeAdminTable;
use App\Livewire\Admin\GenreAdminTable;

use App\Http\Controllers\GenreController;


Route::get('/', AnimeList::class);

Route::get('/anime/{slug}', AnimeDetail::class)->name('anime.detail');

Route::get('/anime/{slug}/episode/{episode}', EpisodeDetail::class)->name('episode.detail');

Route::get('/admin/episode/create', EpisodeForm::class)->name('admin.episode.create');

Route::get('/admin/episode', EpisodeTable::class)->name('admin.episode.index');

Route::get('/admin/episode/edit/{id}', EditEpisode::class)->name('admin.episode.edit');

Route::get('/admin/anime/create', AnimeCreate::class)->name('admin.anime.create');

Route::get('/admin/anime/edit/{id}', EditAnime::class)->name('admin.anime.edit');

Route::delete('/admin/anime/delete/{id}', [AnimeDeleteController::class, 'destroy'])->name('admin.anime.delete');

Route::get('/admin/anime', AnimeAdminTable::class)->name('admin.anime.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/genres', GenreAdminTable::class)->name('genres.index');
});

Route::get('/genre/{slug}', [GenreController::class, 'show'])->name('genre.show');

