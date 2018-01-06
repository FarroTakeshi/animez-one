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

    public function store(ImageUpload $image_uploader)
    {
        $this->validate(request(), [
            'name'        => 'required',
            'synopsis'    => 'required',
            'season'      => 'required',
            'anime_genre' => 'required',
            'image'       => 'required',
        ]);

        $file     = request()->file('image');

        $anime = Anime::create([
            'name'        => request('name'),
            'synopsis'    => request('synopsis'),
            'season_id'   => request('season'),
            'valuation'   => 0,
        ]);

        $filename = "img/animes/anime_{$anime->id}";
        $path = $image_uploader->save($file, $filename);

        $anime->img = $path;
        $anime->save();

        $anime_genres = request('anime_genre');
        $anime->anime_genres()->sync($anime_genres);

        return redirect()->route('anime.index')
                         ->with('message', 'anime registered successfully');
    }

    public function edit(Anime $anime) {
        $anime_genres       = AnimeGenre::all();
        $seasons            = Season::all();
        $anime_genres_anime = $anime->getAnimeGenreIds();

        return view('animes.edit', compact('anime', 'seasons', 'anime_genres', 'anime_genres_anime'));
    }

    public function update(Anime $anime) {
        $this->validate(request(), [
            'name'        => 'required',
            'synopsis'    => 'required',
            'season'      => 'required',
            'anime_genre' => 'required',
            'image'       => 'required',
        ]);

        $anime->name      = request('name');
        $anime->synopsis  = request('synopsis');
        $anime->season_id = request('season');

        $anime_genre->save();

        return redirect()->route('anime_genre.index')
                         ->with('message', 'Anime genre updated successfully');
    }

}
