<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\free_videos;
use Youtube;
use App\subcourses;
use App\course;
use Illuminate\Support\Facades\Auth;

class uploadVideoController extends Controller
{
    public function save(Request $request)
    {

        if($request->hasFile('video_file'))
        {
            $teacher_videos = new free_videos();
            /*$image = $request->file('video_file');
            $imageName = Auth::guard('teacher')->user()->id.time().'.'.$image->getClientOriginalName('video_file');
            $directory = 'assets/free_video/';
            $imgUrl1  = $directory.$imageName;
            $image->move($directory,$imageName);*/
            $video = Youtube::upload($request->file('video_file')->getPathName(), [
                'title'       => course::find($request->input('course_name'))->course_name,
                'description' => subcourses::find($request->input('subcourse_name'))->subCourses_name
                
            ],'unlisted');
            $imgUrl1= $video->getVideoId();
            $teacher_videos->video_file = $imgUrl1;
            $teacher_videos->teacher_id=Auth::guard('teacher')->user()->id;
            $teacher_videos->goal_id = $request->goal_name;
            $teacher_videos->subcourse_id = $request->subcourse_name;
            $teacher_videos->course_id = $request->course_name;
            $teacher_videos->save();

            return back()->with('success','Video Successfully uploaded');
        }
        else{
            return back()->with('alert','Something Went Wrong');
        }
    }

    public function view()
    {
        $free_videos=free_videos::where('teacher_id',Auth::guard('teacher')->user()->id)->get();
        return view('teacher.free_videos.uploadVideos',compact('free_videos'));
    }

    public function delete(Request $request)
    {
        $delete = free_videos::where('id',$request->delete_id)->first();
        Youtube::delete($delete->video_file);
        return back()->with('success','Video Deleted!!!');
    }
}
