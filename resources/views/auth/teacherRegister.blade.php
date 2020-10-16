@extends('layouts.frontend')
@section('header')
    <header class="header abs-header">
        <div class="container">
            <nav class="navbar">
                <!-- Site logo -->
                <a href="home-01.html" class="logo">
                    <img src="{{asset('assets/frontend/')}}/images/logo.png" alt="">
                </a>
                <a href="javascript:void(0);" id="mobile-menu-toggler">
                    <i class="ti-align-justify"></i>
                </a>
                <ul class="navbar-nav">
                    <li><a href="{{route('front')}}">Home</a></li>
                    <li><a href="{{route('front.about')}}">About</a></li>
                    <li class="has-menu-child">
                        <a href="javascript:void(0);">Classroom</a>
                        <ul class="sub-menu">
                            <li><a href="#">External Teacher</a></li>
                            <li><a href="{{route('teacher.login')}}">Register Teacher</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <!-- <li><a href="contact.html">Contact</a></li> -->
                   <!--  <li class="has-menu-child">
                        <a href="javascript:void(0);">Account</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('teacher.login')}}">Teacher Login</a></li>
                        </ul>
                    </li>
 -->
                </ul>
            </nav>
        </div>
    </header>
@stop

@section('front')
    <section class="banner login-registration">
        <div class="vector-img">
            <img src="{{asset('assets/frontend/')}}/images/vector.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box">
                        <h2>Login Account</h2>
                    </div>
                   
                    @if (Session::has('t_email_error'))
                        <p class="text-danger text-center">{{Session::get('t_email_error')}}</p>
                    @endif

                    <form action="{{route('teacher.register.submit')}}" method="post" class="sl-form" >
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="phone" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" placeholder="" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder=""  id="password" title="
        Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.">
                            <input type="checkbox" onclick="myFunction1()">Show Password
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="c_password" placeholder=""  id="confirmpassword">
                            <input type="checkbox" onclick="myFunction2()">Show Password
                            
                             <p class="text-danger text-center"></p>
                          
                        </div>
<<<<<<< Updated upstream
                       
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" class="form-control" name="image" placeholder=""  id="image">
                            
                            
                        </div>
                        
                        <button class="btn btn-filled btn-round" type="submit"><span class="bh"></span> <span>Register</span></button>
>>>>>>> Stashed changes
                        <p class="notice">Already have an account? <a href="{{route('teacher.login')}}">SignIn Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
