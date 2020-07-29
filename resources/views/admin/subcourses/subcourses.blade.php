@extends('layouts.admin')
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Sub-Courses</h3>
         <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">Create New Course</button>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Sub-Courses List</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover table-center mb-0">
                  <thead>
                     <tr>
                        <th>Sub-Course Name</th>
                        <th>Course name</th>
                        <th class="text-right">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($all_subcourse as $course)
                     <tr>
                         <?php $cour_name= \App\course::find($course->course_id);?>
                        <td>{{$cour_name->course_name}}</td>
                        <td>{{$course->subCourses_name}}</td>
                        <td class="text-right">
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editcourse{{$course->id}}"><i class="fa fa-edit"></i> </button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletecourse{{$course->id}}"><i class="fa fa-trash"></i> </button>
                        </td>
                     </tr>
                     <div class="modal fade" id="deletecourse{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form action="{{route('admin.subCourse.delete')}}" method="post">
                                 @csrf
                                 <div class="modal-body">
                                    <div class="form-group">
                                       are you sure to delete this course ?
                                       <input type="hidden" class="form-control" name="course_delete_id" value="{{$course->id}}">
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
                     <div class="modal fade" id="editcourse{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Update sub-Course</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form action="{{route('admin.subCourse.update')}}" method="post">
                                 @csrf
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <label>SubCourse Name</label>
                                       <input type="text" class="form-control" name="course_name" value="{{$course->subCourses_name}}">
                                       <input type="hidden" class="form-control" name="course_edit_id" value="{{$course->id}}">
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- /Recent Orders -->
   </div>
</div>
<div class="modal fade" id="createnewcourses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Sub-Course</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{route('admin.subCourse.save')}}" method="post">
            @csrf
            <div class="modal-body">
               <div class="form-group row">
                  <?php 
                     $courses= \App\course::all();
                     ?>
                  <div class="col-md-10">

                     <select name="course_name" class="form-control">
                        <option>-- Select Course name --</option>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->course_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label>Sub-Course Name</label>
                  <input type="text" class="form-control" name="subcourse_name" required>
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