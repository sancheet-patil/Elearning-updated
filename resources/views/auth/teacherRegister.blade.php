@extends('layouts.frontend')
@section('css')
<style>
input {
  width: 250px;
  padding: 15px 12px;
  font-size:22px;
}

#validation-txt{
  color:red;
  font-size:18px;
  width: 300px;
}
#password-3{
  -webkit-text-security: disc;
    -moz-text-security:circle;
     text-security:circle;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}


</style>
<style>
.form-group i{
    margin: 100px;
    margin-left: -30px;
}


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
                <div class="col-md-6">
                    <div class="content-box">
                        <h2>Login Account</h2>
                    </div>
                   
                    @if (Session::has('t_email_error'))
                        <p class="text-danger text-center">{{Session::get('t_email_error')}}</p>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    

                    <form action="{{route('teacher.register.submit')}}" method="post" class="sl-form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="" required>
                           
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
                        <div class="row">
                        <label for="">&nbsp &nbsp  Password</label>
                        <div class="form-group col-md-12" >
                            <input type="password" class="form-control" required name="password" placeholder="Password" id="password"  onkeyup="validate();">
                            
                            <div id="validation-txt">
                            </div>
                        </div>
                        <div class="form-group">
                        <span style="margin-top:100px; margin:-45px;"><i class="far fa-eye" onclick="myFunction1()" ></i></span>
                        </div>
                        </div>
                        </div>


                        <div class="form-group">
                        <div class="row">
                        <label for="">&nbsp &nbsp  Confirm Password</label>
                        <div class="form-group col-md-12" >
                           
                            <input type="password" class="form-control" required name="Confirm_Password" placeholder="Confirm Password" required id="confirmpassword">
                             <p class="text-danger text-center"></p>
                          
                        </div>

                        <div class="form-group " >
                        <span style="margin-top:100px; margin:-45px;"><i class="far fa-eye" onclick="myFunction2()" ></i></span>
                        </div>
                        </div>
                        </div>

                       
                       
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" class="form-control" name="image" placeholder=""  id="image">
                            
                            
                        </div>
                        
                        <button class="btn btn-filled btn-round" type="submit"><span class="bh"></span> <span>Register</span></button>
                        <p class="notice">Already have an account? <a href="{{route('teacher.login')}}">SignIn Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

