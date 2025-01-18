<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;
use Carbon\Carbon;
use App\Services\CalendarService;

class Calendar extends Component
{
    public $month;
    public $year;
    public $selectedDate;
    public $events;
    public $calendar = [];
    public $league;
    public $team;
    public $teams;
    public $leagues;

    private CalendarService $calendarService;

    public function mount()
    {
        $this->month = date('m');
        $this->year = date('Y');
        $this->calendarService = new CalendarService();
        $this->leagues = $this->calendarService->getAllLeague();
        $this->teams = $this->calendarService->getAllTeam();
    }

    public function getEventsForDate($date)
    {
        $this->selectedDate = $date;
        $this->calendarService = new CalendarService();
        $this->events = $this->calendarService->getCalendarEvent($this->league, $this->team, $this->selectedDate, null, null);
    }

    public function getMonth($tipe){
        $the_month = Carbon::createFromDate($this->year, $this->month);
        if($tipe == "next"){
            $the_month = $the_month->addMonth();
        }else{
            $the_month = $the_month->subMonth();
        }
        $this->year = $the_month->format('Y');
        $this->month = $the_month->format('m');
        $this->selectedDate = null;
        $this->createCalendar();
        $this->events = $this->calendarService->getCalendarEvent($this->league, $this->team, null, $this->year, $this->month);
    }

    public function getFilterLeague($filter_league){
        $this->league = $filter_league;
        $this->selectedDate = null;
        $this->createCalendar();
        $this->events = $this->calendarService->getCalendarEvent($this->league, $this->team, null, $this->year, $this->month);
    }

    public function getFilterTeam($filter_team){
        $this->team = $filter_team;
        $this->selectedDate = null;
        $this->createCalendar();
        $this->events = $this->calendarService->getCalendarEvent($this->league, $this->team, null, $this->year, $this->month);
    }

    public function createCalendar(){
        $days = [];
        $this->calendarService = new CalendarService();
        $daysInMonth = Carbon::createFromDate($this->year, $this->month)->daysInMonth;
        for ($i = 1; $i <= $daysInMonth; $i++) {
            $date = Carbon::createFromDate($this->year, $this->month, $i);
            $days[] = [
                'day' => $date->format('j'),
                'date' => $date->format('Y-m-d'),
                'day_name' => $date->format('N'),
                'count_event' => $this->calendarService->getCalendarMarking($this->league,$this->team,$date->format('Y-m-d')),
            ];
        }

        $this->calendar = $days;
    }

    public function render()
    {
        $this->createCalendar();
        $this->events = $this->calendarService->getCalendarEvent($this->league, $this->team, $this->selectedDate, $this->year, $this->month);

        return view('livewire.calendar', [
            'calendar' => $this->calendar,
            'selectedDate' => $this->selectedDate,
            'events' => $this->events,
            'leagues' => $this->leagues,
            'teame' => $this->teams,
        ]);
    }
}
