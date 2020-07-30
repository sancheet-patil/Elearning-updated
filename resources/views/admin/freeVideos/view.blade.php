@extends('layouts.admin')
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Sub-Courses</h3>
         <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createnewcourses">Create New Course</button>
      </div>
   </div>
</div>
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
                        <th>Sr.no</th>
                        <th>Teacher Name</th>
                        <th class="text-right">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php $id=0;?>
                     @foreach($free_videos as $video)
                     <tr>
                         <?php $teacher_name= \App\Teacher::find($video->teacher_id);  $id++?>
                         <td>{{$id}}</td>
                        <td>{{$teacher_name->name}}</td>
                        <td class="text-right">
                           <a href="{{route('admin.free_videos.playvideo',$video->teacher_id)}}"><button class="btn btn-info btn-sm" ><i class="fa fa-eye"></i> </button></a>
                        </td>
                     </tr>
                    
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <!-- /Recent Orders -->
   </div>
</div>

@stop