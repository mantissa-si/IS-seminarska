<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_game', function (Blueprint $table) {
            $table->id();
            $table->integer('minutes_played');
            $table->integer('points');
            $table->integer('assists');
            $table->integer('rebounds');
            $table->integer('blocks');
            $table->foreignId('player_id');
            $table->foreignId('game_id');
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_game');
    }
};
