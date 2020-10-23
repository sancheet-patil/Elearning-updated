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
    <div class="container"><center>
    <div class="col-lg-6 col-md-8">	
    <div class="sign_form">
        <div class="card-header">
<<<<<<< HEAD
            Upload Question Papers 
           
            
=======
          
            Upload Question Papers
            <a href="{{ route('teacher.export') }}"><button class="create_btn_dash " style="  float: right;" >Download Template</button></a>

>>>>>>> 156392183df1b3e4fd37916776e07d9b6ab89f69
        </div>
         <br>
        <a  href="{{ route('teacher.export') }}"><button class="create_btn_dash">Download Template</button></a>
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
                  <div class="image-upload-wrap">
                <input class="file-upload-input"  type="file" name="file" class="form-control">
                <div class="drag-text">
									  <i class="fas fa-cloud-upload-alt"></i>
									  <div class="applyfile">Choose File</div>
                                    </div>
                                    </div>
                <br>
                <button class="create_btn_dash">Upload Previous Papers</button>
                
<<<<<<< HEAD
            </form><br>
        </div><br><br></div><br><br>
=======
            </form>

        </div>
>>>>>>> 156392183df1b3e4fd37916776e07d9b6ab89f69
    </div>
    </div></center>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
@stop