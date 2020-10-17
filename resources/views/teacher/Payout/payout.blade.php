@extends('layouts.teacher')
<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_payout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:59:40 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Teacher - Payout</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		@yield('css')
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu1.min.css" rel="stylesheet">
		<link href="css/instructor-dashboard.css" rel="stylesheet">
		<link href="css/instructor-responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">	

		<link href="{{asset('assets/Ntheme')}}vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
		<link href="{{asset('assets/Ntheme')}}/css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/css/style.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/css/responsive.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('assets/Ntheme')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/Ntheme')}}/vendor/semantic/semantic.min.css">		
		
	</head>
	@section('teacher')
<body>
	<!-- Header Start -->
	
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	
	
		<div class="sa4d25">
			<div class="container-fluid">
			<div class="row justify-content-lg-center justify-content-md-center">
			<div class="col-lg-6 col-md-8">
			<div class="sign_form">
			<div class="card-body">	
			<div class="card-header">
			    Payment Details	
			</div><br>
			
			<form action="{{ route('payment.initiate.request') }}" method="POST">
                        <div class="row">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" />
                            <label for="name">Name</label> : 
                            <input type="text" class="form-control" id="name"  name="name">
                        </div></br>
                        <div class="row">
                            <label for="email">Email</label> : 
                            <input type="text" class="form-control" id="email" name="email">
                        </div></br>
                        <div class="row">
                            <label for="contactNumber">Contact Number</label> : 
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber">
                        </div></br>
                        <div class="row">
                            <label for="address">Address</label> : 
                            <input type="text" class="form-control" id="address" name="address">
                        </div></br>
                        <div class="row">
                            <label for="amount">Amount</label> : 
                            <input type="text" class="form-control" id="amount" name="amount">
                        </div></br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>  <br>
					<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_FjV2UrIIu2kUUM"> </script> </form>
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>
	
	
	<!-- Body End -->

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/custom1.js"></script>
	<script src="js/night-mode.js"></script>
			
</body>
@stop

<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_payout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:59:40 GMT -->
</html>