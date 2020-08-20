@extends('layouts.teacher')
@section('teacher')
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
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field() }}

                    <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <?php $goal=\App\goals::all();?>
                                <label>Select Goal</label>
                                <select class="form-control" name="goal">

                                    <option>Select Goals</option>
                                    @foreach($goal as $goal)
                                    <option value="{{$goal->id }}">{{$goal->goal_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Title</label>
                                <input type="text" name="title" value="" class="form-control" required> 
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Content </label>
                                
                                <textarea class="form-control" required cols="10" rows="12" name="content"></textarea>
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Blog Image</label>
                                <input type="file" name="image" value="" class="form-control" required>
                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-10">
                                <label>Date</label>
                                <input type="date"  name="date" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
