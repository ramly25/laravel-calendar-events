<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['vanue','game_date','league_id','team1_id','team2_id'];

    public function league()
    {
        return $this->belongsTo(League::class,'league_id', 'id');
    }

    public function teamOne()
    {
        return $this->belongsTo(Team::class,'team1_id', 'id');
    }

    public function teamTwo()
    {
        return $this->belongsTo(Team::class,'team2_id', 'id');
    }
}
