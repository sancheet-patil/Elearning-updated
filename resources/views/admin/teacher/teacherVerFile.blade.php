@extends('layouts.admin')
@section('admin')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Teacher Verificatoin Data</h3>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Verification Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.teacher.acc.ver.update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Private Coaching </label>
                                <input type="text" name="private_coaching" value="{{$teacher->private_coaching}}" class="form-control">
                                <input type="hidden" name="teacher_id" value="{{$teacher->id}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Government Teaching </label>
                                <input type="text" name="gov_teaching" value="{{$teacher->gov_teaching}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>YouTube </label>
                                <input type="text" name="youtube" value="{{$teacher->youtube}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telegram Admin </label>
                                <input type="text" name="telegram_admin" value="{{$teacher->telegram_admin}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Book Publish </label>
                                <input type="text" name="book_publish" value="{{$teacher->book_publish}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Start New Teaching </label>
                                <input type="text" name="stat_new_teaching" value="{{$teacher->stat_new_teaching}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Certification </label>
                                <input type="text" name="certification" value="{{$teacher->certification}}" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Document Upload  </label>
                                <br>
                                <a href="{{asset($teacher->doc_file)}}" download="">
                                    <button type="button" class="btn btn-success">Download</button>
                                </a>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Demo Video </label>
                                <br>
                                <a href="{{asset($teacher->video_file)}}" download="">
                                    <button type="button" class="btn btn-success">Download</button>
                                </a>
                            </div>

                            <div class="form-group col-md-12">
                                <label>Account Status </label>
                                <select class="form-control" name="status">
                                    <option value="0" {{$teacher->status == 0 ? 'selected' : ''}}>DisApprove</option>
                                    <option value="1" {{$teacher->status == 1 ? 'selected' : ''}}>De-Active</option>
                                    <option value="2" {{$teacher->status == 2 ? 'selected' : ''}}>Active</option>

                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
