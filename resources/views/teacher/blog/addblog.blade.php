@extends('layouts.teacher')
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

@stop
@section('teacher')

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Blog</h3>
                <a href="{{route('blog.createblog')}}"><button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewgroup">Add New Blog</button></a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center;">Blog List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                            <tr>
                            <th><h5 style="text-align: center;">Blog Id</h5></th>
                            <th><h5 style="text-align: center;">Blog Goal</h5></th>
                            <th><h5 style="text-align: center;">Blog Title</h5></th>
                            <th><h5 style="text-align: center;">Blog Content</h5></th>
                            <th><h5 style="text-align: center;">Image</h5></th>
                            <th><h5 style="text-align: center;">Date</h5></th>
                            <th class="text-right" style="text-align: center;"><h5>Edit</h5></th>
                            <th class="text-right" style="text-align: center;"><h5>Delete</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($blog as $blog)
                                <?php $goal=\App\goals::find($blog->goal)?>
                                <tr style="font-size:15px"> 
                                    <td style="text-align: center;">{{$blog->id}}</td>
                                    <td style="text-align: center;">{{$goal->goal_name}}</td>
                                    <td style="text-align: center;">{{$blog->title}}</td>
                                    <td style="text-align: center;">{{$blog->content}}</td>
                                    <td style="text-align: center;">
                                        <img src="{{asset('blogfiles\upload/'.$blog->image)}}" height="70px" width="70px"></td>
                                    <td style="text-align: center;">{{$blog->date}}</td>
                                    <td class="text-right" style="text-align: center;">
                                       <a href="{{route('blog.edit',$blog->id)}}"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editgoal"><i class="fa fa-edit"></i> </button></a>
                                   </td>
                                   <td class="text-right" style="text-align: center;">
                                       <form id="delete-form{{$blog->id}}" action="{{ route('delete', $blog->id)}}" method="POST">
                                           {{csrf_field()}}
                                           {{method_field('delete')}}

                                       </form> 
                                        <button onclick="if (confirm('Are you sure to delete this data')){event.preventDefault();
                                        document.getElementById('delete-form{{$blog->id}}').submit();
                                    }
                                    else
                                    {
                                        event.preventDefault();

                                    }"
                                        class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletegoal"><i class="fa fa-trash"></i> </button>
                                           
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
