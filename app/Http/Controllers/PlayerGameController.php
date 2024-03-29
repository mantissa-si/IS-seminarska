<?php

namespace App\Http\Controllers;

use App\Models\PlayerGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playergames = DB::table('player_game')->select()->get();
        return response($playergames);
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
            'minutes_played' => 'numeric',
            'points' => 'numeric',
            'assists' => 'numeric',
            'rebounds' => 'numeric',
            'blocks' => 'numeric',
            'player_id' => 'numeric',
            "game_id" => 'numeric'
        ]);

        $playerGame = PlayerGame::create($request->all());
        $playerGame->save();

        redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $response = DB::table('player_game')->select()->where('id', $id)->get();
        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerGame $playerGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayerGame $playerGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerGame  $playerGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerGame $playerGame)
    {
        //
    }
}
