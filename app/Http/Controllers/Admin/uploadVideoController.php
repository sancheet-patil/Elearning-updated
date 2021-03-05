<?php

namespace App\Http\Controllers\Admin;

use App\free_video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Youtube;

class uploadVideoController extends Controller
{
    public function save(Request $request)
    {
        $this->validate($request, [
            'goal_name' => 'required',
            'course_name' => 'required',
            'subcourse_name' => 'required',
            'video_name' => 'required',
            'default_video_link' => 'required',
            'video_duration' => 'required|regex:/^[0-9]{1,2}+(\.[0-9]{1,2})?$/',
        ]);

        $teacher_videos = new free_video();

        /*$image = $request->file('video_file');
        $imageName = Auth::guard('teacher')->user()->id.time().'.'.$image->getClientOriginalName('video_file');
        $directory = 'assets/free_video/';
        $imgUrl1  = $directory.$imageName;
        $image->move($directory,$imageName);*/
        // $video = Youtube::upload($request->file('video_file')->getPathName(), [
        //     'title' => course::find($request->input('course_name'))->course_name,
        //     'description' => subcourses::find($request->input('subcourse_name'))->subCourses_name,
        // ]);

        //$imgUrl1 = $video->getVideoId();
        //$teacher_videos->video_file = $imgUrl1;

        $teacher_videos->teacher_id = Auth::guard('admin')->user()->id;
        $teacher_videos->goal_id = $request->goal_name;
        $teacher_videos->subcourse_id = $request->subcourse_name;
        $teacher_videos->course_id = $request->course_name;
        if ($request->has('free')) {
            $teacher_videos->free = 1;
        }
        $teacher_videos->name = $request->video_name;
        $teacher_videos->default_video_link = $request->default_video_link;
        $teacher_videos->english_video_link = $request->english_video_link;
        $teacher_videos->hindi_video_link = $request->hindi_video_link;
        $teacher_videos->marathi_video_link = $request->marathi_video_link;
        $teacher_videos->video_duration = $request->video_duration;
        $teacher_videos->video_description = $request->video_description;

        $teacher_videos->save();

        //if ($request->hasFile('video_file')) {
        return back()->with('success', 'Video Successfully uploaded');
        // } else {
        //     return back()->with('alert', 'Something Went Wrong');
        // }
    }

    public function view()
    {
        $free_videos = free_video::with('course', 'subcourse')->where('teacher_id', Auth::guard('teacher')->user()->id)->get();
        return view('teacher.free_videos.uploadVideos', compact('free_videos'));
    }

    public function delete(Request $request)
    {
        $delete = free_video::where('id', $request->delete_id)->first();
        Youtube::delete($delete->video_file);
        return back()->with('success', 'Video Deleted!!!');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'video_name' => 'required',
            'default_video_link' => 'required',
            'video_duration' => 'required|regex:/^[0-9]{1,2}+(\.[0-9]{1,2})?$/',
        ]);

        $update_video = free_video::where('id', $request->video_edit_id)->first();
        $update_video->name = $request->video_name;

        if ($request->has('free')) {
            $update_video->free = 1;
        } else {
            $update_video->free = 0;
        }

        $update_video->default_video_link = $request->default_video_link;
        $update_video->english_video_link = $request->english_video_link;
        $update_video->hindi_video_link = $request->hindi_video_link;
        $update_video->marathi_video_link = $request->marathi_video_link;

        $update_video->video_duration = $request->video_duration;
        $update_video->video_description = $request->video_description;

        $update_video->save();
        return back()->with('success', 'Video Successfully Updated');
    }
}
