<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subcourses;

class subcourseController extends Controller
{
    public function subcourses()
    {
        $subcourses = subcourses::with('goals','course')->get()
            ->map(function ($subcourse) {
                $subcourse->total_marks =  $subcourse->question_mark * $subcourse->total_questions;
                return $subcourse;
            });
        return response()->json($subcourses);
    }

    public function subcourse($id)
    {
        $subcourse = subcourses::where('course_id',$id)->get();
        return response()->json($subcourse);
    }
}
