<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'year',
    ];

    public function animes(){
        return $this->hasMany(Anime::class);
    }
}
