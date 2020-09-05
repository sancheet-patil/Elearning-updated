@extends('layouts.teacher')

@section('css')
<style>
.card {
   width:35%;
    background-color: white;
    padding: 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 10px; /* 5px rounded corners */

}

.san{
   background-color:#000;
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
<div>
  @if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach



@endif
<center>

<form method="post" action="{{ route('teacher.group.request')  }}">
            @csrf
           
            <div class="card">
            
            <div class="modal-body">
               <input type="text" class="form-control" placeholder="Enter Group Name" id="group_id" name="group_name">
            </div>



            <button type="submit" class="btn btn-success">Send Request</button>
            </div> 
         </form>
         </div>
         </center>
@stop

@section('js')



@stop
