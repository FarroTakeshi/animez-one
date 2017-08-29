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

    public function create() {
        return view('seasons.create');
    }

    public function store() {
        $this->validate(request(), [
            'name'       => 'required',
            'start_date' => 'required|date',
            'end_date'   => 'required|date',
        ]);

        $season = Season::create([
            'name'       => request('name'),
            'end_date'   => request('start_date'),
            'start_date' => request('end_date'),
        ]);

        return redirect()->route('season.index')
                         ->with('message', 'New season registered');
    }
}
