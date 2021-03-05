<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:49:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LivestudyHub - Dashboard</title>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script src="{{ asset('assets/admin/') }}/js/jquery-3.2.1.min.js"></script> --}}
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/') }}/img/livestudyhub-title.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/') }}/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/') }}/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/') }}/css/feathericon.min.css">

    <link rel="stylesheet" href="{{ asset('assets/admin/') }}/plugins/morris/morris.css">

    <!-- Main CSS sdfas -->
    <link rel="stylesheet" href="{{ asset('assets/admin/') }}/css/style.css">

    <link href="{{ asset('assets/Ntheme') }}vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
    <link href="{{ asset('assets/Ntheme') }}/css/vertical-responsive-menu.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/css/night-mode.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('assets/Ntheme') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Ntheme') }}/vendor/semantic/semantic.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>


    <!--[if lt IE 9]>
    <script src="{{ asset('assets/admin/') }}/js/html5shiv.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="{{ route('admin.login.submit') }}" class="logo">
                    <img src="{{ asset('assets/admin/') }}/img/logo-small.jpg" alt="Logo"
                        style="height: 200px; width: 100px">
                </a>
                <a href="{{ route('admin.login.submit') }}" class="logo logo-small">
                    <img src="{{ asset('assets/admin/') }}/img/logo-small.png" alt="Logo" width="30" height="30">
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
                <?php $user = App\Admin::find('1'); ?>
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fe fe-bell"></i>
                        @if ($user->unreadNotifications->count())
                            <span class="badge badge-pill">{{ $user->unreadNotifications->count() }}</span>
                        @endif
                    </a>

                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="{{ asset(route('admin.delete', $user)) }}" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message"><a href="{{ route('admin.markAsRead') }}"
                                        style="color: #32cd32">Mark all as read</a></li>
                                @foreach ($user->unreadNotifications as $note)
                                    <li class="notification-message" st>
                                        <a href="#" style="background-color:#dcdcdc">
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="noti-details">
                                                        <span class="noti-title">{{ $note->data }}</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span
                                                            class="notification-time">{{ $note->created_at }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                @foreach ($user->readNotifications as $note)
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">

                                                <div class="media-body">
                                                    <p class="noti-details"><span
                                                            class="noti-title">{{ $note->data }}</span> is <span
                                                            class="noti-title"></span></p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">{{ $note->created_at }}</span>
                                                    </p>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">

                        </div>
                    </div>
                </li>
                <!-- /Notifications -->

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle"
                                src="{{ asset('assets/admin/') }}/img/profiles/avatar-12.jpg" width="31"
                                alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset('assets/admin/') }}/img/profiles/avatar-12.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Auth::guard('admin')->user()->name }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ url('admin/logout') }}">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar" style="width:16.5%;">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span><i class="fe fe-home"></i> Admin </span>
                        </li>
                        <li class="{{ Request::segment(2) === null ? 'active' : null }}">
                            <a href="{{ route('admin.dashboard') }}"><span>Dashboard</span></a>
                        </li>



                        <li class="submenu {{ Request::segment(2) === 'teacher-subCourses' ? 'active' : null }}">
                            <a href="#"><span>Request</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('admin.teacher') }}"><span>Demo Request</span></a></li>
                                <li><a href="{{ route('admin.teacherGroup') }}"><span>Groups Request</span></a></li>
                                <li><a href="{{ route('admin.teacher_assign_subCourses.viewRequest') }}">Requested
                                        Sub-courses</a></li>
                            </ul>
                        </li>

                        <li class="submenu {{ Request::segment(2) === 'courses' ? 'active' : null }}">
                            <a href="#"><span>Goal Management</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('admin.goals') }}">Create Goal</a></li>
                                <li><a href="{{ route('admin.courses') }}">Courses</a></li>
                                <li><a href="{{ route('admin.subCourses') }}">Sub-courses</a></li>
                            </ul>
                        </li>


                        <li class="submenu {{ Request::segment(2) === 'videos' ? 'active' : null }}">
                            <a href="#"><span>Videos</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="{{ Request::segment(2) === 'course-videos' ? 'active' : null }}">
                                    <a href="{{ route('admin.free_videos.view') }}"><span>Course Videos</span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'Specialvideos' ? 'active' : null }}">
                                    <a href="{{ route('admin.Specialvideos.view') }}"><span>Special Videos</span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'Motivationalvideos' ? 'active' : null }}">
                                    <a href="{{ route('admin.Motivationalvideos.view') }}"><span>Motivational
                                            Videos</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class=" {{ Request::segment(2) === 'testSeries' ? 'active' : null }}">
                            <a href="{{ route('admin.testSeries') }}">
                                <span>Test Series</span>
                            </a>
                        </li>

                        <li class="{{ Request::segment(2) === 'subscription_plans' ? 'active' : null }}">
                            <a href="{{ route('admin.subscription_plan.view') }}"><span>Subscription
                                    Managnement</span></a>
                        </li>

                        <li class="{{ Request::segment(2) === 'payment-allocation' ? 'active' : null }}">
                            <a href="{{ route('admin.payment_allocation.view') }}"><span>Payment
                                    Percentage</span></a>
                        </li>

                        <li class="{{ Request::segment(2) === 'select-syllabus' ? 'active' : null }}">
                            <a href="{{ route('admin.syllabus.select') }}"><span>Syllabus</span></a>
                        </li>
                        <li class="">
                            <a href="{{ route('admin.Adminblog') }}"><span>Blog</span></a>
                        </li>
                        <li class="">
                            <a href="{{ route('admin.paper') }}"><span>Previous Papers</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                @yield('admin')

            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/admin/') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/admin/') }}/js/bootstrap.min.js"></script>

    @yield('js')
    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/admin/') }}/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="{{ asset('assets/admin/') }}/plugins/raphael/raphael.min.js"></script>
    {{-- <script src="{{ asset('assets/admin/') }}/plugins/morris/morris.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/admin/') }}/js/chart.morris.js"></script> --}}

    <script src="{{ asset('assets/admin/') }}/js/jquery.validate.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/admin/') }}/js/script.js"></script>

    <script src="{{ asset('assets/admin/') }}/js/site_script.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://malsup.github.com/jquery.form.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    @include('layouts.message')
</body>

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:50:00 GMT -->

</html>
