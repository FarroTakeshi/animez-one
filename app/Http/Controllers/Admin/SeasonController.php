<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Season;
use Carbon\Carbon;

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

        $date = new Carbon( request('start_date') );

        $season = Season::create([
            'name'       => request('name'),
            'end_date'   => request('start_date'),
            'start_date' => request('end_date'),
            'year'       => $date->year,
        ]);

        return redirect()->route('season.index')
                         ->with('message', 'New season registered');
    }

    public function edit(Season $season) {
        return view('seasons.edit', compact('season'));
    }

    public function update(Season $season) {
        $this->validate(request(), [
            'name'       => 'required',
            'start_date' => 'required|date',
            'end_date'   => 'required|date',
        ]);

        $date = new Carbon( request('start_date') );

        $season->name       = request('name');
        $season->start_date = request('start_date');
        $season->end_date   = request('end_date');
        $season->year       = $date->year;

        $season->save();

        return redirect()->route('season.index')
                         ->with('message', 'Season Updated');
    }
}
