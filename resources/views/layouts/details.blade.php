<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - TechBhet</title>

    <link rel="icon" type="image/png" href="../../favicon.ico" />

    @include('layouts.styles')

</head>

<body>

<div id="bodyWrapper">

    <nav id="secondar_nav">
        <div class="container">
            <div class="row">
              <a style="color: #000; text-decoration: none" href="http://localhost:8000/"><div class="second_logo col-md-3" >
                    <h2><span style="color:#7CB736;">Tech</span>भेट </h2>
                </div>
              </a>

                {!! Form::open(array('action'=>'EventsController@search', 'method'=>'GET')) !!}
                <div  class="col-md-8" id="secodary_search_outer">
                    <div  id="secondary_search" class="ui  action input">
                        <input type="text" name="key" placeholder="Put search keywords here..."  required="">
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


            </div><!--row -->
        </div><!--container -->
    </nav>

    <div id="nav_spacing"></div>

    <div id="mainContent">

        <div class="container">
            @yield('content')
        </div><!-- container -->
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
        <div  class="container">
            <div class="row">
                <div id="liscene">
                    <p>
                        Copyright &copy; 2015. All Rights Reserved.
                    </p>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </footer>

</div><!-- bodyWrapper -->


@include('layouts.scripts')

</body>
</html>
