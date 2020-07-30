@extends('layouts.admin')
@section('admin')
<div class="row">
@foreach($videos as $video)

<div class="col-12 col-md-6 col-lg-4 d-flex">
    <div class="card flex-fill">
    <video width="320" height="240" controls>
      <source src="{{asset($video->video_file)}}" type="video/mp4">
    Your browser does not support the video tag.
</video>
        <div class="card-header">
            <h5 class="card-title mb-0">By {{$teacher_name->name}}
            <button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#deletecourse{{$video->id}}"><i class="fa fa-trash"></i> </button>
            </h5>
        </div>
    </div>
</div>

<div class="modal fade" id="deletecourse{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('admin.free_videos.delete')}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      are you sure to delete this course ?
                                                        <input type="hidden" class="form-control" name="delete_id" value="{{$video->id}}">
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
@endforeach
</div>
@stop