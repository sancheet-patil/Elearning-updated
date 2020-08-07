<?php

namespace App\Http\Controllers\Admin;

use App\course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    public function courses()
    {
        $all_course = course::orderBy('id','desc')->paginate(20);
        return view('admin.courses.courses',compact('all_course'));
    }

    public function course_save(Request $request)
    {
        $course_exist = course::where('course_name',$request->course_name)->first();

        if($course_exist == null)
        {
            $new_course = new course();
            $new_course->course_name = $request->course_name;
            $new_course->save();
            return back()->with('success','Course Successfully Created');
        }
        
        else
        {
            return back()->with('alert','Course Already Exist');
        }
    }
    public function course_update(Request $request)
    {
        $update_course = course::where('id',$request->course_edit_id)->first();
        $update_course->course_name = strtolower($request->course_name);
        $update_course->save();

        return back()->with('success','Course Successfully Updated');
    }

    public function course_delete(Request $request)
    {
        $delete_course = course::where('id',$request->course_delete_id)->first();
        $delete_course->delete();
        return back()->with('success','Course Successfully Deleted');
    }
       


}
