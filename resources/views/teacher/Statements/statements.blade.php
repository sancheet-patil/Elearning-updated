@extends('layouts.teacher')

<!DOCTYPE html>
<html lang="en">

	
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_statements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:59:40 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Teacher - Statements</title>
		
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
				<div class="row">
					<div class="col-lg-12">	
						<h2 class="st_title"><i class="uil uil-file-alt"></i> Statements</h2>
					</div>					
				</div>				
				<div class="row">					
					<div class="col-lg-8 col-md-7">
						<div class="top_countries mt-30">
							<div class="top_countries_title">
								<h2>Earnings</h2>
							</div>
							<div class="statement_content">
								<p class="tt-body">Your sales earnings over the last 30 days</p>
								<table class="statement-summary__table">
									<thead>
										<tr>
											<th>
												<p class="t-heading">My funds</p>
											</th>
											<th>
												<p class="t-heading">Earnings</p>
											</th>
											<th>
												<p class="t-heading">Edututs+ Fees</p>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="statement-summary__funds">
												<p class="js-earnings__instructor-funds-wrapper">
													<span class=""></span>
													<span class="js-earnngs__instructor-funds t-currency">$289.64</span>
												</p>
											</td>
											<td class="statement-summary__earnings">
												<p class="js-earnings__earnings-wrapper">
													<span class="tt__earning">+</span>
													<span class="js-earnings__earnings t-currency">$458.00</span>
												</p>
											</td>
											<td class="statement-summary__fees">
												<p class="js-earnings__fees-wrapper">
													<span class="tt__earning">-</span>
													<span class="js-earnings__fees t-currency">$154.86</span>
												</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>			
					</div>
					<div class="col-lg-4 col-md-5">
						<div class="top_countries mt-30">
							<div class="top_countries_title">
								<h2>View Invoices</h2>
							</div>
							<div class="statement_invoice_content">
								<div class="date_selector mt-0">
									<div class="ui selection dropdown skills-search vchrt-dropdown invoice-dropdown">
										<input name="date" type="hidden" value="default">
										<i class="dropdown icon d-icon"></i>
										<div class="text">Monthly Invoices</div>
										<div class="menu">
											<div class="item" data-value="0">April 2020</div>
											<div class="item" data-value="1">March 2020</div>
										</div>
									</div>
									<button class="st_download_btn"><i class="uil uil-download-alt"></i></button>
								</div>
							</div>
						</div>			
					</div>
					<div class="col-lg-12 col-md-12">
						<ul class="more_options_tt">
							<li><button class="more_items_14 active">This Month</button></li>
							<li><button class="more_items_14">Last Month</button></li>
							<li>
								<div class="explore_search">
									<div class="ui search focus">
										<div class="ui left icon input swdh11 swdh15">
											<input class="prompt srch_explore" type="text" placeholder="Document Number">
											<i class="uil uil-search-alt icon icon8"></i>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="table-responsive mt-30">
							<table class="table ucp-table earning__table">
								<thead class="thead-s">
									<tr>
										<th scope="col">Date</th>
										<th scope="col">Order ID</th>
										<th scope="col">Type</th>
										<th scope="col">Title</th>
										<th scope="col">Amount</th>									
										<th scope="col">Fees</th>									
										<th scope="col">Invoice</th>									
									</tr>
								</thead>
								<tbody>
									<tr>										
										<td>13 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>12 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>11 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>10 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>9 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>8 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
									<tr>										
										<td>7 Apr 2020</td>	
										<td>123456</td>	
										<td>Sale</td>	
										<td>Course Title Here</td>	
										<td>$10</td>	
										<td>-$5</td>	
										<td><a href="#">View</a></td>	
									</tr>
								</tbody>				
							</table>
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
<!-- Mirrored from gambolthemes.net/html-items/cursus_demo_f12/instructor_statements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:59:40 GMT -->
</html>