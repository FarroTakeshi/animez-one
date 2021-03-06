<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'animes';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'synopsis',
        'img',
        'img_path',
        'season_id'
    ];

    public function season(){
        return $this->belongsTo(Season::class);
    }

    public function anime_genres(){
        return $this->belongsToMany(AnimeGenre::class, 'animes_x_genres', 'anime_id', 'genre_id');
    }

    public function getAnimeGenreIds(){
      return $this->anime_genres->pluck('id')->toArray();
    }
}
