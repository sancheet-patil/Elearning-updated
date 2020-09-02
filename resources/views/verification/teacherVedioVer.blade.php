
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:50:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>LivestudyHub</title>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/')}}/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/feathericon.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/style.css">

    <!--[if lt IE 9]>
    <script src="{{asset('assets/admin/')}}/js/html5shiv.min.js"></script>
    <script src="{{asset('assets/admin/')}}/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="{{asset('assets/admin/')}}/img/logo.png" alt="Logo">
            </a>
            <a href="index.html" class="logo logo-small">
                <img src="{{asset('assets/admin/')}}/img/logo-small.png" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>



        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">


            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{asset('assets/admin/')}}/img/profiles/avatar-12.jpg" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('assets/admin/')}}/img/profiles/avatar-12.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>Allen Davis</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->

  
    <!-- Page Wrapper -->
    <div class="content container-fluid">

        <!-- Tab Menu -->
        <nav class="user-tabs mb-4 custom-tab-scroll">
            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                <li>
                    <a class="nav-link active" href="#generalsettings" data-toggle="tab">General Settings</a>
                </li>
                <li>
                    <a class="nav-link" href="#paymentgateway" data-toggle="tab">Payment gateway</a>
                </li>
                <li>
                    <a class="nav-link" href="#sociallogin" data-toggle="tab">Social Login</a>
                </li>
            </ul>
        </nav>
        <!-- /Tab Menu -->

        <!-- Tab Content -->
        <div class="tab-content">

            <!-- General -->
            <div role="tabpanel" id="generalsettings" class="tab-pane fade show active">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Profile Verification</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Verification</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('teacher.video.file.upload')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Private Coaching </label><br>
                                            Yes <input type="radio" name="private_coaching" id="p1" onclick="myFunction2()">&nbsp
                                           No <input type="radio" name="private_coaching" id="p2" onclick="myFunction1()"><br>
                                           <input type="text" placeholder="coaching name" class="form-control" name="private_coaching[]" id="coaching_name" required><br>
                                           <input type="text" placeholder="Address" class="form-control" name="private_coaching[]" id="coaching_address" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Government Teaching </label><br>
                                            Yes <input type="radio" name="Government_Teaching" id="g1" onclick="myFunction3()">&nbsp
                                           No <input type="radio" name="Government_Teaching" id="g2" onclick="myFunction4()"><br>
                                            <input type="text" placeholder="Government Teaching centre"  name="gov_teaching[]" class="form-control" id="gov_teaching" required ><br>
                                           <input type="text" placeholder="Address" class="form-control" name="gov_teaching[]" id="gov_teaching_address" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>YouTube </label><br>
                                            Yes <input type="radio" name="YouTube" onclick="myFunction6()">&nbsp
                                           No <input type="radio" name="YouTube" onclick="myFunction5()"><br>
                                            <input type="text" placeholder="Channel Name" name="youtube[]" id="youtube" class="form-control" required><br>
                                           <input type="text" placeholder="Channel Link" name="youtube[]" id="youtubechannel" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Telegram Admin </label><br>
                                            Yes <input type="radio" name="Telegram_Admin" onclick="myFunction7()">&nbsp
                                           No <input type="radio" name="Telegram_Admin" onclick="myFunction8()"><br>
                                            <input type="text" placeholder="Channel Name" name="telegram_admin[]" id="telegram_admin" class="form-control" required><br>
                                           <input type="text" placeholder="Channel Link" name="telegram_admin[]" id="telegram_channel" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Book Publish </label><br>
                                            Yes <input type="radio" name="Book_Publish" onclick="myFunction10()">&nbsp
                                           No <input type="radio" name="Book_Publish" onclick="myFunction9()"><br>
                                            <input type="text" placeholder="Book Name" name="book_publish[]" id="book_publish" class="form-control" required><br>
                                           <input type="text" placeholder="Publisher" name="book_publish[]"  id="publishername" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Start New Teaching </label><br>
                                            Yes <input type="radio" name="New_Teaching" onclick="myFunction11()">&nbsp
                                           No <input type="radio" name="New_Teaching" onclick="myFunction12()"><br>
                                            <input type="text" name="stat_new_teaching[]" id="stat_new_teaching" class="form-control" required><br>
                                           <input type="text" placeholder="coaching name" name="stat_new_teaching[]" id="stat_new_teaching_name" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Certification </label>
                                            <input type="text" name="certification" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Document Upload  </label>
                                            <input type="file" name="doc_file" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Demo Video </label>
                                            <input type="file" name="video_file" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Which equipment you are having? </label><br>
                                            laptop &nbsp<input type="checkbox" value="laptop" name="equipment[]" >&nbsp &nbsp
                                            PC &nbsp<input type="checkbox" value="PC" name="equipment[]" >&nbsp &nbsp
                                            Projector &nbsp<input type="checkbox"  value="Projector" name="equipment[]" >&nbsp &nbsp
                                            Digital Board &nbsp<input type="checkbox" value="Digital Board" name="equipment[]" >&nbsp &nbsp
                                        </div>
                                        <div class="form-group col-md-4">
                                            
                                       
                                        </div>
                                        <div class="form-group col-md-4">
                                            
                                         
                                        </div>

                                        <div class="form-group col-md-2">
                                            <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                        </div>

                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /General -->

            <!-- Payment gateway -->
            <div role="tabpanel" id="paymentgateway" class="tab-pane fade">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Payment gateway</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
                                <li class="breadcrumb-item active">Payment gateway</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">General</h4>
                            </div>
                            <div class="card-body">
                                <form action="https://dreamguys.co.in/demo/mentoring-html/admin/settings.html" method="post">
                                    <h4 class="text-primary">Stripe</h4>
                                    <input type="hidden" name="csrf_token_name" value="104dbdaf79d7d8e21e4ae9991d166669">

                                    <div class="form-group">
                                        <label>Stripe Option</label>

                                        <div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" id="sandbox" name="gateway_type" value="sandbox" type="radio" checked="" onchange="payment(this.value)">
                                                <label class="custom-control-label" for="sandbox">Sandbox</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" id="livepaypal" name="gateway_type" value="live" type="radio" onchange="payment(this.value)">
                                                <label class="custom-control-label" for="livepaypal">Live</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Gateway Name</label>
                                        <input type="text" id="gateway_name" name="gateway_name" value="Stripe" required="" class="form-control" placeholder="Gateway Name">
                                    </div>
                                    <div class="form-group">
                                        <label>API Key</label>
                                        <input type="text" id="api_key" name="api_key" value="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr" required="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Rest Key</label>
                                        <input type="text" id="value" name="value" value="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3" required="" class="form-control">
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Submit</button>
                                        <a href="settings.html" class="btn btn-link m-l-5">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Payment gateway -->

            <!-- Social Login -->
            <div role="tabpanel" id="sociallogin" class="tab-pane fade">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Social Login</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
                                <li class="breadcrumb-item active">Social Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="card mb-0 shadow-none">
                    <div class="card-header">
                        <h4 class="card-title">Social Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Facebook App ID</label>
                            <input type="text" class="form-control mb-2" id="website_facebook_app_id" name="website_facebook_app_id" value="506928406484271">
                            <a href="https://www.codexworld.com/create-facebook-app-id-app-secret/" target="_blank">How to Create facebook app id?</a>
                        </div>
                        <div class="form-group">
                            <label>Google Client ID</label>
                            <input type="text" class="form-control mb-2" id="website_google_client_id" name="website_google_client_id" value="387823802376-7e1kr704s4o39a8cqtdmd6jeaob636tu.apps.googleusercontent.com">
                            <a href="https://www.codexworld.com/create-google-developers-console-project/" target="_blank">How to Create google client id?</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <button name="form_submit" type="submit" class="btn btn-primary" value="true">Save Changes</button>
                    </div>
                </div>
            </div>
            <!-- /Social Login -->

        </div>
        <!-- /Tab Content -->

    </div>
    <!-- /Page Wrapper -->
  @if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach



