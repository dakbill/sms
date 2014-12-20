@extends('layout/base')



@section('content')

    <!-- topbar starts -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse"
                   data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <input class="btn btn-inverse btn-large " type="button"
                       value="Today is : {{date('d-M-Y')}}">
                <input class="btn btn-large btn-success" type="button"
                       value="{{ucfirst($user->role) }}">


                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i><span
                            class="hidden-phone">Welcome Back : {{$user->name}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{URL::route('teacher#profile')}}">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{URL::route('home#sign-out')}}">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar ends -->

<div class="container-fluid">
    <div class="row-fluid">

        <!-- left menu starts -->
        <div class="span2 main-menu-span">
            <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="nav-header hidden-tablet">Activities</li>
                    
                    <li><a class="ajax-link"
                           href="{{URL::route('teacher#add-results')}}"><i
                                class="icon-eye-open"></i><span class="hidden-tablet"> Add Test Results</span></a></li>
                    <li><a class="ajax-link"
                           href="{{URL::route('teacher#time-table')}}"><i
                                class="icon-eye-open"></i><span class="hidden-tablet"> View Time Table</span></a></li>                                
                    <li><a class="ajax-link"
                           href="{{URL::route('teacher#notifications')}}"><i
                                class="icon-envelope"></i><span class="hidden-tablet"> Send Notice</span></a></li>                                
                    <li><a class="ajax-link"
                           href="{{URL::route('teacher#calendar')}}"><i
                                class="icon-calendar"></i><span class="hidden-tablet"> Academic Calendar</span></a></li>
                    <li><a class="ajax-link"
                           href="{{URL::route('teacher#incidents')}}"><i
                                class="icon-warning-sign"></i><span class="hidden-tablet"> Incident Manager</span></a>
                    </li>
                    <li><a class="ajax-link"
                           href="{{URL::route('teacher#reports')}}"><i
                                class="icon-picture"></i><span class="hidden-tablet"> Statistics</span></a></li>
                </ul>

            </div>
            <!--/.well -->
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="span10">
            <!-- content starts -->

            @yield('dashboard-content')

        </div>
     </div>
     </div>
@endsection