<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Calendar</title>

        {{-- bootstrap --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css" integrity="sha512-6g9IGCc67eh+xK03Z8ILcnKLbJnKBW+qpEdoUVD/4hBa2Ghiq5dQgeNOGWJfGoe9tdCRM4GpJMnsRXa2FDJp9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- jquery ui --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" integrity="sha512-okE4owXD0kfXzgVXBzCDIiSSlpXn3tJbNodngsTnIYPJWjuYhtJ+qMoc0+WUwLHeOwns0wm57Ka903FqQKM1sA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- css fullcalendar --}}
        <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css *//* html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}} */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #dialog{
                display:none;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<div class="content">
    <div class="jumbotron">
        <h1 class="text-center">Full calendar</h1>
    </div>
    <div class="container">
        <div id="calendar"></div>
    </div>
</div>
{{-- day click dialog --}}
<div id="dialog">
    <div id="dialog-body">
        <form id="dayClick" method="POST"  action="{{route('eventStore')}}">
        @csrf
            <div class="form-group">
                <label >Event Title</label>
                <input class="form-control" type="text" name="title" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label >Start Date/Time</label>
                <input id="start" class="form-control" type="text" name="start" placeholder="Start date & time">
            </div>
            <div class="form-group">
                <label >End Date/Time</label>
                <input id="end" class="form-control" type="text" name="end" placeholder="End date & time">
            </div>
            <div class="form-group">
                <label >All Day</label>
                <input value="1" type="checkbox" name="allDay" > All Day
                <input value="0" type="checkbox" name="AllDay" > Partial

            </div>
            <div class="form-group">
                <label >Background Color</label>
                <input class="form-control" type="color" name="color" >
            </div>
            <div class="form-group">
                <label >Text Color</label>
                <input class="form-control" type="color" name="textColor" >
            </div>
            <div class="form-group d-flex justify-content-center align-content-center">

                <button class="btn btn-success" type="submit">Add Event</button>
            </div>
        </form>
    </div>
</div>

{{--day click dialog end --}}

{{--         <script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> --}}
  {{-- jquery 3.3.1 --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  {{-- bootstrap 4.5.0 --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" ></script>
  {{-- moment js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js" ></script>
  {{-- jquery ui --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
  <script src="{{asset('js/fullcalendar.js')}}"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/fr.min.js" integrity="sha512-vz2hAYjYuxwqHQAgHPZvry+DTuwemFT/aBIDmgE0cnmYENu/+t8c3u/nX2Ont6e+3m+W6FEKxN1granjgGfr1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/fr-ca.min.js" ></script>

<script>
    jQuery(document).ready(function($){
        function converet(str){

        const date = new Date(str);
        //YYYY-MM-DD format
        return  date.toISOString().slice(0, 19).replace('T', ' ');
        //console.log(mysqlDate);
        }
        var calendar = $('#calendar').fullCalendar({
            locale: 'fr-ca',
            selectable:true,
            selectHelper:true,
            //aspectRatio:2,
            height:650,
            showNonCurrentDates:false,
            editable:true,
            defaultView:'month',
            yearColumns:3,
            header:{
                left:'prev,next today',
                center:'title',
                right:'year,month,basicWeek,basicDay'
            },
            events:"{{ route('allEvent')}}",
            select:function(start,end){
                $('#start').val(converet(start));
                $('#end').val(converet(end));
                $('#dialog').dialog({
                    title:'Add Event',
                    width:600,
                    height:600,
                    modal:true,
                    show:{effect:'clip',duration:350},
                    hide:{effect:'clip',duration:250},
                })
            },
            dayClick:function(date,event,view){
                $('#start').val(converet(date));
                $('#dialog').dialog({
                    title:'Add Event',
                    width:600,
                    height:600,
                    modal:true,
                    show:{effect:'clip',duration:350},
                    hide:{effect:'clip',duration:250},

                })
            },


            buttonText:{
                today:    'aujourd\'hui',
                month:    'mois',
                week:     'semaine',
                day:      'jour',
                year:     'année'
                }

        })
        // calendar.getOption('locale');
        // calendar.setOption('locale', 'fr');
    });
</script>

    </body>
</html>
