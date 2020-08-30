<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\specialvideos;
use Youtube;
class SpecialVideosController extends Controller
{
    public function view()
    {
       
        return view('admin.videos.SpecialVideos');
    }
    public function save(Request $request)
    {

        if($request->hasFile('video_file'))
        {
            $special_videos = new specialvideos();
            $special_students = new specialvideos();
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
            $special_videos->video_file = $imgUrl1;
           
            $special_videos->title = $request->title;
            $special_videos->description = $request->description;

            $special_students->teachers =implode( ",", $request->All_Teachers);
            $special_students->students =implode( ",", $request->All_Teachers);

            $special_students->save();
            $special_videos->save();

            return back()->with('success','Video Successfully uploaded');
        }
        else{
            return back()->with('alert','Something Went Wrong');
        }
    }

    

    public function delete(Request $request)
    {
        $delete = specialvideos::where('id',$request->delete_id)->first();
        Youtube::delete($delete->video_file);
        return back()->with('success','Video Deleted!!!');
    }
}
