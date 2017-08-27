<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Season;

class SeasonController extends Controller
{
    public function index() {
        $seasons = Season::all();

        return view('seasons.index', compact('seasons'));
    }
}
