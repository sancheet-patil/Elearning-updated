<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:50:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LivestudyHub- Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/')}}/img/livestudyhub-title.jpg">
    <!-- Bootstrap CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/font-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/style.css">

    <!--[if lt IE 9]>
        <script src="{{asset('assets/admin/')}}/js/html5shiv.min.js"></script>
        <script src="{{asset('assets/admin/')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left" >
                    <img class="img-fluid" src="{{asset('assets/admin/')}}/img/logo-white.jpg" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Login As Admin</p>

                        <!-- Form -->
                        <form action="{{route('admin.login.submit')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                        <!-- /Form -->

                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/admin/')}}/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/admin/')}}/js/popper.min.js"></script>
<script src="{{asset('assets/admin/')}}/js/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="{{asset('assets/admin/')}}/js/script.js"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:50:18 GMT -->
</html>
