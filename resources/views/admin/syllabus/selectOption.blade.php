@extends('layouts.admin') 
@section('admin')
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
<center>
<div>
<form method="get" action="{{ route('admin.syllabus.view')  }}">
            @csrf
           
            <div class="card">
            
            <div class="modal-body">
               <div class="form-group row">
                  <div class="col-md-10">
                     <?php 
                        $courses= \App\course::all();
                        ?>
                       
                     <select id="course_id" name="course_name" class="form-control">
                     <option value="-1">All Course</option>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10">
                     <select id="subCourse_id" name="subcourse_name" class="form-control">
                        <option value="-1">All SubCourse</option>
                     </select>     
                  </div>
               </div>
            </div>



            <button type="submit" class="btn btn-primary">Show Syllabus</button>
            </div> 
         </form>
         </div>
         </center>
@stop

@section('js')
<script type='text/javascript'>
   $(document).ready(function(){
   
     // Department Change
     $('#course_id').change(function(){
       
        // Department id
        var id = $(this).val();
   
        // Empty the dropdown
        $('#subCourse_id').find('option').not(':first').remove();
        // AJAX request 
        $.ajax({
          url: '{{url('admin/getSubcourse/')}}'+'/'+id,
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