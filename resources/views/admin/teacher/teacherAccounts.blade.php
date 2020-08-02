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
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset($teacher->profile_image)}}" style="height: 50px;width: 50px" alt="User Image"></a>
                                            <a href="profile.html" style="margin-left: 20px">{{$teacher->name}}</a>
                                        @else
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="https://www.speakersbank.org.au/wp-content/uploads/2016/01/photo-icon.png" style="height: 50px;width: 50px" alt="User Image"></a>
                                            <a href="profile.html" style="margin-left: 20px">{{$teacher->name}}</a>
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
                                   <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </button>
                                   <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </button>
                                    <a href="{{route('teacher.view.doc',$teacher->id)}}">

                                        <button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> </button>
                                    </a>
                                </td>
                            </tr>
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
