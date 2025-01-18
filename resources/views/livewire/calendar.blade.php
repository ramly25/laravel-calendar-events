<div class="row sec-live">
    <div class="col-md-6">
    <div class="row">
    <div class="col-md-12">
        League :
        <select wire:change="getFilterLeague($event.target.value)">
            <option value="">-- all --</option>
            @foreach ($leagues as $league)
                <option value="{{$league->id}}">{{$league->name}}</option>
            @endforeach
        </select>
        Team :
        <select wire:change="getFilterTeam($event.target.value)">
            <option value="">-- all --</option>
            @foreach ($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>
    </div><br><br>
    <div class="col-md-2"><button class="btn btn-sm btn-outline-dark" wire:click="getMonth('prev')">prev</button></div>
    <div class="col-md-8 text-center m-10">
        <h5>{{ date('F Y', strtotime($year . '-' . $month . '-01')) }}</h5>
    </div>
    <div class="col-md-2"><button class="btn btn-sm btn-outline-dark" wire:click="getMonth('next')">next</button></div></div><br>
        <div class="day head-cal">Sun</div>
        <div class="day head-cal">Mon</div>
        <div class="day head-cal">Tue</div>
        <div class="day head-cal">Wed</div>
        <div class="day head-cal">Thu</div>
        <div class="day head-cal">Fri</div>
        <div class="day head-cal">Sat</div>
        <div style="width:100%; height:30px;">&nbsp;</div>
        @for($i = 0; $i < $calendar[0]['day_name']; $i++)
            <div class="day">&nbsp;</div>
        @endfor
        @foreach ($calendar as $day)
            <div class="day">{{$day['day']}}
                {!! $day['count_event'] > 0 ? '<span style="position:absolute; top:0px;" class="badge badge-sm bg-warning" wire:click="getEventsForDate(\''.$day['date'].'\')">' . $day['count_event'] . '</span>' : '' !!}
            </div>
        @endforeach
    </div>

    <div class="col-md-6">
        <h1>Events</h1>
        <div style="max-height:300px; overflow-y:scroll">
            @foreach ($events as $event)
            <b>{{$event->league->name}} : {{$event->game_date}} , {{$event->vanue}}</b><br>
                   {{$event->teamOne->name}}  - VS -  {{$event->teamTwo->name}} <hr>
            @endforeach
        </div>
    </div>
</div>