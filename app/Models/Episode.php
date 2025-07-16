<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['anime_id', 'episode_number', 'title', 'stream_url', 'download_url'];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }
}

