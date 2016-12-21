<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <style type="text/css">
        .nav.navbar-nav li a .navbar-collapse{
            background-color: #2196f3;
     }

     .nav.navbar-nav a:hover .dropdown-toggle .dropdown{
       color: #1976d2;
   }
</style>
<header> 
    @yield('head')
    <nav class="navbar navbar-default" style="background-color: #2196f3; font-color: white">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile_collapsed_navbar" aria-expanded="false">
                    <span class="sr-only" style="color: white">Toggle navigation</span>
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar" style="background-color: white"></span>
                    <span class="icon-bar" style="background-color: white"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education" style="color: white" aria-hidden="true"></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="mobile_collapsed_navbar">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}" style="color: white">Home</a></li>
                    @if (Auth::user()->role == 1)
                    <li><a href="{{route('viewAllApp')}}" style="color: white">Applications</a></li>
                    <li><a href="{{route('newSchool')}}" style="color: white">Schools</a></li>
                    @else
                    <li><a href="{{route('list')}}" style="color: white">Applications</a></li>
                    @endif

                    <li><a href="{{route('addMarkingScheme')}}" style="color: white">Marking Schemes</a></li>
                    @if (Auth::user()->role == 1)
                    <li>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Past Student<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('newPastPupilRecord')}}" style="color: grey">Record</a></li>
                            <li role="separator" class="divider" style="color: grey"></li>
                            <li><a href="{{route('newPastPupil')}}" style="color: grey">Past Pupil</a></li>
                        </ul>
                    </li>
                    </ul>
                </ul>
                @endif
                </ul>
                

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" style="color: grey">Settings</a></li>
                            <li role="separator" class="divider" style="color: grey"></li>
                            <li><a href="{{route('logout')}}" style="color: grey">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>