@extends('layouts.admin') 
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Request for Teacher Groups</h3>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Teacher Group List</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover table-center mb-0">
                  <thead>
                     <tr>
                        <th>Group Name</th>
                        <th>Status</th>
                        <th>Admin Name</th>
                        <th class="text-right">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $id=0;?>
                     @foreach($teacherGroups as $teacherGroup)
                     <tr>
                        <?php $id++; 
                        $Group_name=\ App\group_name::all(); 
                        $Admin_Name = \App\group_admins::all();
                        $teachers= \App\group_admins::all();
                        $teachers= \App\Teacher::all();
                        ?>
                       <td>{{$teacherGroup->group_name}}</td>
                       <td>@if ($teacherGroup->status == 1)
                                     Active
                                    @elseif ($teacherGroup->status == 0)
                                        Dis-Approved

                          @endif
                                </td><?php $Admin_name=App\group_admins::where('group_id',$teacherGroup->id)->get(); ?>
                                <td>@foreach($Admin_name as $adminNames)
                                        {{$adminNames->Admin_name}}<br>
                                        @endforeach</td>
                                
                        <td class="text-right">
                        
                           <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#approve{{$teacherGroup->id}}"><i class="fa fa-check"></i></button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletegroup{{$teacherGroup->id}}"><i class="fa fa-trash"></i></button>
                           <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#disapprove{{$teacherGroup->id}}"><i class="fa fa-times"></i></button>
                        </td>
                     </tr>
                                <div class="modal fade" id="approve{{$teacherGroup->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Approve Group</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher_GroupName.approve')}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to approve this teacher group to {{$teacherGroup->group_name}}?
                                                        <input type="hidden" class="form-control" name="approve_id" value="{{$teacherGroup->id}}">
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
                                <div class="modal fade" id="deletegroup{{$teacherGroup->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Group</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher_GroupName.delete')}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to delete this {{$teacherGroup->group_name}} Group ?
                                                        <input type="hidden" class="form-control" name="delete_id" value="{{$teacherGroup->id}}">
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
                     
                                <div class="modal fade" id="disapprove{{$teacherGroup->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Disapprove Group</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher_GroupName.disapprove')}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to Dis-approve this Teacher Group to {{$teacherGroup->group_name}}?
                                                        <input type="hidden" class="form-control" name="disapprove_id" value="{{$teacherGroup->id}}">
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