@extends('layouts.admin')
@section('css')
<style>
   .card {
   width:90%;
   background-color: white;
   padding: 10px 10px;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   border-radius: 10px; /* 5px rounded corners */
   }
</style>
<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
@stop
@section('admin')
@if (session('success'))
<div class="card-body">
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
</div>
@endif
<center>
<div class="container" style="width:50%;">
   <div class="card">
      <div class="card-header">
         <h2>Special Videos</h2>
      </div>
      <div class="card-body">
         <form method="POST" action="{{ route('admin.Specialvideos.save')  }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                  
                  <div class="col-md-10">

                     <input type="text" id="title_id" name="title" placeholder="Title" class="form-control">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10"> 
                    
                  <input type="text" id="description_id" name="description" placeholder="Description" class="form-control">
                  </div>
               </div>
            
            <div class="form-group">
               <input name="video_file" id="poster" type="file" class="form-control" required><br/>
               <div class="progress">
                  <div class="progress bar progress-lg">
                     <div class="progress-bar bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="percent">0%</div >
               </div>
               
            </div>
            <div class="row">
            <?php $Teachers=App\Teacher::where('status',4)->get(); ?>
            <div class="col-xl-3 col-sm-6 col-12">
            
         <div class="card" style="width:150%;">
            
            <p>All Teachers <input type="checkbox" onClick="selectall(this)" > </p> 
            @foreach($Teachers as $Teacher)
           <p> {{$Teacher->}}<input type="checkbox" ></p>
            @endforeach
            
           
           
           </div>
           </div>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
           <div class="col-xl-3 col-sm-6 col-12" >
          
           <div class="card" style="width:150%;">
           <?php $Students=App\User::all(); ?>
           <p>All Students <input type="checkbox" onClick="selectallstudents(this)" > </p> 
           @foreach($Students as $Student)
           <p>{{$Students->}} <input type="checkbox" ></p>
            
            @endforeach
          
           </div>
           </div>
           </div>
            <input type="submit"  value="Submit" class="btn btn-success">
         </form>
      </div>
   </div>
<div class="row">
   @foreach($special_videos as $video)
<div class="col-12 col-md-6 col-lg-4 d-flex">
   <div class="card flex-fill">
      <iframe width="360" height="240"
            src="https://www.youtube.com/embed/{{$video->video_file}}">
      </iframe>
      <div class="card-header">
         <h5>Title: {{App\specialvideos::select('title')->where('title',$video->title)->first()->title}}
         </h5>
      </div>
      <div class="card-body">
      Description: {{App\specialvideos::select('description')->where('description',$video->description)->first()->description}}  <button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#deletecourse{{$video->id}}"><i class="fa fa-trash"></i> </button>
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
         <form action="{{route('admin.Specialvideos.delete')}}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-body">
               <div class="form-group">
                  are you sure to delete this course video ?
                  <input type="hidden" class="form-control" name="delete_id" value="{{$video->id}}">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-danger">Delete</button>
            </div>
         </form>
      </div>
   </div>
</div>
@endforeach
@stop
@section('js')
<script>function selectallstudents(source) {
  checkboxes = document.getElementsByName('All_students[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}</script>
<script>function selectall(source) {
  checkboxes = document.getElementsByName('All_Teachers[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}</script>
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



@stop