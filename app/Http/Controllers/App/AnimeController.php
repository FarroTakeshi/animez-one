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
}
