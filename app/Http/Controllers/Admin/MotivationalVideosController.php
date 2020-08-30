<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\motivationalvideos;
use Youtube;
class MotivationalVideosController extends Controller
{
    public function view()
    {
       
        return view('admin.videos.MotivationalVideos');
    }
    public function save(Request $request)
    {

        if($request->hasFile('video_file'))
        {
            $motivational_videos = new motivationalvideos();
            
            /*$image = $request->file('video_file');
            $imageName = Auth::guard('teacher')->user()->id.time().'.'.$image->getClientOriginalName('video_file');
            $directory = 'assets/free_video/';
            $imgUrl1  = $directory.$imageName;
            $image->move($directory,$imageName);*/
            $video = Youtube::upload($request->file('video_file')->getPathName(), [
                'title'       =>$request->input('title'),
                'description' =>$request->input('description')
                
            ],'unlisted');
            $imgUrl1= $video->getVideoId();
            $motivational_videos->video_file = $imgUrl1;
           
            $motivational_videos->title = $request->title;
            $motivational_videos->description = $request->description;
            $motivational_videos->save();

            return back()->with('success','Video Successfully uploaded');
        }
        else{
            return back()->with('alert','Something Went Wrong');
        }
    }

    

    public function delete(Request $request)
    {
        $delete = motivational_videos::where('id',$request->delete_id)->first();
        Youtube::delete($delete->video_file);
        return back()->with('success','Video Deleted!!!');
    }
}
