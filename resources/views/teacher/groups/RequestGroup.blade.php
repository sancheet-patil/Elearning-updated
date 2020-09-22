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
<style>
.card {
   width:35%;
    background-color: white;
    padding: 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 10px; /* 5px rounded corners */

}

.san{
   background-color:#000;
}
</style>
@stop

@section('teacher')

@if (session('success'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif
<div>
  @if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach



@endif
<center>
<div class="col-lg-6 col-md-8">
<div class="sign_form">
        <form method="post" action="{{ route('teacher.group.request')  }}">
            @csrf
        
           
            <div class="card-header">
           <h3>Request for group </h3> 
           </div>
         
            
            <div class="card-body">
               <input type="text" class="form-control" placeholder="Enter Group Name" id="group_id" name="group_name">
          
            </div>


            <button type="submit" class="create_btn_dash">Send Request</button>
            
         </form>
         </div><br><br><br><br><br><br><br><br><br>
         </div>
        
         </center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@stop

@section('js')



@stop
