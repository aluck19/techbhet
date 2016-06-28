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
                    <img  title="{{$event->title}}" class="img-responsive" src="/images/{{$event->main_image}}"/>

                </div>

                <div class="event_item" >
                    <h3>Overview</h3>
                    <div id="event_summary">
                        <?php

                        function makeLinks($str) {
                            $reg_exUrl ='@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.\,]*(\?\S+)?)?)*)@';
                            $urls = array();
                            $urlsToReplace = array();
                            if(preg_match_all($reg_exUrl, $str, $urls)) {
                                $numOfMatches = count($urls[0]);
                                $numOfUrlsToReplace = 0;
                                for($i=0; $i<$numOfMatches; $i++) {
                                    $alreadyAdded = false;
                                    $numOfUrlsToReplace = count($urlsToReplace);
                                    for($j=0; $j<$numOfUrlsToReplace; $j++) {
                                        if($urlsToReplace[$j] == $urls[0][$i]) {
                                            $alreadyAdded = true;
                                        }
                                    }
                                    if(!$alreadyAdded) {
                                        array_push($urlsToReplace, $urls[0][$i]);
                                    }
                                }
                                $numOfUrlsToReplace = count($urlsToReplace);
                                for($i=0; $i<$numOfUrlsToReplace; $i++) {
                                    $str = str_replace($urlsToReplace[$i], "<a  target='_blank' href=\"".$urlsToReplace[$i]."\">".$urlsToReplace[$i]."</a> ", $str);
                                }
                                return $str;
                            } else {
                                return $str;
                            }
                        }

                        use App\Event;if($event->description != null)
                                echo nl2br(makeLinks($event->description));
                            else
                                echo "-";
                        ?>
                    </div>
                </div>

                <div class="event_item" >
                    <h3>Organizers</h3>
                    <div id="event_organizers">
                        <b>Organizers Name</b>
                        <p>{{$event->organizer}}</p>
                        <b>Organizers Details</b>
                <?php




                            echo nl2br(makeLinks($event->details_organizer));

                            ////1111111111111

                        //$match_href = '@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.\,]*(\?\S+)?)?)*)@';
//                        $match_hash = '|\B#([\d\w_]+)|i';
//                        $match_plus = '|\B\+([\d\w_]+)|i';
                        //$replace_url = '<a href="$1" target="_blank">$3</a>';
//                        $replace_tag = '<a href="http://url.com/pluslink/$1">$0</a>';

                        //$status_text =  $event->details_organizer;

                       // $status_text = preg_replace($match_href, $replace_url, $status_text);
//                        $status_text = preg_replace($match_hash, $replace_tag, $status_text);
//                        $status_text = preg_replace($match_plus, $replace_tag, $status_text);

                        // echo nl2br($status_text);


