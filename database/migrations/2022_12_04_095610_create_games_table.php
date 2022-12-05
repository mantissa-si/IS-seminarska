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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('homePoints1Q');
            $table->integer('awayPoints1Q');
            $table->integer('homePoints2Q');
            $table->integer('awayPoints2Q');
            $table->integer('homePoints3Q');
            $table->integer('awayPoints3Q');
            $table->integer('homePoints4Q');
            $table->integer('awayPoints4Q');
            $table->foreignId('home_team');
            $table->foreignId('away_team');
            $table->foreignId('referee_id');
            $table->foreignId('competition_id');
            $table->timestamps();

            $table->foreign('home_team')->references('id')->on('teams');
            $table->foreign('away_team')->references('id')->on('teams');
            $table->foreign('referee_id')->references('id')->on('referees');
            $table->foreign('competition_id')->references('id')->on('competitions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
