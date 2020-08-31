@extends('layouts.admin')
@section('admin')
             <div class="page-header">
        <div class="row">
            <div class="col-sm-10">
                <h3 class="page-title">Blog</h3>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align: center">Create Blog</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field() }}

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Content </label>
                                
                                <textarea class="form-control" required cols="10" rows="12" name="content">{{$blog->content}}</textarea>
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-4">
                                <label>Blog Image</label>
                                <input type="file" name="image" value="{{$blog ->image}}" class="form-control" required>
                        
                            </div>
                            <div class="col-md-2"></div>
                            <div class="form-group col-md-4">
                              <img src="{{asset('blogfiles\upload/'.$blog->image)}}" height="100px" width="100px">
                            </div>
    
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
  

@stop
