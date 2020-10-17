<!DOCTYPE html>
<html lang="en-US">

<head>
    <style type="text/css">
        *{padding:0;margin:0;}

            body{
                    font-family:Verdana, Geneva, sans-serif;
                    background-color:#CCC;
                    font-size:12px;
                }

                    .label-container{
                        position:fixed;
                        bottom:48px;
                        left:105px;
                        display:table;
                        visibility: hidden;
                    }

                    .label-text{
                        color:#FFF;
                        background:rgba(51,51,51,0.5);
                        display:table-cell;
                        vertical-align:middle;
                        padding:10px;
                        border-radius:3px;
                    }

                    .label-arrow{
                        display:table-cell;
                        vertical-align:middle;
                        color:#333;
                        opacity:0.5;
                    }

                    .float{
                        position:fixed;
                        width:60px;
                        height:60px;
                        bottom:40px;
                        left:40px;
                        background-color:#0C9;
                        color:#FFF;
                        border-radius:50px;
                        text-align:center;
                        box-shadow: 2px 2px 3px #999;
                    }

                    .my-float{
                        font-size:50px;
                        margin-top:18px;
                    }

                    a.float + div.label-container {
                      visibility: hidden;
                      opacity: 0;
                      transition: visibility 0s, opacity 0.5s ease;
                    }

                    a.float:hover + div.label-container{
                      visibility: visible;
                      opacity: 1;
                    }    
</style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="{{url('assets\frontend\homepage\images\favicon.jpg')}}" />
    <title>LivestudyHub</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.3.1" type="text/css" media="all" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&#038;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&#038;subset=latin" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/fontello/css/fontello.css')}}" type="text/css" media="all" />
    
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/rs-plugin/settings.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/woocommerce/woocommerce-layout.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/woocommerce/woocommerce-smallscreen.css')}}" type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/woocommerce/woocommerce.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/shortcodes.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/core.animation.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/tribe-style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/skins/skin.css')}}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/core.portfolio.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/mediaelement/mediaelementplayer.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/mediaelement/wp-mediaelement.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/prettyPhoto/css/prettyPhoto.css')}}" type="text/css" media="all" /> 
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/core.customizer/front.customizer.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/core.messages/core.messages.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/js/swiper/idangerous.swiper.min.css')}}" type="text/css" media="all" />
    
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/responsive.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/skins/skin-responsive.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/slider-style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets/frontend/homepage/css/custom-style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide">
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
     <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
   
                    @yield('header')
                    @yield('content')
                    @include('layouts.front.footer')
        </div>
    </div>


    <!-- /Body -->
   <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
    <div class="custom_html_section"></div>
        
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/jquery-migrate.min.js')}}"></script>  
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/ui/core.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/ui/widget.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/ui/tabs.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/ui/accordion.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/ui/effect.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/ui/effect-fade.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/jquery.blockUI.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery/jquery.cookie.min.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/global.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/core.utils.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/core.init.min.js')}}"></script>  
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/shortcodes/shortcodes.min.js')}}"></script>  
    
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/rs-plugin/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/rs-plugin/jquery.themepunch.revolution.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/slider_init.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/superfish.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery.slidemenu.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/mediaelement/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/mediaelement/wp-mediaelement.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/core.messages/core.messages.min.js')}}"></script>
    
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/hover/jquery.hoverdir.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/prettyPhoto/jquery.prettyPhoto.min.js')}}"></script>     
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/swiper/idangerous.swiper-2.7.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/swiper/idangerous.swiper.scrollbar-2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/homepage/js/diagram/chart.min.js')}}"></script>
    
     
    
   
	
	<!--<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
	<script type="text/javascript" src="js/skin.customizer.min.js"></script>-->
   

</body>

</html>