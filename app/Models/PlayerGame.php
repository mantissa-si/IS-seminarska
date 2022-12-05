<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'minutes_played',
        'points',
        'assists',
        'rebounds',
        'blocks',
        'player_id',
        "game_id"
    ];
}
