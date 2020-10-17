@extends('layouts.admin')
@section('admin')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Teachers Account</h3>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Teacher List</h4>
                </div>
                
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                            <tr>
                                <th>Teacher Name</th>
                                <th>Teacher Email</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        @if (!empty($teacher->profile_image))
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('assets/admin/')}}/img/teachers_profile.jpg" style="height: 50px;width: 50px" alt="User Image"></a>
                                            <a href="{{route('admin.teacherprofile',$teacher->id)}}" style="margin-left: 20px">{{$teacher->name}}</a>
                                        @else
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('assets/admin/')}}/img/teachers_profile.jpg" style="height: 50px;width: 50px" alt="User Image"></a>
                                            <a href="{{route('admin.teacherprofile',$teacher->id)}}" style="margin-left: 20px">{{$teacher->name}}</a>
                                        @endif

                                    </h2>
                                </td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->created_at}}</td>
                                <td>
                                   @if ($teacher->status == 1)
                                       Deactive
                                    @elseif ($teacher->status > 1 )
                                        Active
                                    @elseif ($teacher->status == 0)
                                        Dis-Approved

                                   @endif
                                </td>
                                <td class="text-right">
                                  
                                   <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteteacher{{$teacher->id}}"><i class="fa fa-trash"></i> </button>
                                    <a href="{{route('teacher.view.doc',$teacher->id)}}">

                                        <button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </button>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteteacher{{$teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Teacher</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.teacher.delete')}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to delete this {{$teacher->name}} Teacher ?
                                                        <input type="hidden" class="form-control" name="delete_id" value="{{$teacher->id}}">
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
