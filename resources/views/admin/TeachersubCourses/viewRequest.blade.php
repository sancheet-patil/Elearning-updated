@extends('layouts.admin') 
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Request for Sub-Courses</h3>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Request Sub-Courses List</h4>
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
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approve{{$TeaCour->id}}"><i class="fa fa-check"></i></button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletecourse{{$TeaCour->id}}"><i class="fa fa-trash"></i></button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#disapprove{{$TeaCour->id}}"><i class="fa fa-times"></i></button>
                        </td>
                     </tr>
                                <div class="modal fade" id="approve{{$TeaCour->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher_assign_subCourses.approve')}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to approve this sub-course to {{$teacherName->name}}?
                                                        <input type="hidden" class="form-control" name="approve_id" value="{{$TeaCour->id}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Approve</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deletecourse{{$TeaCour->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher_assign_subCourses.delete')}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to delete this course ?
                                                        <input type="hidden" class="form-control" name="delete_id" value="{{$TeaCour->id}}">
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
                     
                                <div class="modal fade" id="disapprove{{$TeaCour->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher_assign_subCourses.disapprove')}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to Dis-approve this sub-course to {{$teacherName->name}}?
                                                        <input type="hidden" class="form-control" name="disapprove_id" value="{{$TeaCour->id}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Disapprove</button>
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
@stop