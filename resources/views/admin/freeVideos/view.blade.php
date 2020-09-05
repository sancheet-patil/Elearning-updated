@extends('layouts.admin')
@section('admin')
<div class="page-header">
   <div class="row">
      <div class="col-sm-12">
         <h3 class="page-title">Free Videos</h3>
      </div>
   </div>
</div>

<div class="row">
   <div class="col-md-12">
      <!-- Recent Orders -->
      <div class="card card-table">
         <div class="card-header">
            <h4 class="card-title">Free Videos List</h4>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-hover table-center mb-0">
                  <thead>
                     <tr>
                        <th>Sr.no</th>
                        <th>Course Name</th>
                        <th>Sub-course Name</th>
                        <th class="text-right">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php $id=0;?>
                     @foreach($free_videos as $video)
                     <tr>
                         <?php $subcourse_name=\App\subcourses::find($video->subcourse_id); 
                         $course_name = \App\course::find($video->course_id); $id++;?>
                         <td>{{$id}}</td>
                        <td>{{$subcourse_name->subCourses_name}}</td>
                        <td>{{$course_name->course_name}}</td>
                        <td class="text-right">
                           <a href="{{route('admin.free_videos.playvideo',['course_id' => $video->course_id,'subcourse_id'=>$video->subcourse_id])}}"><button class="btn btn-info btn-sm" ><i class="fa fa-eye"></i> </button></a>
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