@endif
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/admin/')}}/js/jquery-3.2.1.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/admin/')}}/js/popper.min.js"></script>
<script src="{{asset('assets/admin/')}}/js/bootstrap.min.js"></script>

<!-- Slimscroll JS -->
<script src="{{asset('assets/admin/')}}/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom JS -->
<script  src="{{asset('assets/admin/')}}/js/script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function myFunction1() {
    document.getElementById("coaching_name").disabled = true;
    document.getElementById("coaching_address").disabled = true;
}
function myFunction2() {
    document.getElementById("coaching_name").disabled = false;
    document.getElementById("coaching_address").disabled = false;
}
function myFunction3() {
    document.getElementById("gov_teaching").disabled = false;
    document.getElementById("gov_teaching_address").disabled = false;
    
}
function myFunction4() {
    document.getElementById("gov_teaching").disabled = true;
    document.getElementById("gov_teaching_address").disabled = true;
}

</script>
<script>
function myFunction5() {
    document.getElementById("youtube").disabled = true;
    document.getElementById("youtubechannel").disabled = true;
}
function myFunction6() {
    document.getElementById("youtube").disabled = false;
    document.getElementById("youtubechannel").disabled = false;
}
function myFunction7() {
    document.getElementById("telegram_admin").disabled = false;
    document.getElementById("telegram_channel").disabled = false;
    
}
function myFunction8() {
    document.getElementById("telegram_admin").disabled = true;
    document.getElementById("telegram_channel").disabled = true;
}

</script>
<script>
function myFunction9() {
    document.getElementById("book_publish").disabled = true;
    document.getElementById("publishername").disabled = true;
}
function myFunction10() {
    document.getElementById("book_publish").disabled = false;
    document.getElementById("publishername").disabled = false;
}
function myFunction11() {
    document.getElementById("stat_new_teaching").disabled = false;
    document.getElementById("stat_new_teaching_name").disabled = false;
    
}
function myFunction12() {
    document.getElementById("stat_new_teaching").disabled = true;
    document.getElementById("stat_new_teaching_name").disabled = true;
}

</script>
@include('layouts.message')
</body>

<!-- Mirrored from dreamguys.co.in/demo/mentoring-html/admin/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 14:50:18 GMT -->
</html>
