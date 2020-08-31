@extends('layouts.admin')
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
@section('admin')
@if (session('success'))
<div class="card-body">
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
</div>
@endif
<center>
<div class="container" style="width:50%;">
   <div class="card">
      <div class="card-header">
         <h2>Motivational Videos</h2>
      </div>
      <div class="card-body">
         <form method="POST" action="{{ route('admin.Motivationalvideos.save')  }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                  
                  <div class="col-md-10">

                     <input type="text" name="title" placeholder="Title" class="form-control">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10"> 
                    
                  <input type="text" name="description" placeholder="Description" class="form-control">
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
               
            </div>
         
            <input type="submit"  value="Submit" class="btn btn-success">
         </form>
      </div>
   </div>
</div>





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