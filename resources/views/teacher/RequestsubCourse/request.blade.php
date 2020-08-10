@extends('layouts.teacher')

@section('css')
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

                     <select id="goal_id" name="goal_name" class="form-control">
                        <option>-- Select goal name --</option>
                        @foreach($goals as $goal)
                        <option value="{{$goal->id}}">{{$goal->goal_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10"> 
                     <select id="course_id" name="course_name" class="form-control">
                     <option value="-1">Select Course</option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10">
                     <select id="subCourse_id" name="subcourse_name" class="form-control">
                        <option value="-1">Select SubCourse</option>
                     </select>     
                  </div>
               </div>
            </div>



            <button type="submit" class="btn btn-success">Send Request</button>
            </div> 
         </form>
         </div>
         </center>
@stop

@section('js')

<script type='text/javascript'>
   $(document).ready(function(){
   
     // Department Change
     $('#goal_id').change(function(){
       
        // Department id
        var id = $(this).val();
   
        // Empty the dropdown
        $('#course_id').find('option').remove();
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
   
          }
       });
     });
   
   });
   
</script>



<script type='text/javascript'>
   $(document).ready(function(){
   
     // Department Change
     $('#course_id').change(function(){
       
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
     });
   
   });
   
</script>


@stop
