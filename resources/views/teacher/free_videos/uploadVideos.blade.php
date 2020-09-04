@extends('layouts.teacher')
@section('css')
<style>
   .card {
   width:50%;
   background-color: white;
   padding: 10px 10px;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   border-radius: 10px; /* 5px rounded corners */
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
<center>
<div class="container">
   <div class="card">
      <div class="card-header">
         <h2>Free Video</h2>
      </div>
      <div class="card-body">
         <form method="POST" action="{{ route('teacher.free_videos.save')  }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                  <?php 
                     $goals= \App\goals::all();
                     ?>
                  <div class="col-md-10">

                     <select id="goal_id" name="goal_name" class="form-control" onchange="getCourse(this)">
                        <option>Select Goals</option>
                        @foreach($goals as $goal)
                        <option value="{{$goal->id}}">{{$goal->goal_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10"> 
                     <select id="course_id" name="course_name" onchange="getSubcourse(this)" class="form-control" disabled>
                     <option value="-1">Select Course</option>
                     </select>
                  </div>
               </div>
            <div class="form-group row">
               <div class="col-md-10">
                  <select id="subCourse_id" name="subcourse_name" class="form-control" disabled>
                     <option value="-1">Select SubCourse</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <input name="video_file" id="poster" type="file" class="form-control" required><br/>
               <div class="progress">
                  <div class="progress bar progress-lg">
                     <div class="progress-bar bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="percent">0%</div >
               </div>
               <input type="submit"  value="Submit" class="btn btn-success">
            </div>
         </form>
      </div>
   </div>
</div>
<div class="row">
@foreach($free_videos as $video)
<div class="col-12 col-md-6 col-lg-4 d-flex">
   <div class="card flex-fill">
      <iframe width="360" height="240"
            src="https://www.youtube.com/embed/{{$video->video_file}}">
      </iframe>
      <div class="card-header">
         <h5>Course:  {{App\course::select('course_name')->where('id',$video->course_id)->first()->course_name}}
         </h5>
      </div>
      <div class="card-body">
         Sub-Course:  {{App\subcourses::select('subCourses_name')->where('id',$video->subcourse_id)->first()->subCourses_name}} 
         <button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#deletecourse{{$video->id}}"><i class="fa fa-trash"></i> </button>
      </div>
   </div>
</div>
<div class="modal fade" id="deletecourse{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{route('teacher.free_videos.delete')}}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-body">
               <div class="form-group">
                  are you sure to delete this course video ?
                  <input type="hidden" class="form-control" name="delete_id" value="{{$video->id}}">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-danger">Delete</button>
            </div>
         </form>
      </div>
   </div>
</div>
@endforeach
@stop
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
<script type="text/javascript">

  /* function validate(formData, jqForm, options) {
       var form = jqForm[0];
       if (!form.video_file.value) {
           alert('File not found');
           return false;
       }
   }
   
   (function() {
   
   var bar = $('.bar');
   var percent = $('.percent');
   var status = $('#status');
   
   $('form').ajaxForm({
       beforeSend: function() {
           status.empty();
           var percentVal = '0%';
           var posterValue = $('input[name=video_file]').fieldValue();
           bar.width(percentVal)
           percent.html(percentVal);
       },
       uploadProgress: function(event, position, total, percentComplete) {
           var percentVal = percentComplete + '%';
           bar.width(percentVal)
           percent.html(percentVal);
       },
       success: function() {
           var percentVal = 'Wait, Saving';
           bar.width(percentVal)
           percent.html(percentVal);
       },
       complete: function(xhr) {
           status.html(xhr.responseText);
           window.location.href = "/teacher/free_videos";
       }
   });
    
   })();*/
</script>
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