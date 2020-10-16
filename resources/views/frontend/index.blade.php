@extends('layouts.front.main')
@section('header')
<header class="top_panel_wrap bg_tint_dark">
    <!-- Main menu -->
    <div class="menu_main_wrap logo_left">                  
        <div class="content_wrap clearfix">
            <!-- Logo -->
            <div class="logo">
                <a href="{{route('front')}}">
                    <img src="{{url('assets\frontend\homepage\images\logo.jpg')}}" class="logo_main" alt="" style="width: 100px">
                    <img src="{{url('assets\frontend\homepage\images\logo.jpg')}}" class="logo_fixed" alt="" style="width: 100px">
                </a>
            </div>
            <!-- Logo -->
            <!-- Search -->
            <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
                <a href="#" class="search_icon icon-search-2"></a>
                    <div class="search_form_wrap">
                        <form method="get" class="search_form" action="#">
                            <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>
                                <input type="text" class="search_field" placeholder="" value="" name="s" title="" />
                        </form>
                    </div>
                <div class="search_results widget_area bg_tint_light">
                    <a class="search_results_close icon-delete-2"></a>
                    <div class="search_results_content">
                    </div>
                </div>
            </div>
            <!-- /Search -->
            <!-- Navigation -->
            <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
            <nav class="menu_main_nav_area">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item menu-item-has-children"><a href="{{route('front')}}">Home</a>
                                   
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="{{route('front.about')}}">About</a></li>
                    <!-- <li class="menu-item menu-item-has-children"><a href="team-members.html">Teachers</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">Teachers Team</a></li>
                            <li class="menu-item"><a href="#">Teacher&#8217;s Personal Page</a></li>
                        </ul>
                    </li>
                     --><li class="menu-item menu-item-has-children"><a href="team-members.html">Classroom</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">External Teacher</a></li>
                            <li class="menu-item"><a href="{{route('teacher.login')}}">Register Teacher</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="{{route('blog')}}">Blog</a>             
                    </li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>

    </header>
