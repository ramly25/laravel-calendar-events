<?php

namespace App\Services;

use App\Models\Game;
use App\Models\League;
use App\Models\Team;

class CalendarService
{
    public function getCalendarMarking($filter_league, $filter_team, $filter_date)
    {
        $data = Game::whereDate('game_date', $filter_date)
            ->when($filter_league, function ($query, $filter_league) {
                return $query->where('league_id', $filter_league);
            })
            ->when($filter_team, function ($query, $filter_team) {
                return $query->where(function ($query) use ($filter_team) {
                    $query->where('team1_id', $filter_team)->orWhere('team2_id', $filter_team);
                });
            })
            ->count();
        return $data;
    }

    public function getCalendarEvent($filter_league, $filter_team, $filter_date, $filter_year, $filter_month)
    {

        $data = Game::with('league', 'teamOne', 'teamTwo')
            ->when($filter_date, function ($query, $filter_date) {
                return $query->whereDate('game_date', $filter_date);
            })
            ->when($filter_year, function ($query, $filter_year) {
                return $query->whereYear('game_date', $filter_year);
            })
            ->when($filter_month, function ($query, $filter_month) {
                return $query->whereMonth('game_date', $filter_month);
            })
            ->when($filter_league, function ($query, $filter_league) {
                return $query->where('league_id', $filter_league);
            })
            ->when($filter_team, function ($query, $filter_team) {
                return $query->where(function ($query) use ($filter_team) {
                    $query->where('team1_id', $filter_team)->orWhere('team2_id', $filter_team);
                });
            })
            ->orderBy('league_id', 'ASC')
            ->orderBy('game_date', 'ASC')
            ->get();
        return $data;
    }

    public function getAllLeague(){
        $leagues = League::all();
        return $leagues;
    }

    public function getAllTeam(){
        $leagues = Team::all();
        return $leagues;
    }
}