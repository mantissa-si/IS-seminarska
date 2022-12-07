<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'homePoints1Q',
        'awayPoints1Q',
        'homePoints2Q',
        'awayPoints2Q',
        'homePoints3Q',
        'awayPoints3Q',
        'homePoints4Q',
        'awayPoints4Q',
        'home_team',
        'away_team',
        'referee_id',
        'competition_id'
    ];


    public function getAwayScore()
    {
        return $this->awayPoints1Q + $this->awayPoints2Q + $this->awayPoints3Q + $this->awayPoints4Q;
    }

    public function getHomeScore()
    {
        return $this->homePoints1Q + $this->homePoints2Q + $this->homePoints3Q + $this->homePoints4Q;
    }

    public function players()
    {
        return $this->hasMany(PlayerGame::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function referee()
    {
        return $this->belongsTo(Referee::class);
    }
}
