@extends('layouts.admin') 
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Sub-chapters </h3>
         <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">Add Syllabus</button>
         <a href="{{route('admin.syllabus.view')}}"><button class="btn btn-success btn-sm pull-left" data-toggle="modal" data-target="#createnewcourses">Back</button></a>
      </div>
   </div>
</div>
</div>
<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Sub-Chapters for {{$chapterName['chapterName']}}</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover table-center mb-0">
                  <thead>
                     <tr>
                        <th>SR.No</id>
                        <th>Sub-Chapter Name</th>
                        <th class="text-right">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $id=0;?>
                     @foreach($sub_chapters as $subChap)
                     <tr>
                        <?php $id++;?>
                        <td>{{$id}}</td>
                        <td>{{$subChap->SubchapterName}}</td>
                        <td class="text-right">
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editcourse{{$subChap->id}}"><i class="fa fa-edit"></i></button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletecourse{{$subChap->id}}"><i class="fa fa-trash"></i></button>
                        </td>
                     </tr>
                     <div class="modal fade" id="deletecourse{{$subChap->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form action="{{route('admin.syllabus.deleteSubchapter')}}" method="post">
                                 @csrf
                                 @method('DELETE')
                                 <div class="modal-body">
                                    <div class="form-group">
                                       are you sure to delete this course ?
                                       <input type="hidden" class="form-control" name="delete_id" value="{{$subChap->id}}">
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
                     <div class="modal fade" id="editcourse{{$subChap->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Update syllabus</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form method="post" action="{{route('admin.syllabus.updatesubChapter')  }}">
                                 @csrf
                                 @method('PUT')
                                 <div class="modal-body">
                                    <div class="form-group row">
                                       <div class="col-md-10">
                                          <label>Sub-Chapter Name</label>
                                          <input type="text" class="form-control" value="{{$subChap->SubchapterName}}" name="SubchapterName">
                                          <input type="hidden" value="{{$subChap->id}}" name="edit_id">
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
         @endforeach
         </tbody>
         </table>
      </div>
   </div>
</div>
</div>>
@stop