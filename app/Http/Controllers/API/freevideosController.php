<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\free_videos;
class freevideosController extends Controller
{
    public function videos()
    {
        $videos['data']= free_videos::all();
        foreach($videos['data'] as &$video)
        {
            $video->video_file=url($video->video_file);
            //return $video->video_file;
        }
        return response()->json($videos);
    }
}
