<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:49:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LivestudyHub - Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/')}}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/font-awesome.min.css">
    @yield('css')
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/feathericon.min.css">

    <link rel="stylesheet" href="{{asset('assets/admin/')}}/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/style.css">



<!--[if lt IE 9]>
    <script src="{{asset('assets/admin/')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('assets/admin/')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="{{asset('assets/admin/img/logo1.jpg')}}" alt="Logo" style="height: 200px; width: 100px">
            </a>
            <a href="index.html" class="logo logo-small">
                <img src="{{asset('assets/admin/')}}/img/logo-small.png" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">

            <!-- Notifications -->
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/admin/')}}/img/user/user.jpg">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Jonathan Doe</span> Schedule <span class="noti-title">his appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/admin/')}}/img/user/user1.jpg">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked her appointment to <span class="noti-title">Ruby Perrin</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/admin/')}}/img/user/user2.jpg">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('assets/admin/')}}/img/user/user4.jpg">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Patricia Manzi</span> send a message <span class="noti-title"> to his Mentee</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{asset('assets/admin/')}}/img/profiles/avatar-12.jpg" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('assets/admin/')}}/img/profiles/avatar-12.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>{{Auth::guard('teacher')->user()->name}}</h6>
                            <p class="text-muted mb-0">Free Teacher</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="{{route('teacher.teacherProfile')}}">My Profile</a>
                    <a class="dropdown-item" href="{{url('teacher/logout')}}">Logout</a>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span><i class="fe fe-home"></i> Main</span>
                    </li>
                    <li class="active">
                        <a href="{{route('teacher.dashboard')}}"><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{route('teacher.group')}}"><span>Groups</span></a>
                    </li>
                    <li>
                        <a href="{{route('teacher.subcourses.view')}}"><span>Request SubCourse</span></a>
                    </li>
                    <!--<li class="submenu">
                        <a href="#"><span> Reports</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="invoice-report.html">Invoice Reports</a></li>
                        </ul>
                    </li>-->
                    <li>
                        <a href="{{route('teacher.free_videos.view')}}"><span>Upload videos</span></a>
                    </li>

                    <li>

                        <a href="https://solutions.agora.io/education/web/?_ga=2.113566215.184414609.1597420959-482435269.1596626319&_gac=1.261705599.1596683766.CjwKCAjwsan5BRAOEiwALzomX2k8YKitn0lIWH4oZP26lbOgh_4SYTC0FHRSQa7z4LSKOuDwDa0fDxoCkPIQAvD_BwE#/"><span>Live stream</span></a>
                    </li>
                    <li>
                        <a href="{{route('teacher.addblog')}}"><span>Blog</span></a>
                    </li>


                    <li>
                        <a href="{{route('teacher.testSeries')}}"><span>Test Series</span></a>
                    </li>
                     <li class="">
                        <a href="{{route('teacher.paper')}}"><span>Previous Papers</span></a>
                    </li>




                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            @yield('teacher')

        </div>
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->


<script src="{{asset('assets/admin/')}}/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/admin/')}}/js/popper.min.js"></script>
<script src="{{asset('assets/admin/')}}/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="{{asset('assets/admin/')}}/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="{{asset('assets/admin/')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('assets/admin/')}}/plugins/morris/morris.min.js"></script>
<script src="{{asset('assets/admin/')}}/js/chart.morris.js"></script>
<!-- Custom JS -->

<script  src="{{asset('assets/admin/')}}/js/script.js"></script>



@yield('js')

</body>

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:50:00 GMT -->
</html>
