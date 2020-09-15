<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:53:56 GMT -->
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">     
        <title>LivestudyHub - Dashboard</title>
        
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="{{asset('assets/Ntheme/images/livestudyHub.jpg')}}">
        @yield('css')
        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('assets/admincss/font-awesome.min.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
        <link href="{{asset('assets/Ntheme/vendor/unicons-2.0.1/css/unicons.css')}}" rel='stylesheet'>
        <link href="{{asset('assets/Ntheme/css/vertical-responsive-menu1.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/css/instructor-dashboard.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/css/instructor-responsive.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/css/night-mode.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/css/jquery-steps.css')}}" rel="stylesheet">
        
        <!-- Vendor Stylesheets -->
        <link href="{{asset('assets/Ntheme/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/Ntheme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link  type="text/css" href="{{asset('assets/Ntheme/vendor/semantic/semantic.min.css')}}" rel="stylesheet">     
        
    </head>

<body>
    <!-- Header Start -->
    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
          <i class='uil uil-bars'></i>
        </button>
        <button id="collapse_menu" class="collapse_menu">
            <i class="uil uil-bars collapse_menu--icon "></i>
            <span class="collapse_menu--label"></span>
        </button>
        <div class="main_logo" id="logo">
            <a href="{{route('teacher.dashboard')}}"><img src="{{asset('assets/Ntheme/images/left-imgs/livestudyhub.jpg')}}" alt=""></a>
           
        </div>
        <div class="search120">
            <div class="ui search">
              <div class="ui left icon input swdh10">
                <input class="prompt srch10" type="text" placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                <i class='uil uil-search-alt icon icon1'></i>
              </div>
            </div>
        </div>
        <div class="header_right">
            <ul>
                
        <!-- create new course button --> 
                <li>
                    <a href="index.html" class="option_links"><i class='uil uil-home-alt'></i><span class="noti_count">9+</span></a>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>
                    <div class="menu dropdown_ms">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{asset('assets/Ntheme/images/left-imgs/img-6.jpg')}}" alt="">
                                <div class="pd_content">
                                    <h6>Zoena Singh</h6>
                                    <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>                          
                            </div>                          
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{asset('assets/Ntheme/images/left-imgs/img-5.jpg')}}" alt="">
                                <div class="pd_content">
                                    <h6>Joy Dua</h6>
                                    <p>Hello, I paid you video tutorial but did not play error 404.</p>
                                    <span class="nm_time">10 min ago</span>
                                </div>                          
                            </div>                          
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{asset('assets/Ntheme/images/left-imgs/img-8.jpg')}}" alt="">
                                <div class="pd_content">
                                    <h6>Jass</h6>
                                    <p>Thanks Sir, Such a nice video.</p>
                                    <span class="nm_time">25 min ago</span>
                                </div>                          
                            </div>                          
                        </a>
                        <a class="vbm_btn" href="instructor_messages.html">View All <i class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
                    <div class="menu dropdown_mn">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{asset('assets/Ntheme/images/left-imgs/img-1.jpg')}}" alt="">
                                <div class="pd_content">
                                    <h6>Rock William</h6>
                                    <p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>                          
                            </div>                          
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{asset('assets/Ntheme/images/left-imgs/img-2.jpg')}}" alt="">
                                <div class="pd_content">
                                    <h6>Jassica Smith</h6>
                                    <p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
                                    <span class="nm_time">12 min ago</span>
                                </div>                          
                            </div>                          
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="images/left-imgs/img-9.jpg" alt="">
                                <div class="pd_content">
                                    <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                                    <span class="nm_time">20 min ago</span>
                                </div>                          
                            </div>                          
                        </a>
                        <a class="vbm_btn" href="instructor_notifications.html">View All <i class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="opts_account">
                        <img src="{{asset('assets/Ntheme/images/profile.png')}}" alt="">
                    </a>
                    <div class="menu dropdown_account">
                        <div class="channel_my">
                            <div class="profile_link">
                                <img src="{{asset('assets/Ntheme/images/profile.png')}}" alt="" >
                                <div class="pd_content">
                                    <div class="rhte85">
                                        <h6>{{Auth::guard('teacher')->user()->name}}</h6>
                                        <div class="mef78" title="Verify">
                                            <i class='uil uil-check-circle'></i>
                                        </div>
                                    </div>
                                    <span>Free Teacher</span>
                                </div>                          
                            </div>
                            <a href="{{route('teacher.teacherProfile')}}" class="dp_link_12">View Teacher Profile</a>                        
                        </div>
                        <div class="night_mode_switch__btn">
                            <a href="#" id="night-mode" class="btn-night-mode">
                                <i class="uil uil-moon"></i> Night mode
                                <span class="btn-night-mode-switch">
                                    <span class="uk-switch-button"></span>
                                </span>
                            </a>
                        </div>
                        <a href="{{route('teacher.dashboard')}}" class="item channel_item">Dashboard</a>                      
                        <a href="membership.html" class="item channel_item">Paid Memberships</a>
                        <a href="setting.html" class="item channel_item">Setting</a>
                        <a href="help.html" class="item channel_item">Help</a>
                        <a href="feedback.html" class="item channel_item">Send Feedback</a>
                        <a href="{{url('teacher/logout')}}" class="item channel_item">logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- Header End -->
    <!-- Left Sidebar Start -->
    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu" >
            <div class="left_section">
                <ul>
                    <li class="menu--item">
                        <a href="{{route('teacher.dashboard')}}" class="menu--link active" title="Dashboard">
                            <i class="uil uil-apps menu--icon"></i>
                            <span class="menu--label">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.subcourses.view')}}" class="menu--link" title="Request SubCourse">
                            <i class='uil uil-book-alt menu--icon'></i>
                            <span class="menu--label">Request SubCourse</span>
                        </a>
                    </li>
                     <li class="menu--item">
                        <a href="{{route('teacher.group')}}" class="menu--link" title="Groups">
                            <i class='uil uil-comments menu--icon'></i>
                            <span class="menu--label">Groups</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.free_videos.view')}}" class="menu--link" title="Analyics">
                            <i class='uil fa fa-youtube-square menu--icon'></i>
                                <span>Upload videos</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('blog.addblog')}}" class="menu--link" title="Create Course">
                            <i class='uil uil-plus-circle menu--icon'></i>
                             <span>Blog</span>
                        </a>
                    </li>
                   
                    <li class="menu--item">
                        <a href="{{route('teacher.testSeries')}}" class="menu--link" title="Notifications">
                          <i class='uil uil-bell menu--icon'></i>
                          <span>Test Series</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.paper')}}" class="menu--link" title="My Certificates">
                          <i class='uil uil-award menu--icon'></i>
                           <span>Previous Papers</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.TeacherReview')}}" class="menu--link" title="Reviews">
                          <i class='uil uil-star menu--icon'></i>
                          <span class="menu--label">Reviews</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.TeacherEarning')}}" class="menu--link" title="Earning">
                          <i class='uil uil-dollar-sign menu--icon'></i>
                          <span class="menu--label">Earning</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.TeacherPayout')}}" class="menu--link" title="Payout">
                          <i class='uil uil-wallet menu--icon'></i>
                          <span class="menu--label">Payout</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.TeacherStatements')}}" class="menu--link" title="Statements">
                          <i class='uil uil-file-alt menu--icon'></i>
                          <span class="menu--label">Statements</span>
                        </a>
                    </li>
                    <li class="{{route('teacher.TeacherVerification')}}">
                        <a href="instructor_verification.html" class="menu--link" title="Verification">
                          <i class='uil uil-check-circle menu--icon'></i>
                          <span class="menu--label">Verification</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="left_section pt-2">
                <ul>
                    <li class="menu--item">
                        <a href="{{route('teacher.TeacherSetting')}}" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="{{route('teacher.TeacherFeedback')}}" class="menu--link" title="Send Feedback">
                            <i class='uil uil-comment-alt-exclamation menu--icon'></i>
                            <span class="menu--label">Send Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Left Sidebar End -->
    <!-- Body Start -->
        <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">  
            @yield('teacher')         
            @yield('progress')
            </div>
        </div>
        <footer class="footer mt-40">
            <div class="container-fluid">
                <div class="row">                   
                    <div class="col-lg-12">
                        <div class="item_f1">
                            <a href="terms_of_use.html">Copyright Policy</a>
                            <a href="terms_of_use.html">Terms</a>
                            <a href="terms_of_use.html">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer_bottm">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="fotb_left">
                                        <li>
                                            <a href="index.html">
                                                <div class="footer_logo">
                                                    <img src="images/logo1.svg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p>© 2020 <strong>LivestudyHub</strong>. All Rights Reserved.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="edu_social_links">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    
    <!-- Body End -->

    <script src="{{asset('assets/Ntheme/js/vertical-responsive-menu.min.js')}}"></script>
    <script src="{{asset('assets/Ntheme/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/Ntheme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/Ntheme/vendor/OwlCarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/Ntheme/vendor/semantic/semantic.min.js')}}"></script>
    <script src="{{asset('assets/Ntheme/js/custom1.js')}}"></script>
    <script src="{{asset('assets/Ntheme/js/night-mode.js')}}"></script>

    @yield('js')
</body>

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:53:59 GMT -->
</html>