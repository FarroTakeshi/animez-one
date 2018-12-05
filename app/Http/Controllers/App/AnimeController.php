<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anime;

use Illuminate\Support\Facades\Auth;

class AnimeController extends Controller
{
    public function index()
    {
        $animes     = Anime::all();
        $user       = Auth::user();
        $is_a_guest = Auth::guest();

        return view('animes.index', compact('animes', 'user', 'is_a_guest'));
    }

    public function search($query)
    {
        $user       = Auth::user();
        $is_a_guest = Auth::guest();

        $animes = Anime::where('name', 'LIKE', '%' . $query . '%')->get();

        if (count($animes) == 0){
            return view('animes.index')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $query);
        } else{
            return View('animes.index', compact('animes', 'query', 'user', 'is_a_guest'));
        }
    }
}
