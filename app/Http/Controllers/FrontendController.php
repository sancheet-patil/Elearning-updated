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
    
    public function about()
    {
    	$teacher=Teacher::all();
        return view('frontend.about', compact('teacher'));
    }
    public function teacherdetails($id)
    {
        $teacherdetails=Teacher::where('id',$id)->get();
        return view('frontend.teacher_details', compact('teacherdetails'));
    }
    public function goal($id)
    {
    	$goal=course::where('goal_id',$id)->get();
        return view('frontend.courses', compact('goal'));
    }
     public function subcourses($id)
    {
    	$subcourses=subcourses::where('course_id',$id)->get();
        return view('frontend.subcourses', compact('subcourses'));
    }
     public function course()
    {
        $course=course::all();
        return view('frontend.course_all', compact('course'));
    }
     public function subcoursesdetails($id)
    {
        $subcoursedetails=subcourses::where('id',$id)->get();
        return view('frontend.subcoursesDetails', compact('subcoursedetails'));
    }
    
    public function privacyPolicy()
    {
        return view('frontend.privacyPolicy');
    }

    public function termsCondition()
    {
        return view('frontend.termsCondition');
    }

}
