@extends('layouts.admin')
@section('admin')
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
            <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 <select name ="year" class="form-control">
                       <option>Select Year</option>
                      @for ($year = 1950; $year <= 2052 ; $year++)                  
                      <option value = "{{ $year }}">{{ $year }}</option>                
                     @endfor
                  </select>
                  <br>
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Upload Previous Papers</button>
                    <a class="btn btn-success" href="{{ route('admin.export') }}">Download Template</a>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
@stop