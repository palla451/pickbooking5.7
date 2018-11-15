@extends('dashboard.layouts')

<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

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
        <!-- Button trigger modal -->
        <div class="col-md-12">
            <div id="calendar"></div>


            <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Booking</h4>
                        </div>
                        <div class="modal-body">
                            <form name="save-event" method="post">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <input type="text" name="title" id="title" class="form-control col-xs-3" />
                                </div>
                                <div class="form-group">
                                    <label>Event start</label>
                                    <input type="text" name="evtStart" id="evtStart" class="form-control col-xs-3" />
                                </div>
                                <div class="form-group">
                                    <label>Event end</label>
                                    <input type="text" name="evtEnd" id="evtEnd" class="form-control col-xs-3" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="save btn btn-primary">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
</section>
    @endsection


@push('js')
    <script src="{{ url('/') }}/newfullcalendar/moment.min.js"></script>
    <script src="{{ url('/') }}/newfullcalendar/fullcalendar.min.js"></script>
    <script src="{{ url('/') }}/newfullcalendar/scheduler.min.js"></script>

   <!-- <script>

        $(function() { // document ready
            $('#calendar').fullCalendar({
                schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
                now: new Date(),
                editable: true, // enable draggable events
                droppable : true,
                selectable: true,
                aspectRatio: 1.8,
                scrollTime: '08:00', // undo default 6am scrollTime
                header: {
                    center: 'title',
                    left: 'today prev,next,addEventButton',
                    right: 'timelineDay,timelineThreeDays,agendaWeek,month,listWeek'
                },

                // seleionare la risorsa dal calendario
                dayClick: function(date, jsEvent, view, resource) {
                    alert('clicked ' + date.format() + ' on resource ' + resource.id);
                    console.log(jsEvent);
                },
                select: function(startDate, endDate, jsEvent, view, resource) {
                    alert('selected ' + startDate.format() + ' to ' + endDate.format() + ' on resource ' + resource.id);
                    console.log(jsEvent);
                },

                defaultView: 'timelineDay',
                resourceLabelText: 'Rooms',
                slotLabelFormat: ['H:mm'],
                resources: '{!! route('fullcalendar.roomall') !!}',
                events: '{!! route('fullcalendar.bookingall') !!}',
                timeFormat: 'H(:mm)',

                eventMouseover: function(calEvent, jsEvent) {
                    var tooltip = '<div class="tooltipevent" style="padding-left: 2px;border-radius: 5px 5px 5px 5px;;width:180px;height:140px;background:darkorange;position:absolute;z-index:10001;">' + calEvent.name + '<br />' + calEvent.title
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

    </script> -->

<script>
        $('#calendar').fullCalendar({
            schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
            header: {
                center: 'title',
                left: 'today prev,next,addEventButton',
                right: 'timelineDay,timelineThreeDays,agendaWeek,month,listWeek'
            },
            // now: new Date(),
            editable: true,
            defaultView: 'timelineDay',
            resourceLabelText: 'Rooms',
            slotLabelFormat: ['H:mm'],
            defaultTimedEventDuration : "01:00",
            selectHelper: true,
            snapDuration: '00:30:00',
            selectable: true,
            aspectRatio: 1.8,
            scrollTime: '08:00', // undo default 6am scrollTime
            resources: '{!! route('fullcalendar.roomall') !!}',
            events: '{!! route('fullcalendar.bookingall') !!}',
            select: function( start, end, jsEvent, view, resourceId, event) {

                $('#event-modal').find('input[name=title]').val('');
                // set values in inputs
                $('#event-modal').find('input[name=evtStart]').val(
                        start.format('YYYY-MM-DD HH:mm:ss')
                );
                $('#event-modal').find('input[name=evtEnd]').val(
                        end.format('YYYY-MM-DD HH:mm:ss')
                );
                // show modal dialog
                $('#event-modal').modal('show');
                /*
                 bind event submit. Will perform a ajax call in order to save the event to the database.
                 When save is successful, close modal dialog and refresh fullcalendar.
                 */

                $("#event-modal .save").off('click').on('click', function(e) {

                        var id = resourceId['id'];
                        var roomName = resourceId['title'];
                        var title = $('#title').val();
                        var start = $('#evtStart').val();
                        var end = $('#evtEnd').val();
                        $('#event-modal').modal('hide');

                        $.ajax({
                            url: '{{ route('events.save') }}',
                            data: $("#event-modal").serialize(),
                            type: 'post',
                            dataType: 'json',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'title': title,
                                'start': start,
                                'end': end,
                                'roomId': id,
                                'roomName': roomName
                            },
                            success: function(response) {
                                console.log(response);
                              //  location.reload();
                                $("#calendar").fullCalendar( 'refetchEvents');
                            }
                        });
                });
            },

            eventMouseover: function(calEvent, jsEvent) {
                var tooltip = '<div class="tooltipevent" style="padding-left: 2px;border-radius: 5px 5px 5px 5px;;width:180px;height:140px;background:darkorange;position:absolute;z-index:10001;">' + calEvent.name + '<br />' + calEvent.title
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


</script>

@endpush






