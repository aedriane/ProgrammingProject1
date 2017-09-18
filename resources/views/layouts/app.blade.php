
@desktop

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
    h2{
      display: inline;
      margin-left: 2.5em;
      text-decoration: none;
    }

    img.logo{
      position: relative;
      top:17px;
      max-width: 100%;
      height: auto;
    }

    a.loginregister{
      position: absolute;
      top: 30px;
    }

    a.email{
      position: absolute;
      top:30px;
    }

    ul.auth{
      position:absolute;
      top:80px;
    }




    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{URL::to('/')}}"><img class="logo" src={{asset('img/JobHLogo.png')}} alt="Logo" style="width:257px;height:86px;"></a>


                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="loginregister" href="{{ route('login') }}">Login</a></li>
                            <li><a class="loginregister" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a class="email" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu auth" role="menu">
                                    <li>
                                      <a href="{{ route('profile') }}">Profile</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <center><a href="{{ route('search') }}"><h2>Search</h2></a>
                    <a href="{{ route('profile') }}"><h2>Profile</h2></a>
                    <a href="{{ route('faq') }}"><h2>FAQs</h2></a>
            </centre>
        </nav>



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

@enddesktop

@mobile

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">

    .nav-bar a{
      top:20px;
      position:relative;
      display: inline;
      margin-left: 2.5em;
      text-decoration: none;
      font-size: 17px;
      right:24px;
    }

    img.logo{
      position: relative;
      top:12px;
      left: 10px;
      width: 140px;
      height:50px;
    }

    a.auth{
      position: absolute;
    }

    ul.auth{
      position:absolute;
      top:80px;
    }

    a.new{
      text-align: center;
      position:relative;
      top:13px;
    }


    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default" style="padding-bottom:35px">
            <div class="container">
                <div class="navbar-header"style="padding-bottom:18px">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="top:10px">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{URL::to('/')}}"><img class="logo" src={{asset('img/JobHLogo.png')}} alt="Logo"></a>


                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="padding-bottom:5px; text-align:center">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a  href="{{ route('login') }}">Login</a></li>
                            <li><a  href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a class="auth" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu auth" role="menu">
                                    <li>
                                      <a class="new"href="{{ route('profile') }}">Profile</a>
                                        <a class="new"href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="nav-bar">
            <center><a href="{{ route('search') }}">Search</a>
                    <a href="{{ route('profile') }}">Profile</a>
                    <a href="{{ route('faq') }}">FAQs</a>
            </centre>
          </div>
        </nav>



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


@endmobile
