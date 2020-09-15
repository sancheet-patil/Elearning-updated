@extends('layouts.teacher')
<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/feedback.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:04 GMT -->
<head>
		<meta charset="utf-8">	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Teacher - Feedback</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		 @yield('css')
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">		
		
	</head>

<body>
	@section('teacher')
	<!-- Header Start -->
	
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	
	<!-- Left Sidebar End -->
	<!-- Body Start -->

		<div class="sa4d25">
			<div class="container-fluid">			
				<div class="row">
					<div class="col-lg-12">
						<h2 class="st_title"><i class="uil uil-comment-info-alt"></i> Send Feedback</h2>
						<div class="row">
							<div class="col-lg-6 col-md-8">
								<div class="ui search focus">
									<div class="ui left icon input swdh11 swdh19">
										<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email address">															
									</div>
								</div>
								<div class="ui search focus mt-30">																
									<div class="ui form swdh30">
										<div class="field">
											<textarea rows="6" name="description" id="id_about" placeholder="Describe your issue or share your ideas"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group1 mt-30">
									<label for="file5">Add Screenshots</label>
									<div class="image-upload-wrap">
										<input class="file-upload-input" id="file5" type="file" onchange="readURL(this);" accept="image/*">
										<div class="drag-text">
										  <i class="fas fa-cloud-upload-alt"></i>
										  <h4>Select screenshots to upload</h4>
										  <p>or drag and drop screenshots</p>
										</div>
									</div>															
								</div>
								<button class="save_btn" type="submit">Send Feedback</button>
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
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	
</body>
@stop
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/feedback.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:54:04 GMT -->
</html>