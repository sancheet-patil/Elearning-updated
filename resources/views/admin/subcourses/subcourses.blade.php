@extends('layouts.admin')
@section('admin')
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Sub-Courses</h3>
                <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">
                    Create New Sub-Course
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

    <div class="row">
        <div class="col-md-12">
            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Sub-Courses List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Goal Name</th>
                                    <th>Course Name</th>
                                    <th>Sub-Course name</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_subcourse as $course)
                                    <tr>
                                        <?php
                                        $cour_name = \App\course::find($course->course_id);
                                        $goal_name = \App\goals::find($course->goal_id);
                                        ?>
                                        <td>{{ $goal_name->goal_name }}</td>
                                        <td>{{ $cour_name->course_name }}</td>
                                        <td>{{ $course->subCourses_name }}</td>
                                        <td class="text-right">
                                            <button class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#editcourse{{ $course->id }}">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deletecourse{{ $course->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="deletecourse{{ $course->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('admin.subCourse.delete') }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            are you sure to delete this course ?
                                                            <input type="hidden" class="form-control"
                                                                name="course_delete_id" value="{{ $course->id }}">
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
                                    <div class="modal fade" id="editcourse{{ $course->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update sub-Course</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form class="update_subcourse" id="update_subcourse{{ $course->id }}"
                                                    action="{{ route('admin.subCourse.update') }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                <label>SubCourse Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="subcourse_name"
                                                                    value="{{ $course->subCourses_name }}">
                                                                <input type="hidden" class="form-control"
                                                                    name="course_edit_id" value="{{ $course->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                <label>Free</label>
                                                                <select name="free" class="form-control">
                                                                    <option value="0"
                                                                        {{ $course->is_free ? '' : 'selected' }}>
                                                                        No</option>
                                                                    <option value="1"
                                                                        {{ $course->is_free ? 'selected' : '' }}>
                                                                        Yes</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                <label>Test Series Subcourse</label>
                                                                <select name="test_series_subcourse"
                                                                    class="test_series_subcourse form-control">
                                                                    <option value="0"
                                                                        {{ $course->test_series_subcourse ? '' : 'selected' }}>
                                                                        No</option>
                                                                    <option value="1"
                                                                        {{ $course->test_series_subcourse ? 'selected' : '' }}>
                                                                        Yes</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                <label>Video Subcourse</label>
                                                                <select name="video_subcourse" class="form-control">
                                                                    <option value="0"
                                                                        {{ $course->video_subcourse ? '' : 'selected' }}>
                                                                        No</option>
                                                                    <option value="1"
                                                                        {{ $course->video_subcourse ? 'selected' : '' }}>
                                                                        Yes</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group total_questions_div">
                                                            @if ($course->test_series_subcourse)
                                                                <div class="col-md-10 total_questions">
                                                                    <label>Total Questions</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $course->total_questions }}"
                                                                        name="total_questions">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $all_subcourse->links() !!}
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->
        </div>
    </div>
    <div class="modal fade" id="createnewcourses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create New Sub-Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="sub_course" action="{{ route('admin.subCourse.save') }}" method="post"
                    id="create_subcourse">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <?php $goals = \App\goals::all(); ?>
                            <div class="col-md-10">
                                <select id="goal_id" name="goal_name" class="form-control" required>
                                    <option value="">-- Select Goal name --</option>
                                    @foreach ($goals as $goal)
                                        <option value="{{ $goal->id }}">
                                            {{ $goal->goal_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <select id="course_id" name="course_name" class="form-control" required>
                                    <option value="">Course Name</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label>Sub-Course Name</label>
                                <input type="text" class="form-control" name="subcourse_name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label>Free</label>
                                <select name="free" class="form-control" required>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label>Test Series Subcourse</label>
                                <select name="test_series_subcourse" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <label>Video Subcourse</label>
                                <select name="video_subcourse" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group total_questions_div">
                            <div class="col-md-10 total_questions">
                                <label>Total Questions</label>
                                <input type="text" class="form-control" name="total_questions">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type='text/javascript'>
        $(document).ready(function() {

            // Department Change
            $('#goal_id').change(function() {

                // Department id
                var id = $(this).val();

                // Empty the dropdown
                $('#course_id').find('option').remove();
                // AJAX request
                $.ajax({
                    url: '{{ url('admin/getcourse/') }}' + '/' + id,
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
                    }
                });
            });
        });

    </script>
@stop
