<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\course;
use App\subcourses;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function teacher()
    {
    	$teacher=Teacher::all();
        return view('teacher', compact('teacher'));
    }
    public function course($id)
    {
    	$goal=course::where('goal_id',$id)->get();
        return view('frontend.courses', compact('goal'));
    }
     public function subcourses($id)
    {
    	$subcourses=subcourses::where('course_id',$id)->get();
        return view('frontend.subcourses', compact('subcourses'));
    }
    public function teacherdetail($id)
    {
        $teacherdetail=Teacher::where('id',$id)->get();
        return view('frontend.teacher_details',compact('teacherdetail'));
    }
   public function about()
    {
        return view('frontend.about');
    }
}
