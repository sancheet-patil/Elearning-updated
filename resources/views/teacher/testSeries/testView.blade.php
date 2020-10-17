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
@if (session('success'))
<div class="card-body">
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
</div>
@endif
    <div class="container"><center>
    <div class="col-lg-6 col-md-8">	
    <div class="sign_form">
        <div class="card-header">
            Upload Test Series 
             <a href="{{ route('teacher.testexport') }}"><button class="create_btn_dash " style="  float: right;" >Download Template</button></a>
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <?php 
                     $goals= \App\goals::all();
                     ?>
                 

                     <select class="_dlor1" id="goal_id" name="goal_name" class="form-control" onchange="getCourse(this)">
                        <option>Select Goals</option>
                        @foreach($goals as $goal)
                        <option value="{{$goal->id}}">{{$goal->goal_name}}</option>
                        @endforeach
                     </select>
                 
               </div>
               <div class="form-group row">
                 
                     <select class="_dlor1" id="course_id" name="course_name" onchange="getSubcourse(this)" class="form-control" disabled>
                     <option value="-1">Select Course</option>
                     </select>
                  
               </div>
            <div class="form-group row">
              
                  <select class="_dlor1" id="subCourse_id" name="subcourse_name" class="form-control" disabled>
                     <option value="-1">Select SubCourse</option>
                  </select>
              
            </div>
            <div class="form-group">
                        <label>Time For each Question(in Min)</label>
                        <input type="text" class="form-control" name="time" required>
                    </div>
                    <div class="form-group">
                        <label>Negative marks for each question</label>
                        <input type="text" class="form-control" name="negative_marks" required>
                    </div>
                    <div class="image-upload-wrap">
                <input class="file-upload-input" type="file" name="file" class="form-control"><br>
                <div class="drag-text">
									  <i class="fas fa-cloud-upload-alt"></i>
									  <div class="applyfile">Choose File</div>
									</div>
                </div>
                <br>
                <button class="create_btn_dash">Upload test Series</button>
            </form>
        </div>
    </div>
    </div></center>
</div>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
<script type='text/javascript'>
     // course Change
   function getCourse(course){
        var id = course.options[course.selectedIndex].value;
   
        // Empty the dropdown
        $('#course_id').find('option').not(':first').remove();
        // AJAX request 
        $.ajax({
          url: '{{url('teacher/getcourse/')}}'+'/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
   
            var len = 0;
            if(response['data'] != null){
              len = response['data'].length;
              
            }
   
            if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){
   
                var id = response['data'][i].id;
                var name = response['data'][i].course_name;
   
                var option = "<option value='"+id+"'>"+name+"</option>"; 
   
                $("#course_id").append(option);  
              }
            }
            document.getElementById("course_id").disabled = false;
          }
       });
   }
   
</script>
<script type='text/javascript'>
    $(document).ready(function(){
   
   $("#course_id").change(function(){
        // Department id
        var id = $(this).val();
        // Empty the dropdown
        $('#subCourse_id').find('option').remove();
        // AJAX request 
        $.ajax({
          url: '{{url('teacher/getSubcourse/')}}'+'/'+id,
          type: 'get',
          dataType: 'json',
          success: function(response){
   
            var len = 0;
            if(response['data'] != null){
              len = response['data'].length;
              
            }
   
            if(len > 0){
              // Read data and create <option >
              for(var i=0; i<len; i++){
   
                var id = response['data'][i].id;
                var name = response['data'][i].subCourses_name;
   
                var option = "<option value='"+id+"'>"+name+"</option>"; 
   
                $("#subCourse_id").append(option); 
              }
            }
   
          }
       });
       document.getElementById("subCourse_id").disabled = false;
   });
    });
   
</script>

@stop