//222222222222
//                        $pattern = '@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.\,]*(\?\S+)?)?)*)@';
//
//                        if (preg_match_all($pattern, $event->details_organizer,$matches) != null) {//                            print_r($matches[1]);
//
//
//                            for($var = 0; $var < sizeof($matches[1]);  $var++){
//                                echo '<p><a target="_blank" href="' . $matches[1][$var] . '">'. $matches[1][$var] . '</a></p>';
//                            }
////                            echo '<a href="' . $matches[1][0] . '">'. $matches[1][0] . '</a>';
//                        }else {
//                            echo '<p>'. nl2br($event->details_organizer) . '</p>';
//                        }



                        ?>

                    </div>
                </div>

                {{--<div class="event_item" >--}}
                    {{--<h3>Map</h3>--}}
                    {{--<div id="event_map">--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>

        <div  class="col-md-4">
            <div class="whenWhere" >
                <h3>When and Where</h3>
                <div id="event_dt_time">
                    <b><i class="fa fa-calendar-o" aria-hidden="true"></i> Date</b>
                    <p>
                        {{$event->date}}
                    </p>
                    <b><i class="fa fa-clock-o" aria-hidden="true"></i> Time</b>
                    <p>
                        {{$formatted_time}}
                    </p>
                    <b><i class="fa fa-map-marker" aria-hidden="true"></i> Venue</b>
                    <p>
                        {{$event->location}}
                    </p>
                    <?php

                    if(!empty($event->meetup)){
                        echo '<span class="link"><a  title="Event Link"  style="text-transform: uppercase;font-size: 13px;" target="_blank" id="link_to_event"
                        href="'. $event->meetup . '">Event Link >>></a></span><br/>';
                    }
                    ?>
                    <?php

                    if(!empty($event->fb)){
                        echo '<span class="link"><a  title="Facebook Link"  style="background: #6b6fe0;text-transform: uppercase;font-size: 13px;"
                            target="_blank" id="link_to_event"
                        href="'. $event->fb . '">Facebook Event >>></a></span><br/>';
                    }
                    ?>

                </div>
            </div>


            <div id="customizeSubs">
                <style>
                    div#customizeSubs {
                        background: #83ca25;
                        margin-bottom: 10px;
                        padding: 10px;
                    }
                    div#customizeSubs input {
                        background: #fff;
                        border-radius: 0;
                        padding: 10px;
                        margin: 0 auto;
                        text-transform: uppercase;
                        font-size: 13px;
                        margin-left: 25%;
                        color: #83ca25;
                        border: 2px solid #e2e2e2;
                        border-style: outset;

                    }
                    div#customizeSubs h3 {
                        text-align: center;
                        font-size: 24px;
                        word-spacing: 5px;
                        color: #ffffff;
                    }
                    #customizeSubs p {
                        line-height: 25px;
                        text-align: center;
                        font-size: 16px;
                        padding: 11px;
                        margin: 0;
                        color: #ffffff !important;
                    }

                </style>

                <h3>GET MORE STUFF</h3>

                <p>Subscribe to our mailing list and get event updates right in your email inbox.</p>

                @include('layouts._subscribe')
            </div>



            <div class="whenWhere">
                <h3 style="background: #f3f3f3;color: #54545d;">Share the event!</h3>
                <div id="event_dt_time" style="padding-bottom: 15px;">
                    <div class='oss-widget-interface'></div>
                </div>

                <script type="text/javascript" src="//sharecdn.social9.com/v2/js/opensocialshare.js"></script><script type="text/javascript" src="//sharecdn.social9.com/v2/js/opensocialsharedefaulttheme.js"></script><link rel="stylesheet" type="text/css" href="//sharecdn.social9.com/v2/css/os-share-widget-style.css"/><script type="text/javascript">var shareWidget = new OpenSocialShare();shareWidget.init({isCounterWidgetTheme: 1,isHorizontalCounter: 0,isHorizontalLayout: 1,theme: 'OpenSocialShareDefaultTheme',widgets: { top: ["Facebook Like","Google+ Share","LinkedIn Share","Reddit","Twitter Tweet"]}});shareWidget.injectInterface(".oss-widget-interface");shareWidget.setWidgetTheme(".oss-widget-interface");</script>

            </div>



            <div style="padding: 20px;background: #fff;">
                <h3 style="font-size: 28px;text-transform: uppercase;text-align: center;color: #4f5a62 !important;">
                    Don't see your
                    <span style="color: #7cb736;">event?</span></h3>
                <div>
                <p style="
                        color: #4f5a62 !important;
                        font-size: 16px;
                        line-height: 1.7;
                        text-align: center;
                        font-weight: 300;
                    ">
                    Let others know about your event. List you event for free on TechBhet</p>
                </div>
                <div style="margin-top: 10px;
                            text-align: center;
                        "><a  style="
                       background: #83ca25;
                        padding: 10px;
                        color: #fff;
                        text-transform: uppercase;
                        font-size: 13px;
                        font-weight: bold;
                        word-spacing: 2px;
                        margin: 0 auto;
                        display: inline-block;
                    "href="https://www.facebook.com/messages/techlekh?msg_prefill=message&__mref=message_bubble" title="Let us know"
                    target="_blank"
                    >Let us know</a>
                </div>
            </div>

        </div><!-- end of side bar -->


        @if(!Auth::guest())
            @if((Auth::user()->id == $event->owner_id) || (Auth::user()->id == 1))
                <div class="pull-right event-controls">
                    <a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit</a>



                    {!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}
                    {!! Form::submit('Delete',  $attributes=['class' => 'btn btn-danger deleteGroup']) !!}
                    {!! Form::close() !!}
                </div>

            @endif
        @endif
    </div><!-- row -->
@stop