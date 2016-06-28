<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>TechBhet - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

    @include('layouts.styles')

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
    <script src="{{ URL::asset('/js/bootbox.min.js') }}"></script>

    {!!   Feed::link(url('feeds'), 'atom', 'Site Feed', 'en') !!}


</head>

<body>

<div id="bodyWrapper">

    <nav  class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost:8000/"><i style="color: #fff;" class="fa fa-calendar"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="nav navbar-nav" style="border-bottom: 1px solid #ddd;">
                        <li>
                            <a href="http://localhost:8000/">Home</a>
                        </li>
                        <li>
                            <a target="_blank"  href="http://techlekh.com/about/">About</a>
                        </li>
                        <li>
                            <a target="_blank" href="http://techlekh.com/contact/">Contact</a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="http://techlekh.com/">TechLekh</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">TAB</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">TAB</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">TAB</a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div><!--row -->
        </div><!--container -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="header_info">
                    <a title="Techभेट" style="text-decoration: none" href="http://localhost:8000/"> <h2>Tech <span style="color:black;"> भेट </span></h2> </a>

                    <h3>Attend the hottest tech events in Nepal</h3>
                    <br/>
                    <br/>
                    <p>
                        Many startup and tech events happen in Nepal.
                    </p>
                    <p>
                        Discover events happening and connect with local entrepreneurs.
                    </p>
                </div>

                @include('layouts._subscribe')

            </div><!--row -->
        </div><!--container -->
    </header>

        @yield('cat_labels')

    <div id="mainContent">

{{--<nav class="navbar navbar-inverse">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="#">TechBhet</a>--}}
        {{--</div>--}}
        {{--<div id="navbar" class="collapse navbar-collapse">--}}
            {{--<ul class="nav navbar-nav">--}}

                {{--<li class="active"><a href="/">Home</a></li>--}}
                {{--<li><a href="/">Home</a></li>--}}
                {{--<li><a href="/events/create">Add an event</a></li>--}}
                {{--<li><a href="#about">About</a></li>--}}
                {{--<li><a href="#contact">Contact</a></li>--}}
            {{--</ul>--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--@if(Auth::guest())--}}
                    {{--<li><a href="/auth/login">Login</a></li>--}}
                    {{--<li><a href="/auth/register">Register</a></li>--}}
                {{--@else--}}
                    {{--<li><a href="/auth/logout">Logout</a></li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div><!--/.nav-collapse -->--}}
    {{--</div>--}}
{{--</nav>--}}

<div class="container">
    {!! Form::open(array('action'=>'EventsController@search', 'class'=> 'row', 'method'=>'GET')) !!}

    <div  id="main_search_outer" class="row">
        <div  id="main_search" class="ui fluid action input">
            <input type="text" name="key" placeholder="Put search keywords here..." required="">
            <select name="cat" class="ui search dropdown">
                <option value="">Category</option>
                @foreach($categories as $category)
                    <option class="item" value="{{$category->id}}" name="cat">{{$category->name}}</option>
                @endforeach
            </select>
            <button class="ui teal right labeled icon button">
                <i class="search icon"></i>
                Search
            </button>
        </div>
    </div>
    {!! Form::close() !!}
            {{--<div class="list-group">--}}
                {{--@foreach($categories as $category)--}}
                    {{--<a href="/categories/{{$category->id}}" class="list-group-item">{{$category->name}}</a>--}}
                {{--@endforeach--}}
            {{--</div>--}}
    <div class="row">
        @yield('content')


        @if(Session::has('message'))
            <div class='alert alert-info'>
                {!! Session::get('message') !!}
            </div>
        @endif
        {{--@if($errors)--}}
        @foreach($errors->all() as $error)
            <div class='alert alert-danger'>
                {{$error}}
            </div>
        @endforeach

    </div><!-- row -->



</div><!-- /.container -->
    </div><!-- mainContent -->

    <footer style="  width: 100% !important;
			height: 50px !important;
			position: absolute !important;
			bottom: 0 !important;
			left: 0 !important;
			border-top: 2px solid #A4C863;
			background: #7CB736;
			color: #FFFDFD;
			font-weight: bold;">
        <div class="container">
            <div class="row">
                <div id="liscene">
                    <p>
                        Copyright &copy; 2016. All Rights Reserved.
                    </p>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </footer>

</div><!-- bodyWrapper -->

@include('layouts.scripts')

</body>
</html>