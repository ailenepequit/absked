@include('layouts.includes.header')   
        
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
        <li>
            <div class="user-img-div">
                <img src="/img/admin.png" class="img-thumbnail">
                <div class="inner-text">
                    {{ Auth::user()->name }}<br />
                </div>
            </div>
        </li>

        <li><a href={{url('/')}}><i class="fa fa-dashboard "></i>Dashboard</a></li>

        <li><a href={{url('/users')}}><i class="fa fa-users"></i>Users</a></li>

        <li><a href={{url('/subjects')}}><i class="fa fa-book"></i>Subjects</a></li>
        
        <li><a href={{url('/rooms')}}><i class="fa fa-codepen"></i>Rooms</a></li>
        
        <li><a href={{url('/schedules')}}><i class="fa fa-calendar"></i>Schedules</a></li>
    </ul>
    </div>
</nav>


<div id="page-wrapper">
    <div id="page-inner">
        <div id="container">
            @yield('content')
        </div>
    </div>
</div>


