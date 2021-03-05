@extends('layouts.admin')
@section('admin')
    @if (session('success'))
        <div class="card-body">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Test Series</h3>
                {{-- <a href="{{ route('teacher.UploadImageQuestion') }}"> --}}
                <a href="#">
                    <button class="btn btn-primary">
                        Upload Image question
                    </button>
                </a>
                <a href="{{ route('teacher.testexport') }}">
                    <button class="btn btn-primary" style="float: right;">
                        Download Template
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <center>
            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <div class="card-header">
                        Upload Test Series
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Test Series Name</label>
                                <input type="text" class="form-control @error('test_series_name') is-invalid @enderror"
                                    name="test_series_name" value="{{ old('test_series_name') }}" required>
                            </div>
                            @error('test_series_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group row">
                                <?php $goals = \App\goals::all(); ?>
                                <select class="_dlor1" id="goal_id" name="goal_name" class="form-control"
                                    onchange="getCourse(this)">
                                    <option>Select Goals</option>
                                    @foreach ($goals as $goal)
                                        <option value="{{ $goal->id }}">
                                            {{ $goal->goal_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <select class="_dlor1" id="course_id" name="course_name" onchange="getSubcourse(this)"
                                    class="form-control" disabled>
                                    <option value="-1">Select Course</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select class="_dlor1" id="subCourse_id" name="subcourse_name" class="form-control"
                                    disabled>
                                    <option value="-1">Select SubCourse</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Time For each Question(in Min)</label>
                                <input type="text" class="form-control @error('time') is-invalid @enderror" name="time"
                                    value="{{ old('time') }}" required>
                            </div>
                            @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Question Mark</label>
                                <input type="text" class="form-control @error('question_marks') is-invalid @enderror"
                                    value="{{ old('question_marks') }}" name="question_marks">
                            </div>
                            @error('question_marks')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>Negative marks for each question</label>
                                <input type="text" class="form-control @error('negative_marks') is-invalid @enderror"
                                    value="{{ old('negative_marks') }}" name="negative_marks">
                            </div>
                            @error('negative_marks')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>General Instuctions</label>
                                <textarea id="ckeditor" name="general_instructions" class="form-control" rows="4"
                                    cols="35">{{ old('general_instructions') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Your File</label>
                                <input type="file" name="file" class="form-control" required />
                            </div>
                            <button class="btn btn-primary">Upload test Series</button>
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>
@stop

@section('js')
    <script type='text/javascript'>
        // course Change
        function getCourse(course) {
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

        CKEDITOR.replace('ckeditor', {
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
