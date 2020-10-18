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



<div class="row justify-content-md-center">
    <div class="col-lg-8 col-md-10">
        <div class="section3125 stream_tabs">
            <ul class="nav nav-tabs slive_tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="add-streaming-tab" data-toggle="tab" href="#add-straming" role="tab" aria-controls="add-straming" aria-selected="true">Add Streaming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Setting</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="add-straming" role="tabpanel">
                    <div class="add_stream_content">
                        <h4 class="strm_title">Connect your live stream to the Live API</h4>
                        <div class="sf475">Use live-streaming software or a hardware encoder. <a href="#">Learn More</a></div>
                            <form method="post" action = "{{ route('livestream.save') }}">
                            @csrf
                            
                            <div class="group-form">
                                <?php 
                                   $goals= \App\goals::all();
                                   ?>
                                   <select class="_dlor1" id="goal_id" name="goal_name" class="form-control" onchange="getCourse(this)">
                                      <option>Select Goals</option>
                                      @foreach($goals as $goal)
                                      <option value="{{$goal->id}}">{{$goal->goal_name}}</option>
                                      @endforeach
                                   </select>
                                   @if ($errors->has('goal_name'))
                                        <span class="invalid-feedback">
                                        <strong>error:{{ $errors->first('goal_name') }}</strong>
                                    </span>
                                    @endif
                             </div>
                             <div class="group-form"> 
                                   <select class="_dlor1" id="course_id" name="course_name" onchange="getSubcourse(this)" class="form-control" disabled>
                                   <option value="-1">Select Course</option>
                                   </select>
                                   @if ($errors->has('course_name'))
                                   <span class="invalid-feedback">
                                   <strong>{{ $errors->first('course_name') }}</strong>
                               </span>
                               @endif

                             </div>
                             <div class="group-form">
                                    <select class="_dlor1" id="subCourse_id" name="subcourse_name" class="form-control" disabled>
                                      <option value="-1">Select SubCourse</option>
                                   </select>  
                                   @if ($errors->has('subcourse_name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('subcourse_name') }}</strong>
                                    </span>
                                    @endif  
                             </div>

                            <div class="group-form">
                                <label>Topic</label>
                                <input class="_dlor1" name="topic" type="text" placeholder="Topic">
                                @if ($errors->has('topic'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('topic') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="group-form">
                                <label>Duration</label>
                                <input class="_dlor1" name="duration" type="text" placeholder="Half hour 0.5 and an hour 1">
                                @if ($errors->has('duration'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                    @endif
                            </div>
                         
                            <button type="submit" name="button" value="schedule" class="create_btn_dash _145d1"><i class='uil uil-video'></i>Schedule</button>
                            <button type="submit" name="button" value="Live" class="create_btn_dash _145d1"><i class='uil uil-video'></i>Go Live</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="setting" role="tabpanel">
                    <div class="add_stream_content">
                        <h4 class="strm_title1">Live Streaming Setting</h4>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss1" checked>
                            <label>Publish this as a continuous live video</label>
                        </div>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss2">
                            <label>Allow embedding </label>
                        </div>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss3">
                            <label>Unpublish after live video ends</label>
                        </div>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss4" checked>
                            <label>Allow viewers to rewind</label>
                        </div>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss5" checked>
                            <label>End broadcast when stream ends</label>
                        </div>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss6">
                            <label>Publish as a test broadcast</label>
                        </div>
                        <div class="ui toggle checkbox _1457s2">
                            <input type="checkbox" name="stream_ss7">
                            <label>Turn off live commentary</label>
                        </div>
                        <button class="_145d1">Save changes &amp; Go Live</button>
                    </div>
                </div>
            </div>							
        </div>							
    </div>								
</div>
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
