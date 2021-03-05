@extends('layouts.admin')
@section('admin')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Course Videos</h3>
                <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">
                    Create Course Video
                </button>
            </div>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if (session('success'))
        <div class="card-body">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif


    <div class="row">
        <div class="col-md-12">
            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Course Videos List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>Sub-course Name</th>
                                    <th>Course Name</th>
                                    <th>Default</th>
                                    <th>English</th>
                                    <th>Hindi</th>
                                    <th>Marathi</th>
                                    <th>Uploaded Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id = 0; ?>
                                @foreach ($free_videos as $index => $video)
                                    <tr>
                                        <?php
                                        $subcourse_name = \App\subcourses::find($video->subcourse_id);
                                        $course_name = \App\course::find($video->course_id);
                                        $id++;
                                        ?>
                                        <td>{{ $index + $free_videos->firstItem() }}</td>
                                        <td>{{ $subcourse_name->subCourses_name }}</td>
                                        <td>{{ $course_name->course_name }}</td>
                                        <td>
                                            <a target="_blank" href="{{ $video->default_video_link }}">
                                                {{ substr($video->default_video_link, 0, 10) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ $video->english_video_link }}">
                                                {{ substr($video->english_video_link, 0, 10) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ $video->hindi_video_link }}">
                                                {{ substr($video->hindi_video_link, 0, 10) }}
                                            </a>
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ $video->marathi_video_link }}">
                                                {{ substr($video->marathi_video_link, 0, 10) }}
                                            </a>
                                        </td>
                                        <td>{{ date_format($video->created_at, 'd M Y') }}</td>
                                        <td class="text-right">
                                            {{-- <a title="View"
                                                href="{{ route('admin.free_videos.playvideo', ['course_id' => $video->course_id, 'subcourse_id' => $video->subcourse_id]) }}">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </a> --}}
                                            <button title="Edit" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#editcourse{{ $video->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button title="Delete" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deletecourse{{ $video->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deletecourse{{ $video->id }}" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Video</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('admin.video.delete') }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            Are you sure to delete this <b>Video</b> ?
                                                            <input type="hidden" class="form-control" name="delete_id"
                                                                value="{{ $video->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editcourse{{ $video->id }}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Video</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('admin.video.update') }}" method="post"
                                                    class="update_video" id="form{{ $video->id }}">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Video Name</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $video->name }}" name="video_name" required>
                                                            <input type="hidden" class="form-control" name="video_edit_id"
                                                                value="{{ $video->id }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Default Video Link</label>
                                                            <input type="text" class="form-control"
                                                                name="default_video_link"
                                                                value="{{ $video->default_video_link }}" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>English Video Link</label>
                                                            <input type="text" class="form-control"
                                                                name="english_video_link"
                                                                value="{{ $video->english_video_link }}" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hindi Video Link</label>
                                                            <input type="text" class="form-control" name="hindi_video_link"
                                                                value="{{ $video->hindi_video_link }}" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Marathi Video Link</label>
                                                            <input type="text" class="form-control"
                                                                name="marathi_video_link"
                                                                value="{{ $video->marathi_video_link }}" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Video Duration</label>
                                                            <input type="text" class="form-control" name="video_duration"
                                                                value="{{ $video->video_duration }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Free Video</label>
                                                            <input type="checkbox" name="free"
                                                                {{ $video->free == 1 ? ' checked' : '' }} />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Video Description</label>
                                                            <textarea id="ckeditor_edit" name="video_description" required
                                                                class="form-control" rows="4"
                                                                cols="35">{{ $video->video_description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $free_videos->links() }}
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->
        </div>
    </div>
    <div class="modal fade" id="createnewcourses">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Create Video
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.free_videos.save') }}" method="post" id="create_video">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <?php $goals = \App\goals::all(); ?>
                            <select class="_dlor1" name="goal_name" class="form-control" id="goal_id"
                                onchange="getCourse(this)" required>
                                <option>Select Goals</option>
                                @foreach ($goals as $goal)
                                    <option value="{{ $goal->id }}">
                                        {{ $goal->goal_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="_dlor1" id="course_id" name="course_name" class="form-control" disabled required>
                                <option value="-1">Select Course</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="_dlor1" id="subCourse_id" name="subcourse_name" class="form-control" disabled
                                required>
                                <option value="-1">Select SubCourse</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Video Name</label>
                            <input type="text" class="form-control" name="video_name" required />
                        </div>
                        <div class="form-group">
                            <label>Default Video Link</label>
                            <input type="text" class="form-control" name="default_video_link" required />
                        </div>
                        <div class="form-group">
                            <label>English Video Link</label>
                            <input type="text" class="form-control" name="english_video_link" />
                        </div>
                        <div class="form-group">
                            <label>Hindi Video Link</label>
                            <input type="text" class="form-control" name="hindi_video_link" />
                        </div>
                        <div class="form-group">
                            <label>Marathi Video Link</label>
                            <input type="text" class="form-control" name="marathi_video_link" />
                        </div>
                        <div class="form-group">
                            <label>Video Duration</label>
                            <input type="text" class="form-control" name="video_duration" required />
                        </div>
                        <div class="form-group">
                            <label>Free Video</label>
                            <input type="checkbox" name="free" />
                        </div>
                        <div class="form-group">
                            <label>Video Description</label>
                            <textarea id="ckeditor_new" name="video_description" required class="form-control" rows="4"
                                cols="35"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type='text/javascript'>
        // Department Change
        function getCourse(course) {
            //alert('Value:'+course.options[course.selectedIndex].value);
            // Department id
            var id = course.options[course.selectedIndex].value;

            // Empty the dropdown
            $('#course_id').find('option').not(':first').remove();
            // AJAX request
            $.ajax({
                url: '{{ url('teacher/getcourse/') }}' + '/' + id,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    var len = 0;
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }
                    if (len > 0) {
                        // Read data and create <option >
                        for (var i = 0; i < len; i++) {
                            var id = response['data'][i].id;
                            var name = response['data'][i].course_name;
                            var option = "<option value='" + id + "'>" + name + "</option>";
                            $("#course_id").append(option);
                        }
                    }
                    document.getElementById("course_id").disabled = false;
                }
            });
        }

    </script>
    <script type='text/javascript'>
        $(document).ready(function() {

            $("#course_id").change(function() {
                // Department id
                var id = $(this).val();
                // Empty the dropdown
                $('#subCourse_id').find('option').remove();
                // AJAX request
                $.ajax({
                    url: '{{ url('teacher/getSubcourse/') }}' + '/' + id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var len = 0;
                        if (response['data'] != null) {
                            len = response['data'].length;
                        }
                        if (len > 0) {
                            // Read data and create <option >
                            for (var i = 0; i < len; i++) {
                                var id = response['data'][i].id;
                                var name = response['data'][i].subCourses_name;
                                var option = "<option value='" + id + "'>" + name + "</option>";
                                $("#subCourse_id").append(option);
                            }
                        }
                    }
                });
                document.getElementById("subCourse_id").disabled = false;
            });
        });


        CKEDITOR.replace('ckeditor_new', {
            // Define the toolbar groups as it is a more accessible solution.
            toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                },
                {
                    "name": "links",
                    "groups": ["links"]
                },
                {
                    "name": 'paragraph',
                    "groups": ['list', 'indent', 'blocks', 'align', 'bidi']
                },
                {
                    "name": "styles",
                    "groups": ["styles"]
                }
            ],
            // Remove the redundant buttons from toolbar groups defined above.
            removeButtons: 'Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
        });


        CKEDITOR.replace('ckeditor_edit', {
            // Define the toolbar groups as it is a more accessible solution.
            toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                },
                {
                    "name": "links",
                    "groups": ["links"]
                },
                {
                    "name": 'paragraph',
                    "groups": ['list', 'indent', 'blocks', 'align', 'bidi']
                },
                {
                    "name": "styles",
                    "groups": ["styles"]
                }
            ],
            // Remove the redundant buttons from toolbar groups defined above.
            removeButtons: 'Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
        });

    </script>
@stop
