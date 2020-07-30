<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\free_videos;
use App\Teacher;

class FreevideosController extends Controller
{
    public function view()
    {
        $free_videos = free_videos::select('teacher_id')->distinct()->get();
        return view('admin.freeVideos.view',compact('free_videos'));
    }

    public function getVideo($id)
    {
        $videos = free_videos::where('teacher_id',$id)->get();
        $teacher_name = Teacher::where('id',$id)->first();
        return view('admin.freeVideos.playvideos',compact('videos','teacher_name'));
    }

    public function delete(Request $request)
    {
        $delete = free_videos::where('id',$request->delete_id)->first();
        @unlink(public_path($delete->video_file));
        $delete->delete();
        return back()->with('success','Video Deleted!!!');
    }
}
