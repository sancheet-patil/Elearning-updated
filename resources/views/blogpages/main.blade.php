<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Elearning - Tutor, Education HTML Template</title>
    <link rel="icon" href="{{asset('blogfiles\img\favicon.png')}}">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('blogfiles\css\bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('blogfiles\css\style.css')}}">
    
    
</head>

<body>
    
@include('blogpages.header')


@yield('content')

@include('blogpages.footer')

 
 <!--::header part start::-->
    <!-- jquery -->
    <script src="{{asset('blogfiles\js\jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('blogfiles\js\popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('blogfiles\js\bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('blogfiles\js\jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('blogfiles\js\swiper.min.js')}}"></script>
    <script src="{{asset('blogfiles\js\jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('blogfiles\js\masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('blogfiles\js\owl.carousel.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('blogfiles\js\slick.min.js')}}"></script>
    <script src="{{asset('blogfiles\js\jquery.counterup.min.js')}}"></script>
    <script src="{{asset('blogfiles\js\waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('blogfiles\js\custom.js')}}"></script>
</body>

</html>