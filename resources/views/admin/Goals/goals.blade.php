@extends('layouts.admin')
@section('admin')
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach



@endif
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Create Goals</h3>
                <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewgoal">Create New Goal</button>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Goal List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                            <tr>
                                <th>Goal Name</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($all_goals as $goals)
                                <tr>
                                    <td>{{$goals->goal_name}}</td>
                                    <td class="text-right">
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editgoal{{$goals->id}}"><i class="fa fa-edit"></i> </button>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletegoal{{$goals->id}}"><i class="fa fa-trash"></i> </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="deletegoal{{$goals->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete goal</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.goal.delete')}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to delete this goal ?
                                                        <input type="hidden" class="form-control" name="goal_delete_id" value="{{$goals->id}}">
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


                                <div class="modal fade" id="editgoal{{$goals->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Update goal</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.goal.update')}}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>goal Name</label>
                                                        <input type="text" class="form-control" name="goal_name" value="{{$goals->goal_name}}">
                                                        <input type="hidden" class="form-control" name="goal_edit_id" value="{{$goals->id}}">
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




    <div class="modal fade" id="createnewgoal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create New Goal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.goal.save')}}" method="post">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Goal Name</label>
                        <input type="text" class="form-control" name="goal_name">
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
