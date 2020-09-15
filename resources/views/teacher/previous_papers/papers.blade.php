@extends('layouts.teacher')
@section('css')
<link href="{{asset('assets/Ntheme')}}vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
		<link href="{{asset('assets/Ntheme')}}/css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/css/style.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/css/responsive.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/css/night-mode.css" rel="stylesheet">
		<!-- Vendor Stylesheets -->
		<link href="{{asset('assets/Ntheme')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="{{asset('assets/Ntheme')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/Ntheme')}}/vendor/semantic/semantic.min.css">	
@stop
@section('teacher')
@if (session('Success'))
<div class="card-body">
   <div class="alert alert-success" style="text-align: center">
      {{ session('Success') }}
   </div>
</div>
@endif
    <div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Upload Question Papers 
        </div>
        <div class="card-body">
            <form action="{{ route('teacher.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 <select  class="_dlor1" name ="year" class="form-control">
                       <option>Select Year</option>
                      @for ($year = 1950; $year <= 2052 ; $year++)                  
                      <option value = "{{ $year }}">{{ $year }}</option>                
                     @endfor
                  </select>
                  <br><br><br>
                <input type="file" name="file" class="form-control">
                <br>
                <button class="create_btn_dash">Upload Previous Papers</button>
                <a  href="{{ route('teacher.export') }}"><button class="create_btn_dash">Download Template</button></a>
            </form><br>
        </div><br><br></div><br><br>
    </div>

@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
@stop