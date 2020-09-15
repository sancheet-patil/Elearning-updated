@extends('layouts.teacher')
@section('teacher')
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
                                <input type="text" name="name" value="{{$teacher_details->name}}" class="form-control" required> 
                        
                            </div>
                        <div class="form-group col-md-4">
                                <label>Phone </label>
                                <input type="text" name="phone" value="{{$teacher_details->phone}}" class="form-control" required>
                        
                            </div>
                            <div class="form-group col-md-4">
                                <label>Private Coaching </label>
                                <input type="text" name="private_coaching" value="{{$teacher_details->private_coaching}}" class="form-control" required>
                        
                            </div>
                            <div class="form-group col-md-4">
                                <label>Government Teaching </label>
                                <input type="text" name="gov_teaching" value="{{$teacher_details->gov_teaching}}" class="form-control"required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>YouTube </label>
                                <input type="text" name="youtube" value="{{$teacher_details->youtube}}" class="form-control"required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telegram Admin </label>
                                <input type="text" name="telegram_admin" value="{{$teacher_details->telegram_admin}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Book Publish </label>
                                <input type="text" name="book_publish" value="{{$teacher_details->book_publish}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Start New Teaching </label>
                                <input type="text" name="stat_new_teaching" value="{{$teacher_details->stat_new_teaching}}" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Certification </label>
                                <input type="text" name="certification" value="{{$teacher_details->certification}}" class="form-control" required>
                            </div>
                             <div class="form-group col-md-4">
                                <label>Profile Image </label>
                                <input type="file" name="image" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                            <img src="{{asset('blogfiles\upload/'.$teacher_details->profile_image)}}" height="100px" width="100px"></td>
                             
                            </div>
                             
                                    


                
                            
                        </div>
                        <div class="row">
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
