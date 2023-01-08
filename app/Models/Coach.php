<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'nationality',
        'team_id'
    ];

    public function team()
    {
        return $this->hasOne(Team::class, 'id', 'team_id');
    }
}
