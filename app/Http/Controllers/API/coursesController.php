<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\course;

class coursesController extends Controller
{
    public function courses()
    {
        $courses['data']=course::with('goals')->get();
        return response()->json($courses);
    }

    public function course($id)
    {
        $course['data']=course::where('goal_id',$id)->get();
        return response()->json($course);
    }
}
