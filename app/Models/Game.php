<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

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
