@extends('layouts.teacher')
@section('css')


@stop
@section('teacher')

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Create groups</h3>
                 <a href="{{route('teacher.group.view')}}"><button class="btn btn-success btn-sm pull-right" >Request for Group</button></a>
            </div>
        </div>
    </div>

    @if (session('success'))
    <div class="card-body">
        <div class="alert alert-success">
         <h5>  {{ session('success') }}</h5> 
        </div>
    </div>
   @endif
   @if (session('alert'))
    <div class="card-body">
        <div class="alert alert-danger">
         <h5>  {{ session('alert') }}</h5> 
        </div>
    </div>
   @endif

    <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Group List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                            <tr>
                            
                            <th>Group Name</th>
                            <th>Admin Name</th>
                            
                            <th>Created at</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                            @foreach($Group_names as $G_name)
                           
                                <tr>
                                <?php 
                                 $Group_names=App\group_name::where('status',1)->get(); 
                                 $Group_admin= \App\group_admins::all();
                                 $teachers= \App\Teacher::all();
                                ?>
                                    <td>{{$G_name->group_name}}</td>
                                    <?php $Admin_name=App\group_admins::where('group_id',$G_name->id)->get(); ?>
                                    <td>@foreach($Admin_name as $adminNames)
                                        {{$adminNames->Admin_name}}<br>
                                        @endforeach
                                    </td>
                                    <td>{{$G_name->created_at}}</td>
                                    <td class="text-right">
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#groupadmin{{$G_name->id}}"><i class="fa fa-user"></i></button>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#newgroupmembers{{$G_name->id}}"><i class="fa fa-users"></i></button>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editgroup{{$G_name->id}}"><i class="fa fa-edit"></i> </button>
                                    <button class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletegroup{{$G_name->id}}"><i class="fa fa-trash"></i> </button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="editgroup{{$G_name->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Update Group</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('teacher.group.update')}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label><h3>Group Name</h3></label>
                                                        <input type="text" class="form-control" name="group_name" value="{{$G_name->group_name}}">
                                                        <input type="hidden" class="form-control" name="group_edit_id" value="{{$G_name->id}}">
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
                                <div class="modal fade" id="deletegroup{{$G_name->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Group</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('teacher.group.delete')}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                    <h5>are you sure to delete this {{$G_name->group_name}} group ?</h5>  
                                                        <input type="hidden" class="form-control" name="group_delete_id" value="{{$G_name->id}}">
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
                                   
                                 <!-- / Add Group Members -->
                                 <div class="modal fade" id="newgroupmembers{{$G_name->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Add Group Members</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('teacher.groupmembers.save')}}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            <div class="modal-body">
                                             <?php 
                     
                                                $teachers= \App\Teacher::all();
                                             ?>
                                                   <div class="form-group">
                                                   <select name="group_name" id="" class="form-control" >
                       
                                                   <option value="{{$G_name->id}}">{{$G_name->group_name}}</option>
                       
                                                   </select><br>
                        
                                                   <select multiple name="group_members" id="" class="form-control" >
                                                   <option>-- Select Group Members --</option>
                                                    @foreach($teachers as $teacher)
                                                   <option  value="{{$teacher->name}}">{{$teacher->name}}</option>
                                                    @endforeach
                                                   </select>
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
                                <!-- /Group Admin -->
                                 <div class="modal fade" id="groupadmin{{$G_name->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Select Group Admin</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('teacher.groupadmin.save')}}" method="post" >
                                              @csrf
                                                <div class="modal-body">
                                               
                                               <div class="form-group">
                                             
                                               
                                                 <select name="group_name" id="" class="form-control" enctype="multipart/form-data">
                        
                       
                                                <option value="{{$G_name->id}}">{{$G_name->group_name}}</option>
                        
                                                </select><br>

                                        
                                                 <?php 
                                                    $Group_members=App\group_members::where('group_id',$G_name->id)->get(); 
                                                  ?>
                                                   @foreach($Group_members as $members)
                                                   <input type="hidden" value="{{$members->id}}" name="group_members" class="form-control">
                                                    
                                                   @endforeach
                                               
                        
                                                 <select  multiple="multiple"  name="group_admin" id="" class="form-control" >
                                                 <option>-- Select Group Admin --</option>
                                                 <?php 
                                                    $Group_members=App\group_members::where('group_id',$G_name->id)->get(); 
                                                ?>
                                                   @foreach($Group_members as $members)
                                                    <option  value="{{$members->group_members}}">{{$members->group_members}}</option>
                                                   @endforeach
                                                </select><br>
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
            <!-- /Recent Orders -->

        </div>
    </div>



    
 
    
    

@stop