@stop
@section('front')

    <!-- Slider section start -->
    <section class="slider-banner p-0">
        <div class="slider-carousel owl-carousel">
            <div class="slide slide-3" style="background-image: url({{asset('assets/frontend/')}}/images/slider/3.jpg);"></div>
            <div class="slide slide-1" style="background-image: url({{asset('assets/frontend/')}}/images/slider/2.jpg);"></div>
            <div class="slide slide-2" style="background-image: url({{asset('assets/frontend/')}}/images/slider/1.jpg);"></div>
        </div>
        <div class="container">
            <div class="col-md-11 slider-content m-auto text-center">
                <h2><span>Educate!</span> Smart is Great</h2>
                <form class="search-form" action="#">
                    <select name="country">
                        <option>All Categories</option>
                        <option value="usa">IT & Software</option>
                        <option value="canada">Development</option>
                        <option value="australia">Marketing & SEO</option>
                    </select>
                    <input type="text" placeholder="Enter a Subject">
                    <button type="submit"><i class="ti-search"></i></button>
                </form>
            </div>
        </div>
    </section>
    <!-- Slider section end -->

    <!-- Feature Box section start -->
    <section class="featureBox">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sfBox">
                        <i class="fas fa-drafting-compass"></i>
                        <strong>100,000 online courses</strong>
                        <span>Explore a variety of fresh topics</span>
                    </div>
                </div>
                <div class="col-md-4 d-md-flex justify-content-center">
                    <div class="sfBox">
                        <i class="far fa-user-circle"></i>
                        <strong>Expert instruction</strong>
                        <span>Find the right instructor for you</span>
                    </div>
                </div>
                <div class="col-md-4 d-md-flex justify-content-md-end">
                    <div class="sfBox mb-0">
                        <i class="fas fa-history"></i>
                        <strong>Lifetime access</strong>
                        <span>Learn on your schedule</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Box section end -->

    <!-- Categories sectiion start -->
    <section class="categories bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9 m-auto text-center">
                    <div class="sec-heading">
                        <span class="tagline">Top categories</span>
                        <h3 class="sec-title">Pick the right category Build your career</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/1.png" alt="">
                        <span>IT & Software</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/2.png" alt="">
                        <span>Data science</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/3.png" alt="">
                        <span>Development</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/4.png" alt="">
                        <span>Graphics design</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/5.png" alt="">
                        <span>Marketing</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/6.png" alt="">
                        <span>Music</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/7.png" alt="">
                        <span>Photography</span>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#" class="icon-list-block">
                        <img src="{{asset('assets/frontend/')}}/images/icons/categories/8.png" alt="">
                        <span>Self Development</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories sectiion end -->

    <!-- Trial section start -->
    <section class="trial-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="coupon">
                        <h2 class="coupon-title">50% Discout <br/> Voucher <span>on your next Enroll</span></h2>
                        <p>Use coupon code <strong>Elearnhub</strong></p>
                        <div class="clock"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <form action="#" class="form trial-form bg-light">
                        <h3 class="form-title">15 day free trial</h3>
                        <input type="text" placeholder="Your Name">
                        <input type="email" placeholder="Your Email">
                        <input type="tel" placeholder="Your Phone">
                        <button type="submit" class="btn btn-filled">Get your free trial</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Trial section end -->

    <!-- Courses section start -->
    <section class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9 m-auto text-center">
                    <div class="sec-heading">
                        <h3 class="sec-title">Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="course-caro owl-carousel">
                    <div class="col-12">
                        <div class="single-course">
                            <figure class="course-thumb">
                                <img src="{{asset('assets/frontend/')}}/images/course/1.jpg" alt="">
                                <strong class="ribbon">$29.00</strong>
                            </figure>
                            <div class="course-content">
                                <h3><a href="course-details.html">HTML5 for beginners</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dicta at aliquam...
                                </p>
                                <div class="enroll">
                                    <div class="ratings">
                                        <span class="total-students"><i class="ti-user"></i> 220 Students</span>
                                        <a href="#"><i class="ti-star"></i>
                                        </a><a href="#"><i class="ti-star"></i>
                                        </a><a href="#"><i class="ti-star"></i>
                                        </a><a href="#"><i class="ti-star"></i>
                                        </a><a href="#"><i class="ti-star"></i>
                                        </a>
                                        <span class="enrolled">(330)</span>
                                    </div>
                                    <div class="course-meta text-right">
                                        <!-- <strong class="course-price">$29.00</strong> -->
                                        <a href="#" class="btn btn-filled">Enroll now</a>
    </div>
    <!-- /Main menu -->
