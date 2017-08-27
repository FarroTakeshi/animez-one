<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'year',
    ];

    public function animes(){
        return $this->belongsTo(Season::class);
    }
}
