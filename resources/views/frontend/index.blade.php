@extends('layouts.frontend')
@section('header')
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <!-- Site logo -->
                <a href="{{asset(route('front'))}}" class="logo">
                    <img src="{{asset('assets/frontend/')}}/images/logo.jpg" alt="">
                </a>
                <a href="javascript:void(0);" id="mobile-menu-toggler">
                    <i class="ti-align-justify"></i>
                </a>
                <ul class="navbar-nav">
                    <li><a href="{{route('front')}}">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="has-menu-child">
                        <a href="javascript:void(0);">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="course-details.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="has-menu-child">
                        <a href="javascript:void(0);">Account</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('teacher.login')}}">Teacher Login</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-course">
                            <figure class="course-thumb">
                                <img src="{{asset('assets/frontend/')}}/images/course/2.jpg" alt="">
                                <strong class="ribbon">$23.00</strong>
                            </figure>
                            <div class="course-content">
                                <h3><a href="course-details.html">Advance CSS3 animations</a></h3>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-course">
                            <figure class="course-thumb">
                                <img src="{{asset('assets/frontend/')}}/images/course/3.jpg" alt="">
                                <strong class="ribbon">$39.00</strong>
                            </figure>
                            <div class="course-content">
                                <h3><a href="course-details.html">Core Javascript basics</a></h3>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-course">
                            <figure class="course-thumb">
                                <img src="{{asset('assets/frontend/')}}/images/course/1.jpg" alt="">
                                <strong class="ribbon">$39.00</strong>
                            </figure>
                            <div class="course-content">
                                <h3><a href="course-details.html">Core Javascript basics</a></h3>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses section end -->

@stop
