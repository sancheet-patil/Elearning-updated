@extends('layouts.admin')
@section('admin')
    <div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Subscription Management
        </div>
        <div class="card-body">
            <form action="{{ route('admin.subscription_plan.save') }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group row">
                <?php 
                   $teachers= \App\Teacher::all();
                   ?>
                <div class="col-md-10">

                   <select name="teacher_name" class="form-control">
                      <option>Select Teacher</option>
                      @foreach($teachers as $teacher)
                      <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                      @endforeach
                   </select>
                </div>
             </div>
                    <div class="form-group">
                        <label>Price Per Month</label>
                        <input type="text" class="form-control" name="price_per_month" required>
                    </div>

                    <div class="form-group">
                        <label>Price Quaterly</label>
                        <input type="text" class="form-control" name="price_quaterly" required>
                    </div>

                    <div class="form-group">
                        <label>Price Semi Annually</label>
                        <input type="text" class="form-control" name="price_semiannually" required>
                    </div>

                    <div class="form-group">
                        <label>Price Annually</label>
                        <input type="text" class="form-control" name="price_annually" required>
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
          url: '{{url('admin/getcourse/')}}'+'/'+id,
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
       document.getElementById("subCourse_id").disabled = false;
   });
    });
   
</script>

@stop