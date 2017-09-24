
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
      p.chosepg{
        width:100%;
        font-size: 24px;
        font-family: Arial;
        float: left;
        text-decoration: none;
        color:#888888;
        line-height: 100%;
      }

      img.logo{
        position: relative;
      }

      a.loginregister{
        position: absolute;
        margin-top: 10px;
        font-size: 16px;
        font-family: arial;
      }

      a.email{
        position: absolute;
        top:5px;
      }

      ul.auth{
        position:absolute;
        top:80px;
      }
      .navigation{
        height:75px;
        background-color: #78bcff;
        border-bottom: 2px solid #bcbcbc;
      }
      .spf{
        width: 60%;
        margin-left: 20%;
      }
      .container1{
        height: 75px;
        width: 80%;
        margin-left: 10%;
      }
      .pages{
        width:33%;
        background-color: #ffffff;
        float:left;
        text-align: center;
        border-right: #eeeeee solid 1px;
        border-bottom: #eeeeee solid 1px;
      }
      body{
        background:url(img/JobHBG1.png) no-repeat;
        background-attachment: fixed;
        background-size: 100%;
      }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navigation">
            <div class="container1">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{URL::to('/')}}"><img class="logo" src={{asset('img/JobHLogo.png')}} alt="Logo" style="width:240px;height:73px;"></a>
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
                            <li><a style="color:#fff" class="loginregister" href="{{ route('admin_login') }}">Administrator Login</a></li>
                            <li><a style="color:#fff" class="loginregister" href="{{ route('login') }}">Job Seeker Login</a></li>
                            <li><a style="color:#fff" class="loginregister" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a style="color:#ffffff" class="auth loginregister" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
            <center class="spf">
              <a href="{{ route('search') }}"class="pages"><img src={{asset('img/search.png')}} style="width:20px;height:20px;margin-top:12px;"><br/><p class="chosepg">Search</p></a>
              <a href="{{ route('profile') }}"class="pages"><img src={{asset('img/user.png')}} style="width:20px;height:20px;margin-top:12px;"><br/><p class="chosepg">Profile</p></a>
              <a href="{{ route('faq') }}"class="pages"><img src={{asset('img/faq.png')}} style="width:20px;height:20px;margin-top:12px;"><br/><p class="chosepg">FAQs</p></a>
            </center>
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
            <center class="spf">
              <a href="{{ route('search') }}"class="pages"><img src={{asset('img/search.png')}} style="width:20px;height:20px;margin-top:12px;"><br/><p class="chosepg">Search</p></a>
              <a href="{{ route('profile') }}"class="pages"><img src={{asset('img/user.png')}} style="width:20px;height:20px;margin-top:12px;"><br/><p class="chosepg">Profile</p></a>
              <a href="{{ route('faq') }}"class="pages"><img src={{asset('img/faq.png')}} style="width:20px;height:20px;margin-top:12px;"><br/><p class="chosepg">FAQs</p></a>
            </center>
        </nav>



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


@endmobile
