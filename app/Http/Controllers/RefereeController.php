<?php

namespace App\Http\Controllers;

use App\Models\Referee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefereeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referees = DB::table('referees')->select()->get();
        return response($referees);
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
            'name',
            'surname',
            'nationality'
        ]);

        $referee = new Referee();

        $referee->name = $request->name;
        $referee->surname = $request->surname;
        $referee->nationality = $request->nationality;

        $referee->save();

        redirect(route('referee.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function show(Referee $referee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function edit(Referee $referee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referee $referee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referee $referee)
    {
        //
    }
}
