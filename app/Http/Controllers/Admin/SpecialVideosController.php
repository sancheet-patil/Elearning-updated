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
        $special_videos = specialvideos::select('description','title')->distinct()->orderBy('id','DESC')->paginate(20);
        return view('admin.Videos.SpecialVideos',compact('special_videos'));
    }
    public function save(Request $request)
    {

        if($request->hasFile('video_file'))
        {
            $special_videos = new specialvideos();

           
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

            $special_videos->teachers =implode( ",", $request->get('All_Teachers'));
            $special_videos->students =implode( ",", $request->get('All_students'));

            
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
