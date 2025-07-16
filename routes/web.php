<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\AnimeList;
use App\Livewire\AnimeDetail;
use App\Livewire\EpisodeDetail;
use App\Livewire\Admin\EpisodeForm;
use App\Livewire\Admin\EpisodeTable;
use App\Livewire\Admin\EditEpisode;




Route::get('/', AnimeList::class);

Route::get('/anime/{slug}', AnimeDetail::class)->name('anime.detail');

Route::get('/anime/{slug}/episode/{episode}', EpisodeDetail::class)->name('episode.detail');

Route::get('/admin/episode/create', EpisodeForm::class)->name('admin.episode.create');

Route::get('/admin/episode', EpisodeTable::class)->name('admin.episode.index');

Route::get('/admin/episode/edit/{id}', EditEpisode::class)->name('admin.episode.edit');
