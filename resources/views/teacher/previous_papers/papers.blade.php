@extends('layouts.teacher')
@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

@stop
@section('teacher')

@if(session('success'))
   <div class="alert alert-info" role="alert" style="font-size:20px; text-align: center;"> 
        {{session('success')}}
   </div>
@endif   
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Blog</h3>
                <a href="{{route('upload')}}"><button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewgroup">Add New Blog</button></a>
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
                            <th><h5>Goal</h5></th>
                            <th><h5>Course</h5></th>
                            <th><h5>Subcourse</h5></th>
                            <th><h5>Blog Title</h5></th>
                            <th><h5>Blog Content</h5></th>
                            <th><h5>Image</h5></th>
                            <th class="text-right"><h5>Edit</h5></th>
                            <th class="text-right"><h5>Delete</h5></th>
                            <th class="text-right"><h5>Preview</h5></th>
                            
                            </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->

        </div>
    </div>




   


@stop
