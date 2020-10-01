@extends('layouts.teacher')
@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/')}}/css/font-awesome.min.css">
@stop


@section('teacher')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome {{$status->name}} !!!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    @if($status->status > 3)
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card_dash">
              <div class="card_dash_left">
                <h5>Sub-courses Assigned</h5>
                <span class="crdbg_1">{{$assigned_course}}</span>
              </div>
              <div class="card_dash_right">
                <img src="{{asset('assets/Ntheme/images/dashboard/knowledge.svg')}}" alt="">
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card_dash">
              <div class="card_dash_left">
                <h5>Pending Request</h5>
                <span class="crdbg_1">{{$pending_course}}</span>
              </div>
              <div class="card_dash_right">
                <img src="{{asset('assets/Ntheme/images/dashboard/online-course.svg')}}" alt="">
              </div>
            </div>
          </div>    
        </div>
        @endif
    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><!-- progress bar -->

   

<!-- /progress bar -->




















    <!-- /Page Header -->




   
    @include('layouts.message')
@stop
@section('js')
<script src="js/vertical-responsive-menu.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/OwlCarousel/owl.carousel.js"></script>
  <script src="vendor/semantic/semantic.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/night-mode.js"></script>
  <script src="js/jquery-steps.min.js"></script>
  <script>
    $('#add-course-tab').steps({
      onFinish: function () {
      alert('Wizard Completed');
      }
    });   
  </script>
  @stop