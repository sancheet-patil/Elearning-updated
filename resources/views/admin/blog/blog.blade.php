@extends('layouts.admin')
@section('admin')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
@if(session('successMsg'))
   <div class="alert alert-info" role="alert" style="font-size:20px; text-align: center;"> 
        {{session('successMsg')}}
   </div>
@endif  

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Blog</h3>
                <a href="{{route('admin.createblog')}}"><button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewgroup">Add New Blog</button></a>
            </div>
        </div>
    </div>


     <div class="row">
        <div class="col-md-12">

            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Blog List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                            <tr>
                            <th><h5>Sr.No</h5></th>
                            <th><h5>Goal</h5></th>
                            <th><h5>Course</h5></th>
                            <th><h5>Subcourse</h5></th>
                            <th><h5>Blog Title</h5></th>
                            <th><h5>Image</h5></th>
                            <th><h5>Edit</h5></th>
                            <th><h5>Delete</h5></th>
                            <th><h5>Preview</h5></th>
                            
                            </tr>
                            </thead>
                            <tbody>
                                <?php $sr=1;?>
                                @foreach($blog as $blog)
                                <?php $goal=\App\goals::find($blog->goal);
                                    
                                
                                ?>
                                <tr style="font-size:15px">
                                    <td>{{$sr}}</td> 
                                    <td>{{$goal->goal_name}}</td>
                                    <?php $course=\App\course::find($blog->course);?>
                                    <td>{{$course->course_name}}</td>
                                    <?php   $subcourses=\App\subcourses::find($blog->subcourse);?>
                                    <td>{{$subcourses->subCourses_name}}</td>
                                    <?php $subcourse=\App\subcourses::find($blog->subcourse);?>
                                    
                                    
                                    <td>{{$blog->title}}</td>
                                    
                                    <td>
                                        <img src="{{asset('blogfiles\upload/'.$blog->image)}}" height="70px" width="70px"></td>
                                    
                                    <td>
                                       <a href="{{route('teacher.edit',$blog->id)}}"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editgoal"><i class="fa fa-edit"></i> </button></a>
                                   </td>
                                   <td>
                                       <form id="delete-form{{$blog->id}}" action="{{ route('admin.delete', $blog->id)}}" method="POST">
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
                                    <td><a href="{{route('teacher.singleblog',$blog->id)}}"><button class="btn-sm" data-toggle="modal" data-target="#deletegoal" style="background-color: #1e90ff; color: #fff; height: 35px"><i class="fa fa-eye" aria-hidden="true"></i></button></a></td>
                                </tr>
                                <?php $sr++;?>
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
