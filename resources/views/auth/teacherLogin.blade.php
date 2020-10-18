@extends('layouts.frontend')
@section('css')
<style>
.form-group i{
    margin:10px;
    padding:200px;
}

</style>
@stop
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
                <div class="col-md-5">
                    <div class="content-box">
                        <h2>Login Account</h2>
                    </div>
                    @if (Session::has('teacher_success_reg'))
                        <p class="text-success text-center">{{Session::get('teacher_success_reg')}}</p>
                    @endif
                    <form action="{{route('teacher.login.submit')}}" method="post" class="sl-form">
                        @csrf
                        <div class="form-group">
                            <label>Email or Username</label>
                            <input type="email" name="email" placeholder="example@gmail.com" required>
                        </div>

                        <div class="form-group">
                        <div class="row">
                        <label> &nbsp &nbsp Password</label>
                        <div class="form-group col-md-12" >
                            
                        <input type="password" name="password" placeholder="Password"  id="password" required>
                        </div>
                        <div class="form-group" >
                        <span style="margin-top:100px; margin:-45px;"><i class="far fa-eye" onclick="myFunction1()" ></i></span>
                        </div>
                        </div>
                        </div>

                       
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">Remember Password</label>
                        </div>
                        <button class="btn btn-filled btn-round"><span class="bh"></span> <span>Login</span></button>
                        <p class="notice">Don’t have an account? <a href="{{route('teacher.register')}}">Signup Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
