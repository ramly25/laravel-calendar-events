<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\League;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{

    /**
     * Get Calendar Marking
     */

    public function getCalendarMarking(Request $request)
    {
        $filter_league = $request->league;
        $filter_team = $request->team;
        $data = Game::select(DB::raw('DATE(game_date) as date, CONCAT("[day]<span class=\'badge badge-sm bg-warning\'>",count(*),"</span>") as markup'))
            ->whereYear('game_date', $request->year)
            ->whereMonth('game_date', $request->month)
            ->when($filter_league, function ($query, $filter_league) {
                return $query->where('league_id', $filter_league);
            })
            ->when($filter_team, function ($query, $filter_team) {
                return $query->where(function ($query) use ($filter_team) {
                    $query->where('team1_id', $filter_team)->orWhere('team2_id', $filter_team);
                });
            })
            ->groupBy('date')
            ->get();
        return $data;
    }

    /**
     * Get Calendar Marking
     */

    public function getCalendarEvent(Request $request)
    {
        $filter_league = $request->league;
        $filter_team = $request->team;
        $filter_date = $request->day;
        $filter_year = $request->year;
        $filter_month = $request->month;

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
            ->orderBy('league_id','ASC')
            ->orderBy('game_date', 'ASC')
            ->get();
        return response()->json([
            'status' => 'ok',
            'data' => $data,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leagues = League::all();
        $teams = Team::all();
        return view('calendar', compact('leagues', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
