<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Anime extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'thumbnail',
        'released_year',
    ];

    public function episodes()
    {
        return $this->hasMany(\App\Models\Episode::class);
    }

    public function genres()
{
    return $this->belongsToMany(Genre::class);
}

}
