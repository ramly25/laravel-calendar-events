<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sport Events</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/zabuto.css" rel="stylesheet" />
    <style>
        .day {
            width: 14%;
            float: left;
            position: relative;
        }

        .sec-live {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .head-cal {
            font-weight: bold;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Sport Events</a>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bg-white" style="padding:20px; min-height:300px;">
                    league :
                    <select id="league">
                    <option value="">-- all --</option>
                        @foreach($leagues as $league)
                            <option value="{{$league->id}}">{{$league->name}}</option>
                        @endforeach
                    </select>

                    Team :
                    <select id="team">
                    <option value="">-- all --</option>
                        @foreach($teams as $team)
                            <option value="{{$team->id}}">{{$team->name}}</option>
                        @endforeach
                    </select>

                    <br><br>
                    <div id="calendar"></div>
                </div>
                <div class="col-md-6 bg-white" style="padding:20px; min-height:300px;">
                    <h1>Events</h1>
                    <div id="event" style="max-height:300px; overflow-y:scroll">

                    </div>
                </div>
            </div>
        </div>

    </header>

    <section class="container">
        @livewire('Calendar')
    </section>
    <!-- Footer-->
    <footer class="footer text-center" id="profile">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Bandung
                        <br />
                        West Java, Indonesia
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Social Media</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Sport Events</h4>
                    <p class="lead mb-0">
                        Show calendar sport events games and league
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Ramly Ramadhani 2025</small></div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/zabuto.js"></script>
    <!-- initialize the plugin -->
    <script>
        var year = '{{date('Y')}}';
        var month = '{{date('m')}}';
        var day = null;
        $(document).ready(function () {
            $("#calendar").zabuto_calendar({
                classname: 'clickable',
                ajax: '{{route('calendar.marking')}}?league='+$("#league").val(),
            });
            
        });

        $("#league").change(function(){
            load_data();
        });

        $("#team").change(function(){
            load_data();
        });

        $('#calendar').on('zabuto:calendar:render', function (e) {
            year = e.year;
            month = e.month;
            get_event();
        });

        function datefilter(date){
            let month = date.getMonth();
            let year = date.getFullYear();
            let day = date.getDate();
            return year+'-'+(month+1) + '-' + day;
        }

        $("#calendar").on('zabuto:calendar:day', function (e) {
          day = datefilter(e.date);
          get_event();
        });

        function load_data(){
            $("#calendar").zabuto_calendar('destroy');
            $("#calendar").zabuto_calendar({
                classname: 'clickable',
                ajax: '{{route('calendar.marking')}}?league='+$("#league").val()+'&team='+$("#team").val(),
            });
            $("#calendar").zabuto_calendar('reload');
        }

        function get_event(){
            $.post("{{route('calendar.event')}}",
            {
                year: year,
                month: month,
                day: day,
                team: $("#team").val(),
                league: $("#league").val(),
                _token: "{{ csrf_token() }}",
            },
            function(data, status){
                $('#event').html('');
                $.map( data.data, function( val, i ) {
                   let html = `
                   <b>`+val.league.name+` : `+val.game_date+` , `+(val.vanue??'')+`</b><br>
                   `+val.team_one.name+`  - VS -  `+val.team_two.name+` <hr>
                   `;
                   $('#event').append(html);
                });
            });
            day = null;
        }
    </script>
</body>

</html>