<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\free_videos;
use Illuminate\Support\Facades\Auth;

class uploadVideoController extends Controller
{
    public function save(Request $request)
    {

        if($request->hasFile('video_file'))
        {
            $teacher_videos = new free_videos();
            $image = $request->file('video_file');
            $imageName = Auth::guard('teacher')->user()->id.time().'.'.$image->getClientOriginalName('video_file');
            $directory = 'assets/free_video/';
            $imgUrl1  = $directory.$imageName;
            $image->move($directory,$imageName);
            $teacher_videos->video_file = $imgUrl1;
            $teacher_videos->teacher_id=Auth::guard('teacher')->user()->id;
            $teacher_videos->save();
            return back()->with('success','Video Uploaded');
        }
    }

    public function view()
    {
        return view('teacher.free_videos.uploadVideos');
    }
}
