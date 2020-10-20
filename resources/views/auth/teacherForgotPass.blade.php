@extends('layouts.frontend')
<!DOCTYPE html>

<html lang="en">

	

<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title> Forgot Password</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
		<!-- Stylesheets -->
		@yield('css')
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
    
<body class="sign_in_up_bg">
@section('front')
	<!-- Signup Start -->
	<div class="container">
		<div class="row justify-content-lg-center justify-content-md-center">
			<div class="col-lg-12">
				<div class="main_logo25" id="logo">
					<a href="index.html"><img src="images/logo.svg" alt=""></a>
					<a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
				</div>
			</div>
		
			<div class="col-lg-6 col-md-12">
				<div class="sign_form">
				<div class="card-body">	
					<h2>Request a Password Reset</h2>
					<form action="{{ route('teacher.forgotPassword') }}" method="POST">
					{{csrf_field()}}
					@if(session('error'))
					<div>{{session('error')}}</div>
					@endif

					@if(session('success'))
					<div>{{session('success')}}</div>
					@endif
						<div class="ui search focus mt-50">
							<div class="ui left icon input swdh95">
								<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="104" placeholder="  Email Address" style="width:70%;">															
								<i class="uil uil-envelope icon icon2"></i>
							</div>
							<button class="btn btn-primary" type="submit" style="width:60px; padding:10px;">Reset</button>
						</div>
						<br>
						
					</form>
					<p class="mb-0 mt-30">Go Back <a href="{{ route('teacher.login') }}">Sign In</a></p>
				</div>
				</div>
				
			</div>				
		</div>				
    </div>	
    @stop			
	<!-- Signup End -->	

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom.js"></script>	
	<script src="js/night-mode.js"></script>	
	
</body>


</html>