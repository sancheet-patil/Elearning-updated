@extends('layouts.teacher')
@section('teacher')
@if (session('success'))
<div class="card-body">
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
</div>
@endif
    <div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Upload Image Test Question
        </div>
        <div class="card-body">
        <form action="{{route('teacher.ImageQuestion')}}" method="POST" enctype="multipart/form-data">
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
                        <label>Question</label>
                        <input type="text" class="form-control" name="Question" required>
                    </div>
                    <div class="row">
                    <div class="form-group">
                        <div class="col-md-10">
                        <label>Option1</label>
                        <input type="text" class="form-control" name="Option1" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-10">
                        <label>Option2</label>
                        <input type="text" class="form-control" name="Option2" required>
                        </div>
                    </div>
                

                    <div class="form-group">
                        <div class="col-md-10">
                        <label>Option3</label>
                        <input type="text" class="form-control" name="Option3" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10">
                        <label>Option4</label>
                        <input type="text" class="form-control" name="Option4" required>
                    </div>
                </div>
                </div>
                    <div class="form-group">
                        <label>Marathi Question</label>
                        <input type="text" class="form-control" name="Marathi_Question" >
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-10">
                            <label>Marathi Option1</label>
                            <input type="text" class="form-control" name="Marathi_Option1" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10">
                            <label>Marathi Option2</label>
                            <input type="text" class="form-control" name="Marathi_Option2">
                            </div>
                        </div>
                    
    
                        <div class="form-group">
                            <div class="col-md-10">
                            <label>Marathi Option3</label>
                            <input type="text" class="form-control" name="Marathi_Option3">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-md-10">
                            <label>Marathi Option4</label>
                            <input type="text" class="form-control" name="Marathi_Option4" >
                        </div>
                    </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Image</label>
                        <input type="file" name="file" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label>Correct Option</label>
                        <input type="text" class="form-control" name="Correct" required>
                    </div>

                    <div class="form-group">
                        <label>Time For each Question(in Min)</label>
                        <input type="text" class="form-control" name="time" required>
                    </div>
                    <div class="form-group">
                        <label>Negative marks for each question</label>
                        <input type="text" class="form-control" name="negative_marks" required>
                    </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
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