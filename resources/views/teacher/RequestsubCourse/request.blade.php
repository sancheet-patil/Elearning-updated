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
   width:45%;
   
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

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach



@endif
  <br>  <br>
<center>
<div>

<form method="post" action="{{ route('teacher.subcourses.request')  }}">
            @csrf
           
            <div class="card">
            
            <div class="modal-body">
               <div class="form-group row">
                  <?php 
                     $goals= \App\goals::all();
                     ?>
                  <div class="col-md-10">
                  
                     <select class="_dlor1" id="goal_id"  name="goal_name" class="form-control"  onchange="getCourse(this)">
                        <option>Select Goals</option>
                        @foreach($goals as $goal)
                        <option value="{{$goal->id}}">{{$goal->goal_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10"> 
                     <select  class="_dlor1"  id="course_id" name="course_name" class="form-control"  onchange="getSubcourse(this)" disabled>
                     <option value="-1">Select Course</option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10">
                      <select class="_dlor1" id="subCourse_id" name="subcourse_name"  class="form-control"  disabled>
                        <option value="-1">Select SubCourse</option>
                     </select>    
                  </div>
               </div>
            </div>



            <button type="submit" class="create_btn_dash">Send Request</button>
            </div> 
         </form>
         </div>
         </center>
         <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
@stop

@section('js')

<script type='text/javascript'>
     // Department Change
   function getCourse(course){
       //alert('Value:'+course.options[course.selectedIndex].value);
        // Department id
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
