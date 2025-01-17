<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\League;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
              "date" => "2025-01-15T00:00:00+00:00",
              "timestamp" => 1736899200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-01-15T00:00:00+00:00",
              "timestamp" => 1736899200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Grand Rapids Gold",
              "team2" => "Long Island Nets"
            ],
            [
              "date" => "2025-01-15T00:00:00+00:00",
              "timestamp" => 1736899200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-01-15T01:00:00+00:00",
              "timestamp" => 1736902800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Oklahoma City Blue",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-01-15T02:00:00+00:00",
              "timestamp" => 1736906400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-01-16T00:00:00+00:00",
              "timestamp" => 1736985600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-16T00:00:00+00:00",
              "timestamp" => 1736985600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-01-16T00:30:00+00:00",
              "timestamp" => 1736987400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-01-16T01:00:00+00:00",
              "timestamp" => 1736989200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-01-16T01:00:00+00:00",
              "timestamp" => 1736989200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-01-16T18:00:00+00:00",
              "timestamp" => 1737050400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Capital City Go-Go",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-01-17T00:00:00+00:00",
              "timestamp" => 1737072000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Grand Rapids Gold",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-01-17T00:00:00+00:00",
              "timestamp" => 1737072000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-01-17T01:00:00+00:00",
              "timestamp" => 1737075600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-01-17T02:00:00+00:00",
              "timestamp" => 1737079200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-01-17T23:00:00+00:00",
              "timestamp" => 1737154800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-01-18T00:00:00+00:00",
              "timestamp" => 1737158400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Capital City Go-Go",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-01-18T00:00:00+00:00",
              "timestamp" => 1737158400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-18T01:00:00+00:00",
              "timestamp" => 1737162000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Austin Toros Spurs",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-01-18T01:00:00+00:00",
              "timestamp" => 1737162000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-01-18T01:30:00+00:00",
              "timestamp" => 1737163800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-01-18T03:00:00+00:00",
              "timestamp" => 1737169200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-01-18T18:00:00+00:00",
              "timestamp" => 1737223200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-01-19T00:00:00+00:00",
              "timestamp" => 1737244800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-01-19T00:00:00+00:00",
              "timestamp" => 1737244800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-01-19T01:00:00+00:00",
              "timestamp" => 1737248400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-01-19T01:30:00+00:00",
              "timestamp" => 1737250200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Memphis Hustle"
            ],
            [
              "date" => "2025-01-19T18:00:00+00:00",
              "timestamp" => 1737309600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Long Island Nets"
            ],
            [
              "date" => "2025-01-19T19:00:00+00:00",
              "timestamp" => 1737313200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-01-19T19:00:00+00:00",
              "timestamp" => 1737313200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Raptors 905",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-19T21:00:00+00:00",
              "timestamp" => 1737320400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-01-20T00:00:00+00:00",
              "timestamp" => 1737331200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-01-20T17:00:00+00:00",
              "timestamp" => 1737392400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-01-20T18:00:00+00:00",
              "timestamp" => 1737396000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-01-20T20:00:00+00:00",
              "timestamp" => 1737403200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Austin Toros Spurs",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-01-20T21:30:00+00:00",
              "timestamp" => 1737408600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Memphis Hustle"
            ],
            [
              "date" => "2025-01-20T22:00:00+00:00",
              "timestamp" => 1737410400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-01-20T23:00:00+00:00",
              "timestamp" => 1737414000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Salt Lake City Stars"
            ],
            [
              "date" => "2025-01-22T00:00:00+00:00",
              "timestamp" => 1737504000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-01-22T01:00:00+00:00",
              "timestamp" => 1737507600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-01-22T02:00:00+00:00",
              "timestamp" => 1737511200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-01-22T02:00:00+00:00",
              "timestamp" => 1737511200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Valley Suns",
              "team2" => "Indiana Mad Ants"
            ],
            [
              "date" => "2025-01-22T16:00:00+00:00",
              "timestamp" => 1737561600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Raptors 905",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-01-23T00:00:00+00:00",
              "timestamp" => 1737590400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Osceola Magic",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-01-23T00:00:00+00:00",
              "timestamp" => 1737590400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-01-23T00:00:00+00:00",
              "timestamp" => 1737590400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "College Park Skyhawks",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-01-23T02:30:00+00:00",
              "timestamp" => 1737599400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Salt Lake City Stars"
            ],
            [
              "date" => "2025-01-23T03:00:00+00:00",
              "timestamp" => 1737601200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "San Diego Clippers",
              "team2" => "Santa Cruz Warriors"
            ],
            [
              "date" => "2025-01-23T03:00:00+00:00",
              "timestamp" => 1737601200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "South Bay Lakers"
            ],
            [
              "date" => "2025-01-23T17:30:00+00:00",
              "timestamp" => 1737653400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-01-24T00:00:00+00:00",
              "timestamp" => 1737676800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "College Park Skyhawks",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-01-24T00:00:00+00:00",
              "timestamp" => 1737676800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Delaware Blue Coats",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-01-24T00:00:00+00:00",
              "timestamp" => 1737676800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-01-24T00:30:00+00:00",
              "timestamp" => 1737678600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-24T03:00:00+00:00",
              "timestamp" => 1737687600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-01-25T00:00:00+00:00",
              "timestamp" => 1737763200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Maine Celtics"
            ],
            [
              "date" => "2025-01-25T00:00:00+00:00",
              "timestamp" => 1737763200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-01-25T00:30:00+00:00",
              "timestamp" => 1737765000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-25T01:00:00+00:00",
              "timestamp" => 1737766800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Austin Toros Spurs",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-01-25T01:00:00+00:00",
              "timestamp" => 1737766800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Memphis Hustle"
            ],
            [
              "date" => "2025-01-25T03:00:00+00:00",
              "timestamp" => 1737774000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Salt Lake City Stars"
            ],
            [
              "date" => "2025-01-25T03:00:00+00:00",
              "timestamp" => 1737774000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-01-25T18:00:00+00:00",
              "timestamp" => 1737828000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Delaware Blue Coats",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-01-26T00:00:00+00:00",
              "timestamp" => 1737849600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "Indiana Mad Ants"
            ],
            [
              "date" => "2025-01-26T01:00:00+00:00",
              "timestamp" => 1737853200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Memphis Hustle"
            ],
            [
              "date" => "2025-01-26T01:00:00+00:00",
              "timestamp" => 1737853200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-01-26T01:00:00+00:00",
              "timestamp" => 1737853200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rio Grande Valley Vipers",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-01-26T01:00:00+00:00",
              "timestamp" => 1737853200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Austin Toros Spurs",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-01-26T03:00:00+00:00",
              "timestamp" => 1737860400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Salt Lake City Stars"
            ],
            [
              "date" => "2025-01-26T18:00:00+00:00",
              "timestamp" => 1737914400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Delaware Blue Coats",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-01-26T18:00:00+00:00",
              "timestamp" => 1737914400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-01-26T20:00:00+00:00",
              "timestamp" => 1737921600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-01-26T22:00:00+00:00",
              "timestamp" => 1737928800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-01-26T23:00:00+00:00",
              "timestamp" => 1737932400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-01-26T23:00:00+00:00",
              "timestamp" => 1737932400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-01-28T00:00:00+00:00",
              "timestamp" => 1738022400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Iowa Wolves"
            ],
            [
              "date" => "2025-01-28T01:00:00+00:00",
              "timestamp" => 1738026000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Oklahoma City Blue",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-01-28T02:00:00+00:00",
              "timestamp" => 1738029600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-01-28T02:30:00+00:00",
              "timestamp" => 1738031400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-01-28T23:00:00+00:00",
              "timestamp" => 1738105200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-01-29T00:00:00+00:00",
              "timestamp" => 1738108800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Osceola Magic",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-01-29T02:00:00+00:00",
              "timestamp" => 1738116000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-29T03:00:00+00:00",
              "timestamp" => 1738119600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-01-29T17:00:00+00:00",
              "timestamp" => 1738170000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Oklahoma City Blue",
              "team2" => "Memphis Hustle"
            ],
            [
              "date" => "2025-01-29T22:00:00+00:00",
              "timestamp" => 1738188000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-01-30T00:00:00+00:00",
              "timestamp" => 1738195200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Iowa Wolves"
            ],
            [
              "date" => "2025-01-30T00:00:00+00:00",
              "timestamp" => 1738195200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-01-30T00:30:00+00:00",
              "timestamp" => 1738197000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Raptors 905",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-01-30T02:00:00+00:00",
              "timestamp" => 1738202400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-01-30T02:00:00+00:00",
              "timestamp" => 1738202400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-01-30T02:30:00+00:00",
              "timestamp" => 1738204200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-01-30T03:00:00+00:00",
              "timestamp" => 1738206000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "San Diego Clippers",
              "team2" => "Santa Cruz Warriors"
            ],
            [
              "date" => "2025-01-30T03:00:00+00:00",
              "timestamp" => 1738206000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-01-31T00:00:00+00:00",
              "timestamp" => 1738281600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Osceola Magic",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-01-31T01:00:00+00:00",
              "timestamp" => 1738285200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Oklahoma City Blue",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-01-31T02:00:00+00:00",
              "timestamp" => 1738288800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-01-31T03:00:00+00:00",
              "timestamp" => 1738292400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-02-01T00:00:00+00:00",
              "timestamp" => 1738368000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-02-01T00:00:00+00:00",
              "timestamp" => 1738368000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Iowa Wolves"
            ],
            [
              "date" => "2025-02-01T01:00:00+00:00",
              "timestamp" => 1738371600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-02-01T01:00:00+00:00",
              "timestamp" => 1738371600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rio Grande Valley Vipers",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-02-01T01:00:00+00:00",
              "timestamp" => 1738371600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-01T02:00:00+00:00",
              "timestamp" => 1738375200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Valley Suns",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-02-01T03:00:00+00:00",
              "timestamp" => 1738378800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-02-01T03:00:00+00:00",
              "timestamp" => 1738378800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-02-01T18:00:00+00:00",
              "timestamp" => 1738432800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Long Island Nets"
            ],
            [
              "date" => "2025-02-02T00:00:00+00:00",
              "timestamp" => 1738454400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-02-02T00:00:00+00:00",
              "timestamp" => 1738454400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-02-02T01:00:00+00:00",
              "timestamp" => 1738458000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rio Grande Valley Vipers",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-02-02T01:00:00+00:00",
              "timestamp" => 1738458000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-02T01:00:00+00:00",
              "timestamp" => 1738458000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Salt Lake City Stars"
            ],
            [
              "date" => "2025-02-02T03:00:00+00:00",
              "timestamp" => 1738465200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-02-02T17:00:00+00:00",
              "timestamp" => 1738515600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-02-02T19:00:00+00:00",
              "timestamp" => 1738522800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Delaware Blue Coats",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-02-02T20:00:00+00:00",
              "timestamp" => 1738526400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-02-02T21:00:00+00:00",
              "timestamp" => 1738530000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Austin Toros Spurs",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-02-02T22:00:00+00:00",
              "timestamp" => 1738533600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-02-03T18:00:00+00:00",
              "timestamp" => 1738605600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Iowa Wolves"
            ],
            [
              "date" => "2025-02-03T23:00:00+00:00",
              "timestamp" => 1738623600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-02-04T00:00:00+00:00",
              "timestamp" => 1738627200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-02-04T01:00:00+00:00",
              "timestamp" => 1738630800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rio Grande Valley Vipers",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-02-04T02:30:00+00:00",
              "timestamp" => 1738636200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-02-04T03:00:00+00:00",
              "timestamp" => 1738638000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-04T16:00:00+00:00",
              "timestamp" => 1738684800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Delaware Blue Coats",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-02-04T23:00:00+00:00",
              "timestamp" => 1738710000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-02-05T00:30:00+00:00",
              "timestamp" => 1738715400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Santa Cruz Warriors"
            ],
            [
              "date" => "2025-02-05T02:00:00+00:00",
              "timestamp" => 1738720800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-02-05T02:00:00+00:00",
              "timestamp" => 1738720800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-02-05T02:00:00+00:00",
              "timestamp" => 1738720800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Valley Suns",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-02-06T00:00:00+00:00",
              "timestamp" => 1738800000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-02-06T01:00:00+00:00",
              "timestamp" => 1738803600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Iowa Wolves"
            ],
            [
              "date" => "2025-02-06T02:00:00+00:00",
              "timestamp" => 1738807200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "South Bay Lakers"
            ],
            [
              "date" => "2025-02-06T17:00:00+00:00",
              "timestamp" => 1738861200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-02-07T00:30:00+00:00",
              "timestamp" => 1738888200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-07T01:00:00+00:00",
              "timestamp" => 1738890000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-02-08T00:00:00+00:00",
              "timestamp" => 1738972800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-02-08T00:30:00+00:00",
              "timestamp" => 1738974600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Raptors 905",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-02-08T00:30:00+00:00",
              "timestamp" => 1738974600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-02-08T01:30:00+00:00",
              "timestamp" => 1738978200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-02-08T02:00:00+00:00",
              "timestamp" => 1738980000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-02-08T03:00:00+00:00",
              "timestamp" => 1738983600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-02-08T03:00:00+00:00",
              "timestamp" => 1738983600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-02-08T19:00:00+00:00",
              "timestamp" => 1739041200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Capital City Go-Go",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-08T20:00:00+00:00",
              "timestamp" => 1739044800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "College Park Skyhawks",
              "team2" => "Wisconsin Herd"
            ],
            [
              "date" => "2025-02-08T20:00:00+00:00",
              "timestamp" => 1739044800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-08T23:00:00+00:00",
              "timestamp" => 1739055600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-02-08T23:00:00+00:00",
              "timestamp" => 1739055600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-02-09T00:00:00+00:00",
              "timestamp" => 1739059200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-02-09T00:30:00+00:00",
              "timestamp" => 1739061000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-02-09T01:00:00+00:00",
              "timestamp" => 1739062800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-02-09T01:00:00+00:00",
              "timestamp" => 1739062800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Maine Celtics"
            ],
            [
              "date" => "2025-02-09T01:30:00+00:00",
              "timestamp" => 1739064600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-02-09T03:00:00+00:00",
              "timestamp" => 1739070000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "San Diego Clippers",
              "team2" => "South Bay Lakers"
            ],
            [
              "date" => "2025-02-09T03:00:00+00:00",
              "timestamp" => 1739070000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-02-09T20:00:00+00:00",
              "timestamp" => 1739131200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Osceola Magic",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-02-10T19:00:00+00:00",
              "timestamp" => 1739214000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Capital City Go-Go",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-11T00:00:00+00:00",
              "timestamp" => 1739232000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "College Park Skyhawks",
              "team2" => "Indiana Mad Ants"
            ],
            [
              "date" => "2025-02-11T00:00:00+00:00",
              "timestamp" => 1739232000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Osceola Magic",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-02-11T00:00:00+00:00",
              "timestamp" => 1739232000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-02-11T01:00:00+00:00",
              "timestamp" => 1739235600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rio Grande Valley Vipers",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-02-11T01:00:00+00:00",
              "timestamp" => 1739235600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Maine Celtics"
            ],
            [
              "date" => "2025-02-11T02:00:00+00:00",
              "timestamp" => 1739239200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Valley Suns",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-02-11T02:30:00+00:00",
              "timestamp" => 1739241000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Rip City Remix",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-02-11T16:00:00+00:00",
              "timestamp" => 1739289600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-02-11T16:30:00+00:00",
              "timestamp" => 1739291400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-02-12T16:00:00+00:00",
              "timestamp" => 1739376000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-12T16:00:00+00:00",
              "timestamp" => 1739376000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Raptors 905",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-02-12T16:30:00+00:00",
              "timestamp" => 1739377800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Capital City Go-Go",
              "team2" => "Grand Rapids Gold"
            ],
            [
              "date" => "2025-02-12T16:30:00+00:00",
              "timestamp" => 1739377800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-02-12T17:30:00+00:00",
              "timestamp" => 1739381400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-02-13T00:00:00+00:00",
              "timestamp" => 1739404800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "College Park Skyhawks",
              "team2" => "Indiana Mad Ants"
            ],
            [
              "date" => "2025-02-13T01:00:00+00:00",
              "timestamp" => 1739408400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "Westchester"
            ],
            [
              "date" => "2025-02-13T03:00:00+00:00",
              "timestamp" => 1739415600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-02-14T00:00:00+00:00",
              "timestamp" => 1739491200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "College Park Skyhawks",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-14T00:00:00+00:00",
              "timestamp" => 1739491200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Maine Celtics",
              "team2" => "Long Island Nets"
            ],
            [
              "date" => "2025-02-14T00:00:00+00:00",
              "timestamp" => 1739491200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-02-14T00:30:00+00:00",
              "timestamp" => 1739493000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-02-14T00:30:00+00:00",
              "timestamp" => 1739493000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Raptors 905",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-02-14T01:00:00+00:00",
              "timestamp" => 1739494800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Birmingham Squadron",
              "team2" => "Indiana Mad Ants"
            ],
            [
              "date" => "2025-02-14T02:00:00+00:00",
              "timestamp" => 1739498400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "Sioux Falls Skyforce"
            ],
            [
              "date" => "2025-02-14T02:00:00+00:00",
              "timestamp" => 1739498400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Valley Suns",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-02-14T03:00:00+00:00",
              "timestamp" => 1739502000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Stockton Kings"
            ],
            [
              "date" => "2025-02-14T03:00:00+00:00",
              "timestamp" => 1739502000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-02-20T17:30:00+00:00",
              "timestamp" => 1740072600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Maine Celtics"
            ],
            [
              "date" => "2025-02-21T00:00:00+00:00",
              "timestamp" => 1740096000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-02-21T00:00:00+00:00",
              "timestamp" => 1740096000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-21T00:00:00+00:00",
              "timestamp" => 1740096000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-02-21T00:30:00+00:00",
              "timestamp" => 1740097800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Iowa Wolves"
            ],
            [
              "date" => "2025-02-21T01:00:00+00:00",
              "timestamp" => 1740099600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-02-21T03:00:00+00:00",
              "timestamp" => 1740106800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-02-22T00:00:00+00:00",
              "timestamp" => 1740182400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-02-22T00:00:00+00:00",
              "timestamp" => 1740182400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-02-22T00:00:00+00:00",
              "timestamp" => 1740182400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-02-22T03:00:00+00:00",
              "timestamp" => 1740193200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "San Diego Clippers",
              "team2" => "Salt Lake City Stars"
            ],
            [
              "date" => "2025-02-22T03:00:00+00:00",
              "timestamp" => 1740193200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-22T21:00:00+00:00",
              "timestamp" => 1740258000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-02-22T23:00:00+00:00",
              "timestamp" => 1740265200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-02-23T00:00:00+00:00",
              "timestamp" => 1740268800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Grand Rapids Gold",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-23T00:00:00+00:00",
              "timestamp" => 1740268800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Greensboro Swarm",
              "team2" => "Mexico City Capitanes"
            ],
            [
              "date" => "2025-02-23T01:00:00+00:00",
              "timestamp" => 1740272400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-02-23T01:00:00+00:00",
              "timestamp" => 1740272400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "South Bay Lakers",
              "team2" => "Valley Suns"
            ],
            [
              "date" => "2025-02-23T01:00:00+00:00",
              "timestamp" => 1740272400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Motor City Cruise"
            ],
            [
              "date" => "2025-02-23T01:30:00+00:00",
              "timestamp" => 1740274200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-02-23T03:00:00+00:00",
              "timestamp" => 1740279600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Santa Cruz Warriors",
              "team2" => "Oklahoma City Blue"
            ],
            [
              "date" => "2025-02-23T20:00:00+00:00",
              "timestamp" => 1740340800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Cleveland Charge",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-02-23T20:00:00+00:00",
              "timestamp" => 1740340800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Long Island Nets",
              "team2" => "Osceola Magic"
            ],
            [
              "date" => "2025-02-23T20:00:00+00:00",
              "timestamp" => 1740340800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Capital City Go-Go"
            ],
            [
              "date" => "2025-02-23T21:00:00+00:00",
              "timestamp" => 1740344400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-02-23T21:00:00+00:00",
              "timestamp" => 1740344400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Memphis Hustle",
              "team2" => "Maine Celtics"
            ],
            [
              "date" => "2025-02-23T21:30:00+00:00",
              "timestamp" => 1740346200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Texas Legends",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-02-24T17:30:00+00:00",
              "timestamp" => 1740418200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Indiana Mad Ants",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-02-25T00:00:00+00:00",
              "timestamp" => 1740441600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Grand Rapids Gold",
              "team2" => "Delaware Blue Coats"
            ],
            [
              "date" => "2025-02-25T00:30:00+00:00",
              "timestamp" => 1740443400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Iowa Wolves",
              "team2" => "San Diego Clippers"
            ],
            [
              "date" => "2025-02-25T02:00:00+00:00",
              "timestamp" => 1740448800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Valley Suns",
              "team2" => "Rip City Remix"
            ],
            [
              "date" => "2025-02-25T02:00:00+00:00",
              "timestamp" => 1740448800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-02-26T00:00:00+00:00",
              "timestamp" => 1740528000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Grand Rapids Gold",
              "team2" => "Cleveland Charge"
            ],
            [
              "date" => "2025-02-26T00:00:00+00:00",
              "timestamp" => 1740528000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Motor City Cruise",
              "team2" => "Maine Celtics"
            ],
            [
              "date" => "2025-02-26T00:00:00+00:00",
              "timestamp" => 1740528000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Westchester",
              "team2" => "Long Island Nets"
            ],
            [
              "date" => "2025-02-26T00:00:00+00:00",
              "timestamp" => 1740528000,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Wisconsin Herd",
              "team2" => "Windy City Bulls"
            ],
            [
              "date" => "2025-02-26T00:30:00+00:00",
              "timestamp" => 1740529800,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-02-26T02:00:00+00:00",
              "timestamp" => 1740535200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Mexico City Capitanes",
              "team2" => "Austin Toros Spurs"
            ],
            [
              "date" => "2025-02-26T17:00:00+00:00",
              "timestamp" => 1740589200,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Oklahoma City Blue",
              "team2" => "Raptors 905"
            ],
            [
              "date" => "2025-02-26T19:00:00+00:00",
              "timestamp" => 1740596400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Capital City Go-Go",
              "team2" => "Greensboro Swarm"
            ],
            [
              "date" => "2025-02-26T19:00:00+00:00",
              "timestamp" => 1740596400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Stockton Kings",
              "team2" => "Memphis Hustle"
            ],
            [
              "date" => "2025-02-27T00:00:00+00:00",
              "timestamp" => 1740614400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Delaware Blue Coats",
              "team2" => "Rio Grande Valley Vipers"
            ],
            [
              "date" => "2025-02-27T02:00:00+00:00",
              "timestamp" => 1740621600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Salt Lake City Stars",
              "team2" => "College Park Skyhawks"
            ],
            [
              "date" => "2025-02-27T17:00:00+00:00",
              "timestamp" => 1740675600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Austin Toros Spurs",
              "team2" => "Long Island Nets"
            ],
            [
              "date" => "2025-02-28T00:30:00+00:00",
              "timestamp" => 1740702600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Sioux Falls Skyforce",
              "team2" => "Texas Legends"
            ],
            [
              "date" => "2025-02-28T01:00:00+00:00",
              "timestamp" => 1740704400,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "Windy City Bulls",
              "team2" => "Birmingham Squadron"
            ],
            [
              "date" => "2025-02-28T03:00:00+00:00",
              "timestamp" => 1740711600,
              "vanue" => null,
              "league" => "NBA - G League",
              "team1" => "San Diego Clippers",
              "team2" => "Indiana Mad Ants"
            ],
            [
              "date" => "2025-01-16T18:00:00+00:00",
              "timestamp" => 1737050400,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Amager",
              "team2" => "Randers"
            ],
            [
              "date" => "2025-01-16T18:15:00+00:00",
              "timestamp" => 1737051300,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Team FOG Naestved",
              "team2" => "Vaerlose"
            ],
            [
              "date" => "2025-01-17T18:00:00+00:00",
              "timestamp" => 1737136800,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Herlev Wolfpack",
              "team2" => "Copenhagen"
            ],
            [
              "date" => "2025-01-19T15:15:00+00:00",
              "timestamp" => 1737299700,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Horsens",
              "team2" => "Holbaek-Stenhus"
            ],
            [
              "date" => "2025-01-20T17:30:00+00:00",
              "timestamp" => 1737394200,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Bakken Bears",
              "team2" => "Bears Academy"
            ],
            [
              "date" => "2025-01-28T17:30:00+00:00",
              "timestamp" => 1738085400,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Bears Academy",
              "team2" => "Horsens"
            ],
            [
              "date" => "2025-01-28T17:30:00+00:00",
              "timestamp" => 1738085400,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Holbaek-Stenhus",
              "team2" => "Team FOG Naestved"
            ],
            [
              "date" => "2025-01-30T17:30:00+00:00",
              "timestamp" => 1738258200,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Randers",
              "team2" => "Herlev Wolfpack"
            ],
            [
              "date" => "2025-01-30T18:00:00+00:00",
              "timestamp" => 1738260000,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Copenhagen",
              "team2" => "Svendborg"
            ],
            [
              "date" => "2025-01-30T18:00:00+00:00",
              "timestamp" => 1738260000,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Vaerlose",
              "team2" => "Amager"
            ],
            [
              "date" => "2025-02-01T12:30:00+00:00",
              "timestamp" => 1738413000,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Holbaek-Stenhus",
              "team2" => "Randers"
            ],
            [
              "date" => "2025-02-01T13:00:00+00:00",
              "timestamp" => 1738414800,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Bakken Bears",
              "team2" => "Herlev Wolfpack"
            ],
            [
              "date" => "2025-02-01T15:00:00+00:00",
              "timestamp" => 1738422000,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Copenhagen",
              "team2" => "Vaerlose"
            ],
            [
              "date" => "2025-02-02T13:30:00+00:00",
              "timestamp" => 1738503000,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Amager",
              "team2" => "Bears Academy"
            ],
            [
              "date" => "2025-02-03T18:00:00+00:00",
              "timestamp" => 1738605600,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Horsens",
              "team2" => "Svendborg"
            ],
            [
              "date" => "2025-02-07T17:30:00+00:00",
              "timestamp" => 1738949400,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Herlev Wolfpack",
              "team2" => "Holbaek-Stenhus"
            ],
            [
              "date" => "2025-02-07T17:30:00+00:00",
              "timestamp" => 1738949400,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Randers",
              "team2" => "Copenhagen"
            ],
            [
              "date" => "2025-02-07T18:15:00+00:00",
              "timestamp" => 1738952100,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Team FOG Naestved",
              "team2" => "Bakken Bears"
            ],
            [
              "date" => "2025-02-08T13:30:00+00:00",
              "timestamp" => 1739021400,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Svendborg",
              "team2" => "Amager"
            ],
            [
              "date" => "2025-02-08T14:30:00+00:00",
              "timestamp" => 1739025000,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Vaerlose",
              "team2" => "Horsens"
            ],
            [
              "date" => "2025-02-13T18:00:00+00:00",
              "timestamp" => 1739469600,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Amager",
              "team2" => "Herlev Wolfpack"
            ],
            [
              "date" => "2025-02-13T18:00:00+00:00",
              "timestamp" => 1739469600,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Bakken Bears",
              "team2" => "Svendborg"
            ],
            [
              "date" => "2025-02-13T18:00:00+00:00",
              "timestamp" => 1739469600,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Copenhagen",
              "team2" => "Bears Academy"
            ],
            [
              "date" => "2025-02-13T18:00:00+00:00",
              "timestamp" => 1739469600,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Holbaek-Stenhus",
              "team2" => "Vaerlose"
            ],
            [
              "date" => "2025-02-13T18:00:00+00:00",
              "timestamp" => 1739469600,
              "vanue" => null,
              "league" => "Basketligaen",
              "team1" => "Horsens",
              "team2" => "Team FOG Naestved"
            ],
            [
              "date" => "2025-01-17T19:00:00+00:00",
              "timestamp" => 1737140400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Pau-Orthez",
              "team2" => "Nantes"
            ],
            [
              "date" => "2025-01-17T19:00:00+00:00",
              "timestamp" => 1737140400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Poitiers",
              "team2" => "Caen"
            ],
            [
              "date" => "2025-01-17T19:00:00+00:00",
              "timestamp" => 1737140400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Chartres",
              "team2" => "Hyeres-Toulon"
            ],
            [
              "date" => "2025-01-17T19:00:00+00:00",
              "timestamp" => 1737140400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Denain-Voltaire",
              "team2" => "Ada Blois"
            ],
            [
              "date" => "2025-01-17T19:30:00+00:00",
              "timestamp" => 1737142200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Antibes",
              "team2" => "Boulazac"
            ],
            [
              "date" => "2025-01-17T19:30:00+00:00",
              "timestamp" => 1737142200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "ASA",
              "team2" => "Rouen"
            ],
            [
              "date" => "2025-01-17T19:30:00+00:00",
              "timestamp" => 1737142200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Vichy",
              "team2" => "Roanne"
            ],
            [
              "date" => "2025-01-18T19:00:00+00:00",
              "timestamp" => 1737226800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Fos-sur-Mer",
              "team2" => "Aix Maurienne"
            ],
            [
              "date" => "2025-01-19T16:00:00+00:00",
              "timestamp" => 1737302400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Orleans",
              "team2" => "St. Chamond"
            ],
            [
              "date" => "2025-01-24T19:00:00+00:00",
              "timestamp" => 1737745200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Evreux",
              "team2" => "Chartres"
            ],
            [
              "date" => "2025-01-24T19:00:00+00:00",
              "timestamp" => 1737745200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Roanne",
              "team2" => "Antibes"
            ],
            [
              "date" => "2025-01-24T19:00:00+00:00",
              "timestamp" => 1737745200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Nantes",
              "team2" => "Boulazac"
            ],
            [
              "date" => "2025-01-24T19:00:00+00:00",
              "timestamp" => 1737745200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Denain-Voltaire",
              "team2" => "Fos-sur-Mer"
            ],
            [
              "date" => "2025-01-24T19:00:00+00:00",
              "timestamp" => 1737745200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Caen",
              "team2" => "Pau-Orthez"
            ],
            [
              "date" => "2025-01-24T19:00:00+00:00",
              "timestamp" => 1737745200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Aix Maurienne",
              "team2" => "Rouen"
            ],
            [
              "date" => "2025-01-24T19:30:00+00:00",
              "timestamp" => 1737747000,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Hyeres-Toulon",
              "team2" => "Orleans"
            ],
            [
              "date" => "2025-01-24T19:30:00+00:00",
              "timestamp" => 1737747000,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "St. Chamond",
              "team2" => "Poitiers"
            ],
            [
              "date" => "2025-01-24T19:30:00+00:00",
              "timestamp" => 1737747000,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Vichy",
              "team2" => "ASA"
            ],
            [
              "date" => "2025-01-25T19:00:00+00:00",
              "timestamp" => 1737831600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Ada Blois",
              "team2" => "Chalons-Reims"
            ],
            [
              "date" => "2025-01-29T19:00:00+00:00",
              "timestamp" => 1738177200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Chartres",
              "team2" => "Chalons-Reims"
            ],
            [
              "date" => "2025-01-31T19:00:00+00:00",
              "timestamp" => 1738350000,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Fos-sur-Mer",
              "team2" => "Nantes"
            ],
            [
              "date" => "2025-01-31T19:00:00+00:00",
              "timestamp" => 1738350000,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Poitiers",
              "team2" => "Roanne"
            ],
            [
              "date" => "2025-01-31T19:00:00+00:00",
              "timestamp" => 1738350000,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Ada Blois",
              "team2" => "Vichy"
            ],
            [
              "date" => "2025-01-31T19:30:00+00:00",
              "timestamp" => 1738351800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Hyeres-Toulon",
              "team2" => "Pau-Orthez"
            ],
            [
              "date" => "2025-01-31T19:30:00+00:00",
              "timestamp" => 1738351800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "ASA",
              "team2" => "Evreux"
            ],
            [
              "date" => "2025-01-31T19:30:00+00:00",
              "timestamp" => 1738351800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Antibes",
              "team2" => "Denain-Voltaire"
            ],
            [
              "date" => "2025-02-01T19:00:00+00:00",
              "timestamp" => 1738436400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Rouen",
              "team2" => "St. Chamond"
            ],
            [
              "date" => "2025-02-01T19:00:00+00:00",
              "timestamp" => 1738436400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Boulazac",
              "team2" => "Caen"
            ],
            [
              "date" => "2025-02-01T19:00:00+00:00",
              "timestamp" => 1738436400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Orleans",
              "team2" => "Aix Maurienne"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Aix Maurienne",
              "team2" => "Vichy"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Caen",
              "team2" => "Ada Blois"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Chalons-Reims",
              "team2" => "Hyeres-Toulon"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Evreux",
              "team2" => "Nantes"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Pau-Orthez",
              "team2" => "Chartres"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Rouen",
              "team2" => "Poitiers"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Orleans",
              "team2" => "Roanne"
            ],
            [
              "date" => "2025-02-04T19:00:00+00:00",
              "timestamp" => 1738695600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Boulazac",
              "team2" => "Denain-Voltaire"
            ],
            [
              "date" => "2025-02-04T19:30:00+00:00",
              "timestamp" => 1738697400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "St. Chamond",
              "team2" => "ASA"
            ],
            [
              "date" => "2025-02-04T19:30:00+00:00",
              "timestamp" => 1738697400,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Antibes",
              "team2" => "Fos-sur-Mer"
            ],
            [
              "date" => "2025-02-07T19:00:00+00:00",
              "timestamp" => 1738954800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Aix Maurienne",
              "team2" => "Antibes"
            ],
            [
              "date" => "2025-02-07T19:00:00+00:00",
              "timestamp" => 1738954800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Chartres",
              "team2" => "St. Chamond"
            ],
            [
              "date" => "2025-02-07T19:00:00+00:00",
              "timestamp" => 1738954800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Denain-Voltaire",
              "team2" => "Orleans"
            ],
            [
              "date" => "2025-02-07T19:00:00+00:00",
              "timestamp" => 1738954800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Fos-sur-Mer",
              "team2" => "Hyeres-Toulon"
            ],
            [
              "date" => "2025-02-07T19:00:00+00:00",
              "timestamp" => 1738954800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Nantes",
              "team2" => "Rouen"
            ],
            [
              "date" => "2025-02-07T19:00:00+00:00",
              "timestamp" => 1738954800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Poitiers",
              "team2" => "ASA"
            ],
            [
              "date" => "2025-02-07T19:30:00+00:00",
              "timestamp" => 1738956600,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Vichy",
              "team2" => "Pau-Orthez"
            ],
            [
              "date" => "2025-02-08T19:00:00+00:00",
              "timestamp" => 1739041200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Ada Blois",
              "team2" => "Boulazac"
            ],
            [
              "date" => "2025-02-08T19:00:00+00:00",
              "timestamp" => 1739041200,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Caen",
              "team2" => "Evreux"
            ],
            [
              "date" => "2025-02-09T16:00:00+00:00",
              "timestamp" => 1739116800,
              "vanue" => null,
              "league" => "Pro B",
              "team1" => "Roanne",
              "team2" => "Chalons-Reims"
            ]
        ];

        foreach($data as $v){
            $league = League::firstOrCreate(array('name' => $v['league']));
            $league->name = $v['league'];
            $league->update();

            $team1 = Team::firstOrCreate(array('name' => $v['team1']));
            $team1->name = $v['team1'];
            $team1->update();

            $team2 = Team::firstOrCreate(array('name' => $v['team2']));
            $team2->name = $v['team2'];
            $team2->update();

            $game = new Game();
            $game->game_date = str_replace("+00:00","",str_replace("T"," ",$v['date']));
            $game->league_id = $league->id;
            $game->team1_id = $team1->id;
            $game->team2_id = $team2->id;
            $game->vanue = $v['vanue'];
            $game->save();
        }
    }
}
