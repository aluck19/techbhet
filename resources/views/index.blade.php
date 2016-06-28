@extends('layouts.main')

@section('title', 'Home')

@section('cat_labels')
    <div class="ui fluid labeled icon menu" style="
			margin: 0;
			border-radius: 0;
			border-bottom: 2px solid #61B201;
			">


        <a href="http://localhost:8000/categories/1" class="item" style="border-left: 1px solid #ddd;	border-radius: 0;">
            <img src="../img/meetup_icon.png" style="width: 25px;height: 25px; margin-bottom: 5px;">
            Meetups
        </a>
        <a href="http://localhost:8000/categories/2" class="item">
            <img src="../img/hackathon_icon.png" style="width: 25px;height: 25px; margin-bottom: 5px;">
            Hackathons
        </a>
        <a href="http://localhost:8000/categories/3" class="item">
            <img src="../img/workshop_icon.png" style="width: 25px;height: 25px; margin-bottom: 5px;">
            Worskhops
        </a>
        <a href="http://localhost:8000/categories/4" class="item">
            <img src="../img/competition_icon.png" style="width: 25px;height: 25px; margin-bottom: 5px;">
            Competitions
        </a>
        <a href="http://localhost:8000/categories/5" class="item">
            <img src="../img/talk_icon.png" style="width: 25px;height: 25px; margin-bottom: 5px;">
            Talks
        </a>
        <a href="http://localhost:8000/categories/6" class="item">
            <img src="../img/other_icon.png" style="width: 25px;height: 25px; margin-bottom: 5px;">
            Others
        </a>

    </div>
@stop

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
            UPCOMING EVENTS
        </p>
    </div>

    <?php if($events == null || empty($events) || !isset($events)){
        echo '<p  style="
                                text-align: center;
                                font-size: 17px;
                                color: #8cc83b;
                                font-weight: bold;
                                display: inline-block;
                                margin: 0 auto;
                                width: 100%;
                                background: white;
                                padding: 10px;
                                border: 1px solid;
                            ">No events found in this category.<p>';
    }?>

        <div class="row">



            @foreach($events as $event)
            <div class="col-md-4 col-sm-6 col-xs-12 mbt-m ">
                <div style="position:relative; height:250px; overflow:hidden">
                    <img style="position: absolute; width: 100%; display: block;" class="img-responsive" src="/images/{{$event->main_image}}" data-lazy-loaded="true">
                    <a href="/events/{{$event->id}}" title="{{$event->title}}" class="pod-event-wrap">
                        <div class="pod-showcase-img">
                            <div class="event-date-time">
                                <span class="block">
                                      <?php
                                    $created =  new \Carbon\Carbon($event->date);
                                    $monthNum  = $created->month;
                                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                    $monthName = $dateObj->format('F');
                                    echo substr($monthName, 0,3);
                                    ?>
                                </span>
                                <span class="txt-25">
                                    <?php
                                    $created =  new \Carbon\Carbon($event->date);
                                    echo $created->day;
                                    ?></span>
                            </div>
                            <div class="on-going">
                                             <?php
                                             $category = $event->category_id;

                                        $fn = function($category) {
                                                   switch ($category) {
                                                         case 1:
                                                             return "Meetup";
                                                             break;
                                                         case 2:
                                                             return "Hackathon";
                                                             break;
                                                         case 3:
                                                             return "Workshop";
                                                             break;
                                                         case 4:
                                                             return "Competition";
                                                             break;
                                                         case 5:
                                                             return "Talk";
                                                             break;
                                                         case 6:
                                                             return "Other";
                                                             break;
                                                         default:
                                                             return "Uncategoried";
                                                    }
                                                };
                                            $str = $fn($event->category_id);
                                            echo '<small class="block">' . $str . '</small>';

                                        ?>


                            </div>
                            <div class="pod-event-title">
                                <h2>
                               <?php  echo substr($event->title,0, 35) . "..." ; ?>
                                </h2>
                                <small>
                                    <?php
                                    if(strlen($event->location) > 15){
                                        echo substr($event->location,0, 15) . "..." ;
                                    }else {
                                        echo $event->location;
                                    }
                                    ?>

                                </small>

                                <small class="pull-right">
                                    <?php

                                        $timestamp = $event->date;
                                        $created =  \Carbon\Carbon::createFromFormat('Y-m-d', $timestamp)->timezone('Asia/Kathmandu');
                                        $now = \Carbon\Carbon::now();

                                        $difference = ($created->diff($now)->days < 1)
                                                ? 'today'
                                                : $created->diffForHumans($now);

                                           echo $difference;
                                    ?>
                                </small>
                            </div>
                        </div> </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- tile -->


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