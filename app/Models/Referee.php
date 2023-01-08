<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'surname',
    'nationality'
  ];

  public function games()
  {
    return $this->hasMany(Game::class);
  }
}
