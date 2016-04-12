<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.includes.head')
</head>
<body id="app-layout">
    <div class="wrapper">
        <nav class="navbar navbar-default navbar-cls-top" style="margin-bottom: 50px" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/home') }}">ABSkeD</a>
            </div>

            <div class="header-right">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>

    @yield('content')
    @include('layouts.includes.scripts')
</body>
</html>
