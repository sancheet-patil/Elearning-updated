@extends('layouts.teacher')
@section('css')
    <link href="{{ asset('assets/Ntheme') }}vendor/unicons-2.0.1/css/unicons.css" rel='stylesheet'>
    <link href="{{ asset('assets/Ntheme') }}/css/vertical-responsive-menu.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/css/night-mode.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{ asset('assets/Ntheme') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('assets/Ntheme') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Ntheme') }}/vendor/semantic/semantic.min.css">

    <style>
        .card {
            width: 50%;
            background-color: white;
            padding: 10px 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            /* 5px rounded corners */
        }

    </style>
@stop
@section('teacher')
    @if (session('success'))
        <div class="card-body">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}

    <center>
        <div class="container">
            <div class="row justify-content-lg-center justify-content-md-center">
                <div class="col-lg-6 col-md-8">
                    <div class="sign_form">
                        <div class="card-header">
                            <h3>Free Video</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('teacher.free_videos.save') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <?php $goals = \App\goals::all(); ?>
                                    <select class="_dlor1" name="goal_name" class="form-control" id="goal_id"
                                        onchange="getCourse(this)">
                                        <option>Select Goals</option>
                                        @foreach ($goals as $goal)
                                            <option value="{{ $goal->id }}">
                                                {{ $goal->goal_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('goal_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group row">
                                    <select class="_dlor1" id="course_id" name="course_name" onchange="getSubcourse(this)"
                                        class="form-control" disabled>
                                        <option value="-1">Select Course</option>
                                    </select>
                                </div>
                                @error('course_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group row">
                                    <select class="_dlor1" id="subCourse_id" name="subcourse_name" class="form-control"
                                        disabled>
                                        <option value="-1">Select SubCourse</option>
                                    </select>
                                </div>
                                @error('subcourse_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Video Link</label>
                                    <input type="text" value="{{ old('video_link') }}"
                                        class="form-control @error('video_link') is-invalid @enderror" name="video_link">
                                </div>
                                @error('video_link')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Video Duration</label>
                                    <input type="text" value="{{ old('video_duration') }}"
                                        class="form-control @error('video_duration') is-invalid @enderror"
                                        name="video_duration">
                                </div>
                                @error('video_duration')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Video Description</label>
                                    <textarea id="ckeditor" name="video_description" class="ckeditor form-control" rows="4"
                                        cols="35">{{ old('video_description') }}</textarea>
                                </div>
                                <input type="submit" value="Submit" class="create_btn_dash">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="table-responsive mt-30">
                    <table class="table ucp-table earning__table">
                        <thead class="thead-s">
                            <tr>
                                <th>SR. No.</th>
                                <th>Course Name</th>
                                <th>Subcourse Name</th>
                                <th>Uploaded Date</th>
                                <th>Link of Uploaded Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($free_videos as $key => $video)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $video->course->course_name }}</td>
                                    <td>{{ $video->subcourse->subCourses_name }}</td>
                                    <td>{{ date('d M Y', strtotime($video->created_at)) }}</td>
                                    <td>
                                        <a href="{{ $video->video_link }}" target="_blank">
                                            {{ $video->video_link }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- container close -->

    @stop
    @section('js')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
        <script src="https://malsup.github.com/jquery.form.js"></script>
        <script type="text/javascript">
            /* function validate(formData, jqForm, options) {
                                                                                                        var form = jqForm[0];
                                                                                                        if (!form.video_file.value) {
                                                                                                            alert('File not found');
                                                                                                            return false;
                                                                                                        }
                                                                                                    }

                                                                                                    (function() {

                                                                                                    var bar = $('.bar');
                                                                                                    var percent = $('.percent');
                                                                                                    var status = $('#status');

                                                                                                    $('form').ajaxForm({
                                                                                                        beforeSend: function() {
                                                                                                            status.empty();
                                                                                                            var percentVal = '0%';
                                                                                                            var posterValue = $('input[name=video_file]').fieldValue();
                                                                                                            bar.width(percentVal)
                                                                                                            percent.html(percentVal);
                                                                                                        },
                                                                                                        uploadProgress: function(event, position, total, percentComplete) {
                                                                                                            var percentVal = percentComplete + '%';
                                                                                                            bar.width(percentVal)
                                                                                                            percent.html(percentVal);
                                                                                                        },
                                                                                                        success: function() {
                                                                                                            var percentVal = 'Wait, Saving';
                                                                                                            bar.width(percentVal)
                                                                                                            percent.html(percentVal);
                                                                                                        },
                                                                                                        complete: function(xhr) {
                                                                                                            status.html(xhr.responseText);
                                                                                                            window.location.href = "/teacher/free_videos";
                                                                                                        }
                                                                                                    });

                                                                                                    })();*/

        </script>
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

                                    var option = "<option value='" + id + "'>" + name +
                                        "</option>";

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
                        "name": "document",
                        "groups": ["mode"]
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
