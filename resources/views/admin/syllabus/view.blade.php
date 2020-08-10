@extends('layouts.admin') 
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Syllabus</h3>
         <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">Add Syllabus</button>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Syllabus </h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover table-center mb-0">
                  <thead>
                     <tr>
                        <th>id</id>
                        @if($course_name=='-1')
                        <th>Course Name</th>
                        @endif
                        @if($subcourse_name=='-1')
                        <th>Sub-Course Name</th>
                        @endif
                        <th>Chapter Name</th>
                        <th class="text-right">Action & No. of sub-chapter</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $id=0;?>
                     @foreach($syllabus as $syll)
                     <tr>
                        <?php $id++;
                           $subCourse_name= \App\subcourses::find($syll->subCourse_id);
                           $courses_name =\App\course::find($syll->course_id)
                           ?>
                        <td>{{$id}}</td>
                        @if($course_name=='-1')
                        <td>{{$courses_name->course_name}}</td>
                        @endif
                        @if($subcourse_name=='-1')
                        <td>{{$subCourse_name->subCourses_name}}</td>
                        @endif
                        <td>{{$syll->chapterName}}</td>
                        <td class="text-right">
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editcourse{{$syll->id}}"><i class="fa fa-edit"></i></button>
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addSubChapter{{$syll->id}}"><i class="fa fa-plus"></i></button>
                           <a href="{{route('admin.syllabus.subChapter',$syll->id)}}"><button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button></a>
                           <button class="btn btn-warning btn-sm" data-toggle="modal">{{\App\sub_chapter::where('syllabus_id',$syll->id)->count()}}</button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletecourse{{$syll->id}}"><i class="fa fa-trash"></i></button>
                        </td>
                     </tr>
                     <div class="modal fade" id="deletecourse{{$syll->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.syllabus.deleteSyllabus')}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to delete this course ?
                                                        <input type="hidden" class="form-control" name="delete_id" value="{{$syll->id}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                     <div class="modal fade" id="editcourse{{$syll->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Update syllabus</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form method="post" action="{{route('admin.syllabus.update')  }}">
                                 @csrf
                                 @method('PUT')
                                 <div class="modal-body">
                                    <div class="form-group row">
                                       <div class="col-md-10">
                                          <?php 
                                             $courses= \App\course::all();
                                             ?>
                                          <label>Course Name</label>
                                          <select id="course_id" name="course_name" class="form-control">
                                             <option value="{{$syll->course_id}}">{{$courses_name->course_name}}</option>
                                             @foreach($courses as $course)
                                             <option value="{{$course->id}}">{{$course->course_name}}</option>
                                             @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-md-10">
                                          <label>Sub-Course Name</label>
                                          <select id="subCourse_id" name="subcourse_name" class="form-control">
                                             <option value="{{$syll->subCourse_id}}">{{$subCourse_name->subCourses_name}}</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-md-10">
                                          <label>Chapter Name</label>
                                          <input type="text" class="form-control" value="{{$syll->chapterName}}" name="chapterName">
                                          <input type="hidden" value="{{$syll->id}}" name="edit_id">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
            </div>
            <div class="modal fade" id="addSubChapter{{$syll->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Sub-Topic to {{$syll->chapterName}} </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{route('admin.syllabus.addSubtopic')}}" method="post">
            @csrf
            <div class="modal-body">
            <div class="form-group">
            <label>sub-Topic Name</label>
            <input type="text" class="form-control" name="subtopic_name"> 
            <input type="hidden" value="{{$syll->id}}" name="syllabus_id">  
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
            @endforeach
            </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
</div>
<div class="modal fade" id="createnewcourses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Syllabus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post" action="{{route('admin.syllabus.save')  }}">
            @csrf
            @method('POST')
            <div class="modal-body">
            <div class="form-group row">
                  <div class="col-md-10">
                     <?php 
                        $goals= \App\goals::all();
                        ?>
                       
                     <select id="goal_id" name="goal_name" class="form-control">
                     <option value="-1">Select Goal</option>
                        @foreach($goals as $goal)
                        <option value="{{$goal->id}}">{{$goal->goal_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10">
                     <select id="course_id1" name="course_name" class="form-control">
                        <option>-- Select Course name --</option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10">
                     <select id="subCourse_id1" name="subcourse_name" class="form-control">
                        <option>-- Select SubCourse name --</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-10">
                                          <label>Chapter Name</label>
                                          <input type="text" class="form-control"  name="chapterName">
                                       </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>



@stop
@section('js')
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
          url: '{{url('admin/getSubcourse/')}}/'+id,
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

<script type='text/javascript'>
   $(document).ready(function(){
   
     // Department Change
     $('#course_id1').change(function(){
       
        // Department id
        var id = $(this).val();
   
        // Empty the dropdown
        $('#subCourse_id1').find('option').remove();
        // AJAX request 
        $.ajax({
          url: '{{url('admin/getSubcourse/')}}/'+id,
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
   
                $("#subCourse_id1").append(option); 
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
     $('#goal_id').change(function(){
       
        // Department id
        var id = $(this).val();
   
        // Empty the dropdown
        $('#course_id1').find('option').not(':first').remove();
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
   
                $("#course_id1").append(option); 
              }
            }
   
          }
       });
     });
   
   });
   
</script>
@stop