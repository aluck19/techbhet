@extends('layouts.main')

@section('title', 'Home')

@section('content')
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">--}}
            {{--<h3 class="panel-title">Latest Events</h3>--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
          {{--<div class="row">--}}
              {{--@foreach($events as $event)--}}
                  {{--<div class="col-md-4">--}}
                      {{--<img src="/images/{{$event->main_image}}">--}}
                      {{--<h4><a href="/events/{{$event->id}}">{{$event->title}}</a></h4>--}}
                      {{--<h5>{{$event->location}}</h5>--}}
                      {{--<h5>{{$event->time}}</h5>--}}
                      {{--<p>{{$event->description}}</p>--}}
                  {{--</div>--}}
              {{--@endforeach--}}
          {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--@if($events)--}}
        {{--{!! $events->appends(Request::except('page'))->links() !!}--}}
    {{--@endif--}}

    <div class="col-md-12">
        <p class="secondary_title">
            <span></span> Tech Events here...
        </p>
    </div>


    @foreach($events as $event)
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 mbt-m ">
                <div style="position:relative; height:190px; overflow:hidden">
                    <img style="position: absolute; width: 100%; display: block;" class="img-responsive" src="/images/{{$event->main_image}}" data-lazy-loaded="true">
                    <a href="/events/{{$event->id}}" title="BANSEA Breakfast" class="pod-event-wrap">
                        <div class="pod-showcase-img">
                            <div class="event-date-time">
                                <span class="block">Jul</span>
                                <span class="txt-25">05</span>
                            </div>
                            <div class="pod-event-title">
                                <h2>{{$event->title}}</h2>
                                <small>{{$event->location}}</small>
                                <small class="pull-right">1-Day event</small>
                            </div>
                        </div> </a>
                </div>
            </div>
        </div>

        <!-- tile -->
    @endforeach

    <div class="row" style="margin: 0;text-align: center;">
        {{--<div class="ui pagination menu ">--}}
        {{--<a class="active item"> 1 </a>--}}
        {{--<div class="disabled item">--}}
        {{--...--}}
        {{--</div>--}}
        {{--<a class="item"> 10 </a>--}}
        {{--<a class="item"> 11 </a>--}}
        {{--<a class="item"> 12 </a>--}}
        {{--</div>--}}
        {{--@yield('pagination')--}}
        @if($events)
            {!! $events->appends(Request::except('page'))->links() !!}
        @endif

    </div>
@stop