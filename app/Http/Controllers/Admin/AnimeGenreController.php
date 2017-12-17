<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\AnimeGenre;

class AnimeGenreController extends Controller
{
    public function index() {
        $anime_genres = AnimeGenre::all();

        return view('anime_genres.index', compact('anime_genres'));
    }
}
