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
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="index.html" class="menu--link active" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="live_streams.html" class="menu--link" title="Live Streams">
							<i class='uil uil-kayak menu--icon'></i>
							<span class="menu--label">Live Streams</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="explore.html" class="menu--link" title="Explore">
							<i class='uil uil-search menu--icon'></i>
							<span class="menu--label">Explore</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="categories.html" class="menu--link" title="Categories">
							<i class='uil uil-layers menu--icon'></i>
							<span class="menu--label">Categories</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Tests">
						  <i class='uil uil-clipboard-alt menu--icon'></i>
						  <span class="menu--label">Tests</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="certification_center.html" class="sub_menu--link">Certification Center</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_start_form.html" class="sub_menu--link">Certification Fill Form</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test_view.html" class="sub_menu--link">Test View</a>
							</li>
							<li class="sub_menu--item">
								<a href="certification_test__result.html" class="sub_menu--link">Test Result</a>
							</li>
							<li class="sub_menu--item">
								<a href="http://www.gambolthemes.net/html-items/edututs+/Instructor_Dashboard/my_certificates.html" class="sub_menu--link">My Certification</a>
							</li>
						</ul>
					</li>
					<li class="menu--item">
						<a href="saved_courses.html" class="menu--link" title="Saved Courses">
						  <i class="uil uil-heart-alt menu--icon"></i>
						  <span class="menu--label">Saved Courses</span>
						</a>
					</li>
					<li class="menu--item  menu--item__has_sub_menu">
						<label class="menu--link" title="Pages">
						  <i class='uil uil-file menu--icon'></i>
						  <span class="menu--label">Pages</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="about_us.html" class="sub_menu--link">About</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_in.html" class="sub_menu--link">Sign In</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_up.html" class="sub_menu--link">Sign Up</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_up_steps.html" class="sub_menu--link">Sign Up Steps</a>
							</li>
							<li class="sub_menu--item">
								<a href="membership.html" class="sub_menu--link">Paid Membership</a>
							</li>
							<li class="sub_menu--item">
								<a href="course_detail_view.html" class="sub_menu--link">Course Detail View</a>
							</li>
							<li class="sub_menu--item">
								<a href="checkout_membership.html" class="sub_menu--link">Checkout</a>
							</li>
							<li class="sub_menu--item">
								<a href="invoice.html" class="sub_menu--link">Invoice</a>
							</li>
							<li class="sub_menu--item">
								<a href="career.html" class="sub_menu--link">Career</a>
							</li>
							<li class="sub_menu--item">
								<a href="apply_job.html" class="sub_menu--link">Job Apply</a>
							</li>
							<li class="sub_menu--item">
								<a href="our_blog.html" class="sub_menu--link">Our Blog</a>
							</li>
							<li class="sub_menu--item">
								<a href="blog_single_view.html" class="sub_menu--link">Blog Detail View</a>
							</li>
							<li class="sub_menu--item">
								<a href="company_details.html" class="sub_menu--link">Company Details</a>
							</li>
							<li class="sub_menu--item">
								<a href="press.html" class="sub_menu--link">Press</a>
							</li>
							<li class="sub_menu--item">
								<a href="live_output.html" class="sub_menu--link">Live Stream View</a>
							</li>
							<li class="sub_menu--item">
								<a href="add_streaming.html" class="sub_menu--link">Add live Stream</a>
							</li>
							<li class="sub_menu--item">
								<a href="search_result.html" class="sub_menu--link">Search Result</a>
							</li>
							<li class="sub_menu--item">
								<a href="thank_you.html" class="sub_menu--link">Thank You</a>
							</li>
							<li class="sub_menu--item">
								<a href="coming_soon.html" class="sub_menu--link">Coming Soon</a>
							</li>
							<li class="sub_menu--item">
								<a href="error_404.html" class="sub_menu--link">Error 404</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="left_section">
				<h6 class="left_title">SUBSCRIPTIONS</h6>
				<ul>
					<li class="menu--item">
						<a href="instructor_profile_view.html" class="menu--link user_img">
							<img src="images/left-imgs/img-1.jpg" alt="">
							Rock Smith
							<div class="alrt_dot"></div>
						</a>
					</li>
					<li class="menu--item">
						<a href="instructor_profile_view.html" class="menu--link user_img">
							<img src="images/left-imgs/img-2.jpg" alt="">
							Jassica William
						</a>
						<div class="alrt_dot"></div>
					</li>
					<li class="menu--item">
						<a href="all_instructor.html" class="menu--link" title="Browse Instructors">
						  <i class='uil uil-plus-circle menu--icon'></i>
						  <span class="menu--label">Browse Instructors</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_section pt-2">
				<ul>
					<li class="menu--item">
						<a href="setting.html" class="menu--link" title="Setting">
							<i class='uil uil-cog menu--icon'></i>
							<span class="menu--label">Setting</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="help.html" class="menu--link" title="Help">
							<i class='uil uil-question-circle menu--icon'></i>
							<span class="menu--label">Help</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="report_history.html" class="menu--link" title="Report History">
							<i class='uil uil-windsock menu--icon'></i>
							<span class="menu--label">Report History</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="feedback.html" class="menu--link" title="Send Feedback">
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