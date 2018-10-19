@extends('dashboard.layouts')

@push('css')
    <link href='{{ url('/') }}/newfullcalendar/fullcalendar.min.css' rel='stylesheet' />
    <link href='{{ url('/') }}/newfullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href='{{ url('/') }}/newfullcalendar/scheduler.min.css' rel='stylesheet' />
    <style>
        #calendar {
            max-width: 1024px;
            margin-top: 40px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ffffff;
        }
    </style>
    <title>Booking Calendar</title>

@endpush

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> {{ __('Home') }}</a></li>
        <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="active">{{ __('Booking Calendar') }}</li>
    </ol>
@endsection


@section('content')
<section>
    <div class="row">
        <div class="col-md-12">
            <div id='calendar'></div>
        </div>
    </div>
</section>
    @endsection


@push('js')

    <script src="{{ url('/') }}/newfullcalendar/moment.min.js"></script>
    <script src="{{ url('/') }}/newfullcalendar/fullcalendar.min.js"></script>
    <script src="{{ url('/') }}/newfullcalendar/scheduler.min.js"></script>



    <script>
        $(function() { // document ready
            $('#calendar').fullCalendar({
                schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
                now: new Date(),
                editable: false, // enable draggable events
                aspectRatio: 1.8,
                scrollTime: '08:00', // undo default 6am scrollTime
                header: {
                    left: 'today prev,next',
                    center: 'title',
                    right: 'timelineDay,timelineThreeDays,agendaWeek,month,listWeek'
                },
                defaultView: 'timelineDay',
                resourceLabelText: 'Rooms',
                slotLabelFormat: ['H:mm'],
                resources: '{!! route('fullcalendar.roomall') !!}',
                events: '{!! route('fullcalendar.bookingall') !!}',
                timeFormat: 'H(:mm)',

                eventMouseover: function(calEvent, jsEvent) {
                    var tooltip = '<div class="tooltipevent" style="padding-left: 2px;border-radius: 5px 5px 5px 5px;;width:180px;height:120px;background:darkorange;position:absolute;z-index:10001;">' + calEvent.name + '<br />' + calEvent.title
                                    +   '<br />Sede ' + calEvent.location
                                    +   '<br /> dal ' + calEvent.start.format('DD-MM-YYYY - HH:mm')
                                    +   '<br /> al ' + calEvent.end.format('DD-MM-YYYY - HH:mm')
                                    +   '<br />&euro; ' + calEvent.price + ',00'
                                    +    '</div>';
                    $("body").append(tooltip);
                    $(this).mouseover(function(e) {
                        $(this).css('z-index', 10000);
                        $('.tooltipevent').fadeIn('500');
                        $('.tooltipevent').fadeTo('10', 1.9);
                    }).mousemove(function(e) {
                        $('.tooltipevent').css('top', e.pageY + 10);
                        $('.tooltipevent').css('left', e.pageX + 20);
                    });
                },

                eventMouseout: function(calEvent, jsEvent) {
                    $(this).css('z-index', 8);
                    $('.tooltipevent').remove();
                }
            });


        });

    </script>

@endpush






