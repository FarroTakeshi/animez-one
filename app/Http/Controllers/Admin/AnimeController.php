<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anime;
use App\Models\AnimeGenre;
use App\Models\Season;

use App\Services\ImageUpload;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::all();

        return view('animes.index', compact('animes'));
    }

    public function create()
    {
        $anime_genres = AnimeGenre::all();
        $seasons      = Season::all();

        return view('animes.create', compact('anime_genres', 'seasons'));
    }
}
