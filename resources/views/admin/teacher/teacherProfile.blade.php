@extends('layouts.admin')
@section('admin')
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
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach



@endif
   


    <div class="row">
        <div class="col-12">
            <div class="sign_form">
                <div class="card-header">
                    <h4 class="card-title">Teacher Profile Data</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                        <div class="form-group col-md-4">
                        <div class="part_input mt-30 lbel25">
                                <label>Teacher Name </label>
                                <input type="text" name="name" value="{{$teacher_details->name}}" class="form-control" > 
                        
                            </div>
                        </div> 
                        <div class="form-group col-md-4">
                        <div class="part_input mt-30 lbel25">
                                <label>Phone </label>
                                <input type="text" name="phone" value="{{$teacher_details->phone}}" class="form-control" >
                        
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>Private Coaching </label>
                                <input type="text" name="private_coaching" value="{{$teacher_details->private_coaching}}" class="form-control" >
                        
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>Government Teaching </label>
                                <input type="text" name="gov_teaching" value="{{$teacher_details->gov_teaching}}" class="form-control">
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>YouTube </label>
                                <input type="text" name="youtube" value="{{$teacher_details->youtube}}" class="form-control">
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>Telegram Admin </label>
                                <input type="text" name="telegram_admin" value="{{$teacher_details->telegram_admin}}" class="form-control" >
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>Book Publish </label>
                                <input type="text" name="book_publish" value="{{$teacher_details->book_publish}}" class="form-control" >
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>Start New Teaching </label>
                                <input type="text" name="stat_new_teaching" value="{{$teacher_details->stat_new_teaching}}" class="form-control" >
                            </div>
                            </div>
                            <div class="form-group col-md-4">
                            <div class="part_input mt-30 lbel25">
                                <label>Certification </label>
                                <input type="text" name="certification" value="{{$teacher_details->certification}}" class="form-control" >
                            </div>
                            </div>

                            


                            <div class="form-group col-md-4">
                            <img src="{{asset('teacherProfile/'.$teacher_details->profile_image)}}" height="100px" width="100px"></td>
                             
                            </div>
                             
                                    

                           <div class="form-group col-md-4">
                           <div class="part_input mt-30 lbel25"> 
                                <label>Having equipment </label>
                                <input type="text" name="equipment" value="{{$teacher_details->equipment}}" class="form-control" >
                            </div>
</div>
                           

                            

                
                            
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>



@stop
