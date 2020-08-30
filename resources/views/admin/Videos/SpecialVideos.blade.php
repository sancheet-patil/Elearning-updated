@extends('layouts.admin')
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

                     <input type="text" name="title" placeholder="Title" class="form-control">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-10"> 
                    
                  <input type="text" name="description" placeholder="Description" class="form-control">
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
            <?php $Teachers=App\Teacher::where('status',3)->get(); ?>
            <div class="col-xl-3 col-sm-6 col-12">
            
            <div class="card" style="width:150%;">
            
            <p>All Teachers <input type="checkbox" onClick="selectall(this)" name="All_Teachers[]"> </p> 
            @foreach($Teachers as $Teacher)
           <p> {{$Teacher->name}} <input type="checkbox" name="All_Teachers[]"></p>
             @endforeach
            
           
           
           </div>
           </div>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
           <div class="col-xl-3 col-sm-6 col-12" >
          
           <div class="card" style="width:150%;">
           <?php $Students=App\User::all(); ?>
           <p>All Students <input type="checkbox" onClick="selectallstudents(this)" name="All_students[]"> </p> 
           @foreach($Students as $Student)
           <p>{{$Students->name}} <input type="checkbox" name="All_students[]"></p>
            
            @endforeach
          
           </div>
           </div>
           </div>
            <input type="submit"  value="Submit" class="btn btn-success">
         </form>
      </div>
   </div>
</div>





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