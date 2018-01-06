<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimeGenre extends Model
{
    protected $table = 'anime_genres';

    public $timestamps = false;

    protected $fillable = [ 'name' ];

    public function animes(){
        return $this->belongsToMany(Anime::class, 'animes_x_genres', 'genre_id', 'anime_id');
    }
}
