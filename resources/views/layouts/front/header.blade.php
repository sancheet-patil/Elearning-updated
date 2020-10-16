<header class="top_panel_wrap bg_tint_dark"  style="background-image: url({{url('assets/frontend/homepage/images/green.jpg')}})">
				<!-- User menu -->
                <!-- /User menu -->
				<!-- Main menu -->
                <div class="menu_main_wrap logo_left">                  
                    <div class="content_wrap clearfix">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{route('front')}}">
                                <img src="{{url('assets\frontend\homepage\images\logo.jpg')}}" class="logo_main" alt="" style="width: 100px">
                                <img src="{{url('assets\frontend\homepage\images\logo.jpg')}}" class="logo_fixed" alt="" style="width: 100px">
                            </a>
                        </div>
                        <!-- Logo -->
                        <!-- Search -->
                        <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">
                            <a href="#" class="search_icon icon-search-2"></a>
                            <div class="search_form_wrap">
                                <form method="get" class="search_form" action="#">
                                    <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>
                                    <input type="text" class="search_field" placeholder="" value="" name="s" title="" />
                                </form>
                            </div>
                            <div class="search_results widget_area bg_tint_light">
                                <a class="search_results_close icon-delete-2"></a>
                                <div class="search_results_content">
                            </div>
                            </div>
                        </div>
                        <!-- /Search -->
                        <!-- Navigation -->
                        <a href="#" class="menu_main_responsive_button icon-menu-1"></a>
                        <nav class="menu_main_nav_area">
                            <ul id="menu_main" class="menu_main_nav">
                                <li class="menu-item menu-item-has-children"><a href="{{route('front')}}">Home</a>
                                   
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="{{route('front.about')}}">About</a>
                                   
                                </li>
                               <!--  <li class="menu-item menu-item-has-children"><a href="team-members.html">Teachers</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Teachers Team</a></li>
                                        <li class="menu-item"><a href="#">Teacher&#8217;s Personal Page</a></li>
                                    </ul>
                                </li>
                                -->  <li class="menu-item menu-item-has-children"><a href="team-members.html">Classroom</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">External Teacher</a></li>
                                        <li class="menu-item"><a href="{{route('teacher.login')}}">Register Teacher</a></li>
                                    </ul>
                                </li>
                               
                                <li class="menu-item menu-item-has-children"><a href="{{route('blog')}}">Blog</a>
                                   
                                </li>
                                
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
                <!-- /Main menu -->
</header>
					