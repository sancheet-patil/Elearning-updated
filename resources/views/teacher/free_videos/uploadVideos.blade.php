@extends('layouts.teacher')

@section('css')
<style>
.card {
   width:50%;
    background-color: white;
    padding: 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 10px; /* 5px rounded corners */

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

<center>
<div>
<div class="container">
    <div class="card">
      <div class="card-header">
        <h2>Free Video</h2>
      </div>
      <div class="card-body">
            <form method="POST" action="{{ route('teacher.free_videos.save')  }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input name="video_file" id="poster" type="file" class="form-control"><br/>
                    <div class="progress">
                    <div class="progress bar progress-lg">
													<div class="progress-bar bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
                        <div class="percent">0%</div >
                    </div>
                    <input type="submit"  value="Submit" class="btn btn-success">
                </div>
            </form>    
      </div>
    </div>
</div>
@stop
@section('js')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
 
<script type="text/javascript">
 
    function validate(formData, jqForm, options) {
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
        beforeSubmit: validate,
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
     
    })();
</script>
@stop
