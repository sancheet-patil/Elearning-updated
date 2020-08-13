<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\courses;

class coursesController extends Controller
{
    public function courses()
    {
        $courses['data']=courses::all();
        return response()->json($courses);
    }

    public function course($id)
    {
        $course['data']=courses::where('goal_id',$id)->get();
        return response()->json($course);
    }
}
