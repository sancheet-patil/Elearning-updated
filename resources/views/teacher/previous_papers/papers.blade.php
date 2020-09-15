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
                 <select name ="year" class="form-control">
                       <option>Select Year</option>
                      @for ($year = 1950; $year <= 2052 ; $year++)                  
                      <option value = "{{ $year }}">{{ $year }}</option>                
                     @endfor
                  </select>
                  <br>
                <input type="file" name="file" class="form-control">
                <br>
                <button class="create_btn_dash">Upload Previous Papers</button>
                <a  href="{{ route('teacher.export') }}"><button class="create_btn_dash">Download Template</button></a>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>
@stop