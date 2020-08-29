@extends('layouts.teacher')
@section('teacher')
@if (session('Success'))
<div class="card-body">
   <div class="alert alert-success" style="text-align: center">
      {{ session('Success') }}
   </div>
</div>
@endif
    <div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Upload Question Papers 
        </div>
        <div class="card-body">
            <form action="{{ route('teacher.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Upload Previous Papers</button>
                               <a class="btn btn-warning" href="{{ route('teacher.export') }}">Export Bulk Data</a>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
@stop