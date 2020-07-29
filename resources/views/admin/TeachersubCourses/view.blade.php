@extends('layouts.admin') 
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Assigned Sub-Courses</h3>
         <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">Assign Sub-Course</button>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Assigned Sub-Courses List</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover table-center mb-0">
                  <thead>
                     <tr>
                        <th>Sub-Course Name</th>
                        <th>Teacher name</th>
                        <th class="text-right">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $id=0;?>
                     @foreach($TeacherSubCourses as $TeaCour)
                     <tr>
                        <?php $id++; 
                        $subCour_name=\ App\subcourses::find($TeaCour->subCourse_id); 
                        $teacherName = \App\Teacher::find($TeaCour->teacher_id) 
                        ?>
                        <td>{{$subCour_name->subCourses_name}}</td>
                        <td>{{$teacherName->name}}</td>
                        <td class="text-right">
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editcourse{{$TeaCour->id}}"><i class="fa fa-edit"></i> 
                           </button>
                        </td>
                     </tr>
                     <div class="modal fade" id="editcourse{{$TeaCour->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Update sub-Course</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form action="{{route('admin.teacher_assign_subCourses.update')}}" method="post">
                                 @csrf
                                 <div class="modal-body">
                                    <div class="form-group row">
                                       <div class="col-md-10">
                                          <?php $subcourses=DB::table('subcourses') ->select(array('id', 'subCourses_name')) ->get(); ?>
                                          <select name="subcourse_id" class="form-control">
                                             <option>{{$subCour_name->subCourses_name}}</option>
                                             @foreach($subcourses as $course)
                                             <option value="{{$course->id}}">{{$course->subCourses_name}}</option>
                                             @endforeach
                                          </select>
                                          <input type="hidden" class="form-control" name="edit_id" value="{{$TeaCour->id}}">
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
            <h5 class="modal-title" id="exampleModalLongTitle">Assign Sub-Course</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{route('admin.teacher_assign_subCourses.assign')}}" method="post">
            @csrf
            <div class="modal-body">
               <div class="form-group row">
                  <?php 
                  $subcourses=DB::table('subcourses') ->select(array('id', 'subCourses_name')) ->get(); 
                  ?>
                  <div class="col-md-10">
                     <select name="subcourse_id" class="form-control">
                        <option>-- Select SubCourse name --</option>
                        @foreach($subcourses as $course)
                        <option value="{{$course->id}}">{{$course->subCourses_name}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <?php $teachers=DB::table('teachers') ->select(array('id', 'name')) ->get(); ?>
                  <div class="col-md-10">
                     <select name="teacher_id" class="form-control">
                        <option>-- Select SubCourse name --</option>
                        @foreach($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                        @endforeach
                     </select>
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
@stop