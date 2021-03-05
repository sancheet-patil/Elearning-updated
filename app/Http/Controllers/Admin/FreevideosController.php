<?php

namespace App\Http\Controllers\Admin;

use App\free_video;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class FreevideosController extends Controller
{
    public function view()
    {
        //$free_videos = free_video::select('id', 'subcourse_id', 'course_id')->distinct()->orderBy('id', 'DESC')->paginate(20);
        $free_videos = free_video::orderBy('id', 'DESC')->paginate(20);
        return view('admin.freeVideos.view', compact('free_videos'));
    }

    public function getVideo($course_id, $subcourse_id)
    {
        $videos = free_video::where('course_id', $course_id)->get();
        $i = 0;
        $teacher_name = null;
        foreach ($videos as $video) {
            $teacher_name[$i++] = Teacher::select('name')->where('id', $video->teacher_id)->first();
        }
        return view('admin.freeVideos.playvideos', compact('videos', 'teacher_name'));
    }

    public function delete(Request $request)
    {
        $delete = free_video::where('id', $request->delete_id)->first();
        @unlink(public_path($delete->video_file));
        $delete->delete();
        return back()->with('success', 'Video Deleted!!!');
    }
}
