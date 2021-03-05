<?php

namespace App\Http\Controllers\API;

use App\free_video;
use App\Http\Controllers\Controller;

class freevideosController extends Controller
{
    public function videos($goal_id)
    {
        //$videos['data']= free_videos::all();
        $videos['data'] = free_video::where('goal_id', $goal_id)->get();
        foreach ($videos['data'] as &$video) {
            $video->video_file = url($video->video_file);
            //return $video->video_file;
        }
        return response()->json($videos);
    }

    public function all_course_videos()
    {
        $videos = free_video::all();
        return response()->json($videos);
    }

}