</header>
@stop
                    
    <!-- Body -->
    @section('content')
            <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">                    
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner disp_none height_630 max-height_630">
                        <ul>
                            <!-- Slide 1 -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                <img src="{{asset('assets/frontend/homepage/images/green.jpg')}}" alt="green" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
                                <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="20" data-y="230" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
                                    <img src="http://placehold.it/501x288" alt="">
                                </div>
                                 <div class="tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="190" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Take great courses from the world's best universities
                                </div>
                                <div class="tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="380" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
                                    <span class="font-w_400">Our courses are built in partnership with technology leaders and are relevant to industry needs.</span>
                                </div>
                                <div class="tp-caption slide_button customin stl tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:-20;transformOrigin:50% 0%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">
                                <a href="#" class="slide_button_white">Start Learning Now</a>
                                </div>
                            </li>
                            <!-- Slide 2 -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                <img src="{{asset('assets/frontend/homepage/images/blue.jpg')}}" alt="blue" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
                                <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="40" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
                                    <img src="http://placehold.it/473x402" alt="">
                                </div>
                                <div class="tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Education Center
                                    <br> and distance education
                                </div>
                                <div class="tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
                                    <span class="font-w_400">Online Education leads the world in distance education with high quality online degrees and online courses.</span>
                                </div>
                                <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">
                                    <a href="#" class="slide_button_white">Start Learning Now</a>
                                </div>
                            </li>
                            <!-- Slide 3 -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                <img src="{{asset('assets/frontend/homepage/images/yellow.jpg')}}" alt="yellow" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
                                <div class="tp-caption roundedimage sfl stl cust-z-index-5 rs-cust-style8" data-x="50" data-y="200" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
                                    <img src="http://placehold.it/440x305" alt="">
                                </div>
                                <div class="tp-caption title customin stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Receive personalized
                                    <br> coaching
                                </div>
                                <div class="tp-caption slide_text customin stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300" >
                                    <span class="font-w_400">Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</span>
                                </div>
                                <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">
                                    <a href="#" class="slide_button_white">Start Learning Now</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </section>
            <!-- Revolution slider -->

            <!-- Content -->
            <div class="page_content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">
                        <section class="post_content">
                            <!-- Features section -->
                            <div class="sc_section" data-animation="animated zoomIn normal">
                                <div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp sc_features_st1">
                                    <div class="columns_wrap sc_columns columns_fluid sc_columns_count_3">
                                        <div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">
                                            <a href="javascript:void(0);" class="sc_icon icon-woman-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
                                            <div class="sc_section font-w_400 margin_top_1em_imp">
                                                <p>
                                                    <a class="menu_color" href="#">Qualified Trainers<br />
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column-1_3 sc_column_item sc_column_item_2 even text_center">
                                            <a href="javascript:void(0);" class="sc_icon icon-rocket-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
                                            <div class="sc_section font-w_400 margin_top_1em_imp">
                                                <p>
                                                    <a class="menu_color" href="#">Better Future <br />
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">
                                            <a href="javascript:void(0);" class="sc_icon icon-world-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
                                            <div class="sc_section font-w_400 margin_top_1em_imp">
                                                <p>
                                                    <a class="menu_color" href="javascript:void(0);">Live Streaming<br />
                                                    </a>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /Features section -->          
                            <!-- Courses section -->
                            <div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
                                <div class="sc_section_overlay">
                                    <div class="sc_section_content">
                                        <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
                                            <h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Our Courses </h2>
                                            <div class="sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal no_description">
                                                <div class="isotope_wrap" data-columns="3">
                                                    <!-- Courses item -->
                                                    <?php $course=App\course::Orderby('id','desc')->get(); ?>
                                                    @foreach($course as $course)
                                                    <div class="isotope_item isotope_item_courses isotope_column_3">
                                                        <div class="post_item post_item_courses even last">
                                                            <div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
                                                                <div class="post_featured img">
                                                                    <a href="paid-course.html">
                                                                        <img alt="" src="http://placehold.it/400x400">
                                                                    </a>
                                                                    <h4 class="post_title">
                                                                        <a href="paid-course.html">{{$course->    course_name}}</a>
                                                                    </h4>
                                                                    <div class="post_descr">
                                                                        <div class="post_price">
                                                                            <span class="post_price_value">$120</span>
                                                                            <span class="post_price_period">monthly</span>
                                                                        </div>
                                                                        <div class="post_category">
                                                                            <?php $goal=\App\goals::find($course->goal_id);?>
                                                                            <a href="javascript:void(0);">{{$goal->    goal_name}}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               <div class="post_info_wrap info">
                                                                    <div class="info-back">
                                                                        <h4 class="post_title">
                                                                            <a href="paid-course.html"> <?php $goal=\App\goals::find($course->goal_id);?>
                                                                           {{$goal->goal_name}}</a>
                                                                        </h4>
                                                                        <div class="post_descr">
                                                                            <p>
                                                                                <a href="paid-course.html">{{$course->course_name}}</a>
                                                                            </p>
                                                                            <div class="post_buttons">
                                                                                <div class="post_button">
                                                                                    <a href="paid-course.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
                                                                                </div>
                                                                                <div class="post_button">
                                                                                    <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">BUY NOW</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <!-- /Courses item -->
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_menu sc_button_size_small aligncenter sc_button_iconed icon-graduation margin_top_1em margin_bottom_4 widht_12em">VIEW ALL COURSES</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Courses section -->
                            <!-- Partners section -->
                            
                            <!-- /Partners section -->
                            <!-- Video training section -->         
                            <div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>
                            <div class="sc_section" data-animation="animated fadeInUp normal">
                                <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first res_width_100per_imp">
                                            <h3 class="sc_title sc_title_iconed sc_align_left text_left">
                                                <span class="sc_title_icon sc_title_icon_top sc_title_icon_medium icon-video-2"></span>
                                                Our Video Training for Microsoft products and technologies
                                            </h3>
                                            <p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>
                                            <a href="courses-streampage.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_mini sc_button_iconed inherit margin_top_1em margin_bottom_4 margin_left_4">BROWSE COURSES</a>
                                        </div>
                                        <div class="column-1_2 sc_column_item sc_column_item_2 even res_width_100per_imp">
                                            <div class="sc_video_player sc_video_bordered sc_video_st1">
                                                <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per" data-width="100%" data-height="647" data-video="&lt;iframe class=&quot;video_frame&quot; src=&quot;http://youtube.com/embed/636Dp8eHWnM?autoplay=1&quot; width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
                                                    <img alt="" src="http://placehold.it/400x225">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Video training section -->                        
                            <!-- Pricing section -->
                            <div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
                                <div class="sc_section_overlay">
                                    <div class="sc_section_content">
                                        <div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
                                            <h2 class="sc_title sc_title_regular sc_align_center text_center margin_top_0 margin_bottom_085em">Plans &amp; Pricing</h2>
                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                <div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">
                                                    <div class="sc_price_block sc_price_block_style_1 width_100per">
                                                        <div class="sc_price_block_title">Trial</div>
                                                        <div class="sc_price_block_money">
                                                            <div class="sc_price_block_icon icon-clock-2"></div>
                                                        </div>
                                                        <div class="sc_price_block_description">
                                                            <span class="sc_highlight font_2_57em lh_1em"><b>Free!</b> 30 Days</span>
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">I WANT THIS PLAN</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item sc_column_item_2 even text_center">
                                                    <div class="sc_price_block sc_price_block_style_2">
                                                        <div class="sc_price_block_title">Monthly</div>
                                                        <div class="sc_price_block_money">
                                                            <div class="sc_price"><span class="sc_price_currency">$</span><span class="sc_price_money">89</span></div>
                                                        </div>
                                                        <div class="sc_price_block_description">
                                                            <p><b>Save $98</b> every year compared to the monthly
                                                                <br /> plan by paying yearly.</p>
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">I WANT THIS PLAN</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">
                                                    <div class="sc_price_block sc_price_block_style_3">
                                                        <div class="sc_price_block_title">Yearly</div>
                                                        <div class="sc_price_block_money">
                                                            <div class="sc_price">
                                                                <span class="sc_price_currency">$</span>
                                                                <span class="sc_price_money">129</span>
                                                            </div>
                                                        </div>
                                                        <div class="sc_price_block_description">
                                                            <p><b>Save $120</b> every year compared to the monthly
                                                                <br /> plan by paying biannually.</p>
                                                        </div>
                                                        <div class="sc_price_block_link">
                                                            <a href="product-page.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">I WANT THIS PLAN</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Pricing section -->
                        </section>
                    </article>
                </div>
            </div>

        </div>
    </section>
    <!-- Courses section end -->

            <a href="https://play.google.com/store/apps?hl=en_IN" class="float" style="color: #fff">
                <i class="fa fa-download my-float" aria-hidden="true"></i>
            </a>
            <div class="label-container">
                <div class="label-text">Download Application</div>
                    <i class="fa fa-play label-arrow"></i>
            </div>
       
            
    
            <!-- Revolution slider -->
           
            
@endsection
