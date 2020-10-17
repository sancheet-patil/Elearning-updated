<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\homeVideo;

class homescreenController extends Controller
{
    //
    public function data()
    {
        $video['data']=homeVideo::all();
        return response()->json($video);
    }
}
