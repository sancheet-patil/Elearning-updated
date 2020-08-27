@extends('layouts.admin')
@section('admin')
             <div class="page-header">
        <div class="row">
            <div class="col-sm-10">
                <h3 class="page-title">Blog</h3>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center">Create Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('Adminblog.store') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field() }}

                    <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <?php $goal=\App\goals::all();?>
                                <label>Select Goal</label>
                                <select class="form-control" name="goal" id="goal_id" onchange="getCourse(this)">

                                    <option>Select Goals</option>
                                    @foreach($goal as $goal)
                                    <option value="{{$goal->id }}">{{$goal->goal_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-5">  
                                <label>Select Course</label>
                                <select class="form-control" name="course" onchange="getSubcourse(this)" id="course_id" disabled>
                                    <option value="-1">Select Course</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-5">  
                                <label>Select SubCourse</label>
                                <select class="form-control" name="subcourse" id="subCourse_id" disabled>
                                    <option value="-1">Select SubCourse</option>
                                </select>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Title</label>
                                <input type="text" name="title" value="" class="form-control" required>
                                <input type="hidden" name="teacher_id" value="0" class="form-control" required> 
                         
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Content </label>
                                
                                <textarea class="form-control" required cols="10" rows="12" name="content"></textarea>
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Image</label>
                                <input type="file" name="image" value="" class="form-control" required>
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
                        </div>


                    </form>
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



