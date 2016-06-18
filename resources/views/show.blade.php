@extends('layouts.details')

@section('title', $event->title)

@section('content')
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">--}}
            {{--<h3 class="panel-title">{{$event->title}}</h3>--}}

        {{--</div>--}}
        {{--<div class="panel-body">--}}
            {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<img src="/images/{{$event->main_image}}">--}}
                    {{--</div>--}}
                        {{--<div class="col-md-8">--}}
                            {{--<h3>Event Description</h3>--}}
                            {{--<p>{{$event->description}}</p>--}}
                            {{--<h3>Event Details</h3>--}}
                            {{--<ul class="list-group">--}}
                                {{--<li class="list-group-item"><strong>Date: </strong> {{$event->date}}</li>--}}
                                {{--<li class="list-group-item"><strong>Time: </strong>{{$formatted_time}}</li>--}}
                                {{--<li class="list-group-item"><strong>Location: </strong> {{$event->location}}</li>--}}
                                {{--@if{{$event->meetup}}--}}
                                {{--<li class="list-group-item"><strong>Meetup Link: </strong><a href="{{$event->meetup}}"> {{$event->meetup}}</a></li>--}}
                                {{--@endif--}}
                                {{--<li class="list-group-item"><strong>Facebook Event Link: </strong><a href="{{$event->fb}}"> {{$event->fb}}</a></li>--}}
                            {{--</ul>--}}
                            {{--<h3>Organizer Details</h3>--}}
                            {{--<ul class="list-group">--}}
                                {{--<li class="list-group-item"><strong>Organizer: </strong> {{$event->organizer}}</li>--}}
                                {{--<li class="list-group-item"><strong>Details: </strong> {{$event->details_organizer}}</li>--}}
                            {{--</ul>--}}
                            {{--<h3>Tags:</h3>--}}
                            {{--<li class="list-group-item"><a href="{{$event->tags}}"> {{$event->tags}}</a></li>--}}
                            {{--<br>--}}
                    {{--</div>--}}
            {{--</div>--}}
            {{--@if(!Auth::guest())--}}
                {{--@if((Auth::user()->id == $event->owner_id) || (Auth::user()->id == 1))--}}
            {{--<div class="pull-right event-controls">--}}
                {{--<a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a>--}}
                {{--{!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}--}}
                {{--{!! Form::submit('Delete', $attributes=['class' => 'btn btn-danger']); !!}--}}
                {{--{!! Form::close() !!}--}}
            {{--</div>--}}

                {{--@endif--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    <h2 id="event_title">{{$event->title}} </h2>
    <div  id="event" class="row">

        <div class="col-md-8">
            <div id="primary_event_details">
                <div class="event_image">
                    <img  class="img-responsive" src="/images/{{$event->main_image}}"/>

                </div>

                <div class="event_item" >
                    <h3>Overview</h3>
                    <div id="event_summary">
                        {{$event->description}}
                    </div>
                </div>

                <div class="event_item" >
                    <h3>Organizers</h3>
                    <div id="event_organizers">
                        <b>Organizers Name</b>
                        <p>{{$event->organizer}}</p>
                        <b>Organizers Details</b>
                        <p>{{$event->details_organizer}}</p>
                    </div>
                </div>

                <div class="event_item" >
                    <h3>Map</h3>
                    <div id="event_map">
                        Map here
                    </div>
                </div>
            </div>
        </div>

        <div  class="col-md-4">
            <div class="whenWhere" >
                <h3>When and Where</h3>
                <div id="event_dt_time">
                    <b>Date</b>
                    <p>
                        {{$event->date}}
                    </p>
                    <b>Time</b>
                    <p>
                        {{$formatted_time}}
                    </p>
                    <b>Venue</b>
                    <p>
                        {{$event->location}}
                    </p>
                    <span class="link"><a id="link_to_event" href="{{$event->meetup}}">Meetup Link ></a></span>
                    <br/>
                    <span class="link"><a id="link_to_event" href="{{$event->fb}}">Facebook Link ></a></span>
                </div>
            </div>

            <div id="upcoming_events">
                <h3>UPCOMING EVENTS</h3>

                <div style="position:relative;height:190px;overflow:hidden;margin-bottom: 10px;">
                    <img style="position: absolute; width: 100%; display: block;" class="img-responsive" src="https://e27.co/img/events/1065/BANSEA%20Breakfast-360x180.png" data-lazy-loaded="true">
                    <a href="https://e27.co/event/bansea-breakfast-8" title="BANSEA Breakfast" class="pod-event-wrap">
                        <div class="pod-showcase-img">
                            <div class="event-date-time">
                                <span class="block">Jul</span>
                                <span class="txt-25">05</span>
                            </div>
                            <div class="pod-event-title">
                                <h2>BANSEA Breakfast</h2>
                                <small>Singapore</small>
                                <small class="pull-right">1-Day event</small>
                            </div>
                        </div> </a>
                </div>

                <div style="position:relative;height:190px;overflow:hidden;margin-bottom: 10px;">
                    <img style="position: absolute; width: 100%; display: block;" class="img-responsive" src="https://e27.co/img/events/1065/BANSEA%20Breakfast-360x180.png" data-lazy-loaded="true">
                    <a href="https://e27.co/event/bansea-breakfast-8" title="BANSEA Breakfast" class="pod-event-wrap">
                        <div class="pod-showcase-img">
                            <div class="event-date-time">
                                <span class="block">Jul</span>
                                <span class="txt-25">05</span>
                            </div>
                            <div class="pod-event-title">
                                <h2>BANSEA Breakfast</h2>
                                <small>Singapore</small>
                                <small class="pull-right">1-Day event</small>
                            </div>
                        </div> </a>
                </div>

            </div>
        </div>

        @if(!Auth::guest())
            @if((Auth::user()->id == $event->owner_id) || (Auth::user()->id == 1))
                <div class="pull-right event-controls">
                    <a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}
                    {!! Form::submit('Delete', $attributes=['class' => 'btn btn-danger'])!!}
                    {!! Form::close() !!}
                </div>

            @endif
        @endif
    </div><!-- row -->
@stop