            <footer class="footer_wrap bg_tint_light footer_style_white widget_area">
                <div class="content_wrap">
                    <div class="columns_wrap">
						<!-- Calendar widget -->
                        <aside class="column-1_3 widget widget_calendar">
                            <h5 class="widget_title">Calendar</h5>
                            <table>
                                <thead>
                                      <tr>
                                            <th class="month_prev">
                                                <a href="#" data-type="post,courses,tribe_events" data-year="2015" data-month="01" title="View posts for January 2015"></a>
                                            </th>
                                            <th class="month_cur" colspan="5">September <span>2015</span></th>
                                            <th class="month_next"> 
												<a href="#" data-month="10" data-year="2015" data-type="post,courses,tribe_events" title="View posts for October 2015"></a>
											</th>
                                        </tr>
                                    <tr>
                                        <th class="weekday" scope="col" title="Monday">Mon</th>
                                        <th class="weekday" scope="col" title="Tuesday">Tue</th>
                                        <th class="weekday" scope="col" title="Wednesday">Wed</th>
                                        <th class="weekday" scope="col" title="Thursday">Thu</th>
                                        <th class="weekday" scope="col" title="Friday">Fri</th>
                                        <th class="weekday" scope="col" title="Saturday">Sat</th>
                                        <th class="weekday" scope="col" title="Sunday">Sun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="1" class="pad"><span class="day_wrap">&nbsp;</span></td>
                                        <td class="day"><span class="day_wrap">1</span></td>
                                        <td class="day"><span class="day_wrap">2</span></td>
                                        <td class="day"><span class="day_wrap">3</span></td>
                                        <td class="day"><span class="day_wrap">4</span></td>
                                        <td class="day"><span class="day_wrap">5</span></td>
                                        <td class="day"><span class="day_wrap">6</span></td>
                                    </tr>
                                    <tr>
                                        <td class="day"><span class="day_wrap">7</span></td>
                                        <td class="day"><span class="day_wrap">8</span></td>
                                        <td class="day"><span class="day_wrap">9</span></td>
                                        <td class="day"><a class="day_wrap" title="Post" href="#">10</a></td>
                                        <td class="day"><span class="day_wrap">11</span></td>
                                        <td class="day"><span class="day_wrap">12</span></td>
                                        <td class="day"><span class="day_wrap">13</span></td>
                                    </tr>
                                    <tr>
                                        <td class="day"><span class="day_wrap">14</span></td>
                                        <td class="day"><span class="day_wrap">15</span></td>
                                        <td class="day"><span class="day_wrap">16</span></td>
                                        <td class="day"><span class="day_wrap">17</span></td>
                                        <td class="day"><a class="day_wrap" title="Post" href="#">18</a></td>
                                        <td class="day"><span class="day_wrap">19</span></td>
                                        <td class="day"><span class="day_wrap">20</span></td>
                                    </tr>
                                    <tr>
                                        <td class="today"><span class="day_wrap">21</span></td>
                                        <td class="day"><span class="day_wrap">22</span></td>
                                        <td class="day"><span class="day_wrap">23</span></td>
                                        <td class="day"><span class="day_wrap">24</span></td>
                                        <td class="day"><span class="day_wrap">25</span></td>
                                        <td class="day"><span class="day_wrap">26</span></td>
                                        <td class="day"><span class="day_wrap">27</span></td>
                                    </tr>
                                    <tr>
                                        <td class="day"><span class="day_wrap">28</span></td>
                                        <td class="day"><span class="day_wrap">29</span></td>
                                        <td class="day"><span class="day_wrap">30</span></td>
                                        <td class="pad" colspan="4"><span class="day_wrap">&nbsp;</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </aside>
						<!-- /Calendar widget -->
						<!-- Popular courses widget -->
						<aside class="column-1_3 widget">
                            <h5 class="widget_title">Popular Courses</h5>
                            <?php $course=App\course::limit(4)->get(); ?>
                             @foreach($course as $course)
                           
                            <article class="post_item with_thumb">
                                <div class="post_thumb">
									<img alt="" src="http://placehold.it/75x75">
								</div>
                                <div class="post_content">
                                    <h6 class="post_title">
										<a href="paid-course.html">{{$course->course_name}}</a>
									</h6>
                                    <div class="post_info">
										<span class="post_info_item post_info_posted">
											<a href="paid-course.html" class="post_info_date">{{$course->created_at}}</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="paid-course.html" class="post_counters_item post_counters_rating icon-star-1">
												<span class="post_counters_number">74.8</span>
											</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </aside>
						<!-- /Popular courses widget -->
						<!-- Recent courses widget -->
                           <?php $course=App\course::Orderby('id','desc')->limit(4)->get(); ?>
                               
                        <aside class="column-1_3 widget">
                            <h5 class="widget_title">Recent Courses</h5>
                             @foreach($course as $course)
                            <article class="post_item with_thumb first">
                                <div class="post_thumb">
									<img alt="" src="http://placehold.it/75x75">
								</div>
                                <div class="post_content">
                                    <h6 class="post_title">
										<a href="paid-course.html">{{$course->course_name}}</a>
									</h6>
                                    <div class="post_info">
										<span class="post_info_item post_info_posted">
											<a href="paid-course.html" class="post_info_date">{{$course->created_at}}</a>
										</span>
										<span class="post_info_item post_info_counters">
											<a href="paid-course.html" class="post_counters_item post_counters_views icon-eye">
												<span class="post_counters_number">749</span>
											</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </aside>
                        
						<!-- /Recent courses widget -->
                    </div>
                </div>
            </footer>
			<!-- /Widgets Footer -->
			<!-- Testimonials footer -->
			<footer class="testimonials_wrap sc_section bg_tint_dark post_ts_bg3">
                <div class="sc_section_overlay" data-bg_color="#1eaace" data-overlay="0">
                    <div class="content_wrap">
						<!-- Testimonials section -->
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
						<!-- /Testimonials section -->
			        </div>
                </div>
            </footer>
			<!-- /Testimonials footer -->
			<!-- Contacts Footer -->
            <footer class="contacts_wrap bg_tint_dark contacts_style_dark">
                <div class="content_wrap">
                    <div class="logo">
                        <a href="index.html">
							<img src="http://placehold.it/259x30" alt="">
						</a>
                    </div>
                    <div class="contacts_address">
                        <address class="address_right">
							Phone: 1.800.123.4567<br>
							Fax: 1.800.123.4566
						</address>
                        <address class="address_left">
							San Francisco, CA 94102, US<br>	
							1234 Some St
						</address>
                    </div>
                    <div class="sc_socials sc_socials_size_big">
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_facebook">
								<span class="sc_socials_hover social_facebook"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_pinterest">
								<span class="sc_socials_hover social_pinterest"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_twitter">
								<span class="sc_socials_hover social_twitter"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_gplus">
								<span class="sc_socials_hover social_gplus"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_rss">
								<span class="sc_socials_hover social_rss"></span>
							</a>
						</div>
                        <div class="sc_socials_item">
							<a href="#" target="_blank" class="social_icons social_dribbble">
								<span class="sc_socials_hover social_dribbble"></span>
							</a>
						</div>
                    </div>
                </div>
            </footer>
            <!-- /Contacts Footer -->
			<!-- Copyright -->
            <div class="copyright_wrap">
                <div class="content_wrap">
                    <p>© 2015 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>