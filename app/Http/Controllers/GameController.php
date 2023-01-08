<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'homePoints1Q' => 'numeric',
            'awayPoints1Q' => 'numeric',
            'homePoints2Q' => 'numeric',
            'awayPoints2Q' => 'numeric',
            'homePoints3Q' => 'numeric',
            'awayPoints3Q' => 'numeric',
            'homePoints4Q' => 'numeric',
            'awayPoints4Q' => 'numeric',
            'home_team' => 'string|max:255',
            'away_team' => 'string|max:255',
            'referee_id' => 'string',
            'competition_id' => 'string'
        ]);

        $game = new Game();

        $game->date = $request->date;
        $game->homePoints1Q = $request->homePoints1Q;
        $game->awayPoints1Q = $request->awayPoints1Q;
        $game->homePoints2Q = $request->homePoints2Q;
        $game->awayPoints2Q = $request->awayPoints2Q;
        $game->homePoints3Q = $request->homePoints3Q;
        $game->awayPoints3Q = $request->awayPoints3Q;
        $game->homePoints4Q = $request->homePoints4Q;
        $game->awayPoints4Q = $request->awayPoints4Q;
        $game->homeTeam = DB::table('teams')->where('name', $request->home_team)->on('id');
        $game->awayTeam = DB::table('teams')->where('name', $request->away_team)->on('id');
        $game->referee_id = $request->referee_id;
        $game->competition_id = $request->competition_id;

        $game->save();

        redirect(route('dashbnoard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
