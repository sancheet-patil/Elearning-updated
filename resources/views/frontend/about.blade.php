@extends('layouts.front.main')
@section('header')
@include('layouts.front.header');<br><br><br><br><br>
@stop
@section('content')
<div class="page_top_wrap page_top_title page_top_breadcrumbs sc_pt_st1"  style="background-color: #fff">
                <div class="content_wrap">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="{{route('front')}}">Home</a>
						<span class="breadcrumbs_delimiter"></span>
						<span class="breadcrumbs_item current">About Us</span>
					</div>
                    <h1 class="page_title">About Us</h1>
                </div>
            </div>
			<!-- /Page title -->
			<!-- Content without sidebar -->
            <div class="page_content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">
						<section class="post_content">
							<!-- Info section -->
							<div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
								<div class="sc_section_overlay">
									<div class="sc_section_content">
										<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
											<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Why choose online education?</h2>
											<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
												<div class="column-1_2 sc_column_item sc_column_item_1 sc_info_st1 odd first ">
													<div class="sc_section font_1_25em lh_1_3em">
														<span class="sc_icon icon-pen-2 alignleft link_color disp_block margin_right_05em margin_bottom_015em font_3_5em lh_1em"></span>
														<p>Study, have fun, uncover a new passion or learn
															<br /> skills that just may change your life.
														</p>
													</div>
													<div class="sc_section font_1_25em lh_1_3em margin_top_05em_imp">
														<span class="sc_icon icon-new-2 alignleft link_color disp_block margin_right_05em margin_bottom_015em font_3_5em lh_1em"></span>
														<p>Become an online Education student, it&#8217;s easy&#8230;
															<br /> Take online Education courses at your pace, at home.
														</p>
													</div>
													<div class="sc_section font_1_25em lh_1_3em margin_top_05em_imp">
														<span class="sc_icon icon-lightbulb-2 alignleft link_color disp_block margin_right_05em margin_bottom_015em font_3_5em lh_1em"></span>
														<p>Any time education.
														</p>
													</div>
													<div class="sc_section font_1_25em lh_1_3em margin_top_05em_imp">
														<span class="sc_icon icon-world-2 alignleft link_color disp_block margin_right_05em margin_bottom_015em font_3_5em lh_1em"></span>

														<p>Interactive Session With Tutors With Live Tutorials.
														</p>
													</div>
													
												</div>
												<div class="column-1_2 sc_column_item sc_column_item_2 sc_info_st1 even">
													<div class="sc_video_player">
														<div class="sc_video_frame width_596 height_335" data-width="596" data-height="335">
															<img src="{{url('assets\frontend\homepage\images\logo.jpg')}}">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Info section -->
							<!-- Team section -->
							<div class="sc_section" data-animation="animated fadeInUp normal">
								<div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp">
									<h2 class="sc_title sc_title_regular sc_align_center text_center margin_top_0 margin_bottom_085em">Our Teachers</h2>
									<div class="sc_team sc_team_style_1">
										<div class="sc_columns columns_wrap">
											@foreach($teacher as $teacher)
											<div class="column-1_3">
												<div class="sc_team_item sc_team_item_1 odd first">
													<div class="sc_team_item_avatar">
														<img alt="" src="http://placehold.it/350x290">
													</div>
													<div class="sc_team_item_info">
														<h6 class="sc_team_item_title">
															<a href="javascript:void(0);">{{$teacher->name}}</a>
														</h6>
														<div class="sc_team_item_position">Certificate</div>
														<div class="sc_team_item_description">
															<p>{{$teacher->	certification}}.</p>
														</div>
														
													</div>
												</div>
											</div>
											@endforeach
											
										</div>
									</div>
								</div>
							</div>
							<!-- /Team section -->
							<!-- Courses section -->
							<!-- /Courses section -->
							<!-- Partners section -->
							<div class="sc_section" data-animation="animated fadeInUp normal">
								<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
									<div class="sc_section aligncenter width_70per">
										<h2 class="sc_title sc_title_regular margin_top_0">Learn From the Best</h2>
										<p>Our online courses are built in partnership with technology leaders and are relevant to industry needs.
											<br /> Upon completing a Online course, you&#8217;ll receive a verified completion certificate recognized by industry leaders.
										</p>
									</div>
									<div id="sc_section_4" class="sc_section margin_top_1_5em_imp margin_bottom_0_imp height_75">
										<div id="sc_section_4_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container height_75">
											<div class="sc_scroll_wrapper swiper-wrapper">
												<div class="sc_scroll_slide swiper-slide">
													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp">
														<img src="http://placehold.it/56x60" alt="" />
													</figure>
													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
														<img src="http://placehold.it/159x60" alt="" />
													</figure>
													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
														<img src="http://placehold.it/83x60" alt="" />
													</figure>
													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
														<img src="http://placehold.it/62x60" alt="" />
													</figure>
													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
														<img src="http://placehold.it/60x60" alt="" />
													</figure>
													<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
														<img src="http://placehold.it/155x60" alt="" />
													</figure>
												</div>
											</div>
											<div id="sc_section_4_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_section_471175375_scroll_bar"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Partners section -->
							<!-- Pricing section -->
							<div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
								<div class="sc_section_overlay">
									<div class="sc_section_content">
										<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
											<h2 class="sc_title sc_title_regular sc_align_center text_center margin_top_0 margin_bottom_085em">Plans &amp; Pricing</h2>
											<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
												<div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">
													<div class="sc_price_block sc_price_block_style_1 width_100per sc_pricing_cust_st1">
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
							<!-- Testimonials section -->
							<div class="sc_section link_color_bgc bg_tint_dark">
								<div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp">
									<div class="sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_height_fixed aligncenter height_12em width_100per" data-old-height="12em" data-interval="7000">
										<div class="slides swiper-wrapper">
											<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">
												<div class="sc_testimonial_item">
													<div class="sc_testimonial_avatar">
														<img alt="" src="http://placehold.it/70x70"></div>
													<div class="sc_testimonial_content">
														<p>Best purchase i made in envato. Great Theme!</p>
													</div>
													<div class="sc_testimonial_author">
														<a href="#">Sarah Jefferson</a>
													</div>
												</div>
											</div>
											<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">
												<div class="sc_testimonial_item">
													<div class="sc_testimonial_avatar">
														<img alt="" src="http://placehold.it/70x70"></div>
													<div class="sc_testimonial_content">
														<p>Thank you for all your help and assistance over the years with our products.
															<br /> I would have no hesitation in recommending you to my clients.</p>
													</div>
													<div class="sc_testimonial_author">
														<a href="#">David Anderson</a>
													</div>
												</div>
											</div>
											<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">
												<div class="sc_testimonial_item">
													<div class="sc_testimonial_content">
														<div class="sc_number aligncenter margin_bottom_1_5em">
															<span class="sc_number_item">4</span>
															<span class="sc_number_item">0</span>
															<span class="sc_number_item">0</span>
														</div> 
														faculty and staff teaching courses and discussing topics online
													</div>
													<div class="sc_testimonial_author">online Education</div>
												</div>
											</div>
										</div>
										<div class="sc_slider_controls_wrap">
											<a class="sc_slider_prev" href="#"></a>
											<a class="sc_slider_next" href="#"></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Testimonials section -->
                        </section>
                    </article>
                </div>
            </div>
            
@endsection