@php($logged_in_user = loggedInUser())
<!-- Main Header -->

<header class="main-header">
    <!-- Logo --> 
    <a href="#" class="logo">
        <span class="logo-mini"><img src="{{ asset ("/bower_components/admin-lte/images/logo2.png") }}"/></span>
          <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="{{ asset ("/bower_components/admin-lte/images/logo.png") }}" /></span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!--<li class="dropdown messages-menu">-->
                    <!-- Menu toggle button -->
                <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--        <i class="fa fa-envelope-o"></i>-->
                <!--        <span class="label label-success">4</span>-->
                <!--    </a>-->
                   
                <!--</li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <!--<li class="dropdown notifications-menu">-->
                    <!-- Menu toggle button -->
                <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--        <i class="fa fa-bell-o"></i>-->
                <!--        <span class="label label-warning">10</span>-->
                <!--    </a>-->
                <!--    <ul class="dropdown-menu">-->
                <!--        <li class="header">You have 10 notifications</li>-->
                <!--        <li>-->
                            <!-- Inner Menu: contains the notifications -->
                <!--            <ul class="menu">-->
                <!--                <li><!-- start notification -->
                <!--                    <a href="#">-->
                <!--                        <i class="fa fa-users text-aqua"></i> 5 new members joined today-->
                <!--                    </a>-->
                <!--                </li><!-- end notification -->
                <!--            </ul>-->
                <!--        </li>-->
                <!--        <li class="footer"><a href="#">View all</a></li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!-- Tasks Menu -->
                <!--<li class="dropdown tasks-menu">-->
                    <!-- Menu Toggle Button -->
                <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--        <i class="fa fa-flag-o"></i>-->
                <!--        <span class="label label-danger">9</span>-->
                <!--    </a>-->
                <!--    <ul class="dropdown-menu">-->
                <!--        <li class="header">You have 9 tasks</li>-->
                <!--        <li>-->
                            <!-- Inner menu: contains the tasks -->
                <!--            <ul class="menu">-->
                <!--                <li><!-- Task item -->
                <!--                    <a href="#">-->
                                        <!-- Task title and progress text -->
                <!--                        <h3>-->
                <!--                            Design some buttons-->
                <!--                            <small class="pull-right">20%</small>-->
                <!--                        </h3>-->
                                        <!-- The progress bar -->
                <!--                        <div class="progress xs">-->
                                            <!-- Change the css width attribute to simulate progress -->
                <!--                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                <!--                                <span class="sr-only">20% Complete</span>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </a>-->
                <!--                </li><!-- end task item -->
                <!--            </ul>-->
                <!--        </li>-->
                <!--        <li class="footer">-->
                <!--            <a href="#">View all tasks</a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img @if($logged_in_user->user_image) src="{{$logged_in_user->user_image }}" @else src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" @endif class="user-image" alt=""/>
                        

                        <span class="hidden-xs">Hello, @if($logged_in_user->detail->name) {{ $logged_in_user->detail->name }} @else {{ $logged_in_user->detail->first_name }} @endif</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                             <img @if($logged_in_user->user_image) src="{{$logged_in_user->user_image }}" @else src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" @endif class="img-circle" alt=""/>
                            <!--<img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="" />-->
                            <p>
                                <small>Member since {{ $logged_in_user->detail->created_at->format('m-d-Y') }}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('facility.forgetpasseord')}}" class="btn btn-default btn-flat">Update Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ action('SuperadminController@Logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--Loader Image Code-->
    <div id="floatingBarsG" style=" pointer-events: auto; display: none; position: none; width: 100%;height: 100%; align-items: center; margin-left: 48%;margin-top: 24%;">
        <img src="<?php echo asset('/'); ?>assets/images/loader.gif" height="70" style="margin: 0 auto;"alt="Loader">
    </div>
    <!--Loader Image Code-->
</header>