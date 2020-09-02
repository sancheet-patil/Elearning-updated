@extends('layouts.teacher')
@section('teacher')
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
                <h3 class="page-title">Teacher Profile Data</h3>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('teacher.teacherProfile')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                        <div class="form-group col-md-4">
                                <label>Teacher Name </label>
                                <input type="text" name="name" value="{{$teacher_details->name}}" class="form-control" > 
                        
                            </div>
                        <div class="form-group col-md-4">
                                <label>Phone </label>
                                <input type="text" name="phone" value="{{$teacher_details->phone}}" class="form-control" >
                        
                            </div>
                            <div class="form-group col-md-4">
                                <label>Private Coaching </label>
                                <input type="text" name="private_coaching" value="{{$teacher_details->private_coaching}}" class="form-control" >
                        
                            </div>
                            <div class="form-group col-md-4">
                                <label>Government Teaching </label>
                                <input type="text" name="gov_teaching" value="{{$teacher_details->gov_teaching}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>YouTube </label>
                                <input type="text" name="youtube" value="{{$teacher_details->youtube}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telegram Admin </label>
                                <input type="text" name="telegram_admin" value="{{$teacher_details->telegram_admin}}" class="form-control" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>Book Publish </label>
                                <input type="text" name="book_publish" value="{{$teacher_details->book_publish}}" class="form-control" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>Start New Teaching </label>
                                <input type="text" name="stat_new_teaching" value="{{$teacher_details->stat_new_teaching}}" class="form-control" >
                            </div>
                            <div class="form-group col-md-4">
                                <label>Certification </label>
                                <input type="text" name="certification" value="{{$teacher_details->certification}}" class="form-control" >
                            </div>

                           <div class="form-group col-md-4">
                                <label>having equipment </label>
                                <input type="text" name="equipment" value="{{$teacher_details->equipment}}" class="form-control" >
                            </div>
                           

                           

                            <div class="form-group col-md-2">
                                <button class="btn btn-primary btn-block" type="submit">Update</button>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
