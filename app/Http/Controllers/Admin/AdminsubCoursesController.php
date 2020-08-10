<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subcourses;
class AdminsubCoursesController extends Controller
{
    public function subcourses()
    {
        $all_subcourse = subcourses::orderBy('id','desc')->paginate(20);
        return view('admin.subcourses.subcourses',compact('all_subcourse'));
    }

    public function subcourse_save(Request $request)
    {
        $subcourse_exist = subcourses::where('subCourses_name',$request->subcourse_name)->first();

        if($subcourse_exist == null)
        {
            $new_course = new subcourses();
            $new_course->goal_id = $request->goal_name;
            $new_course->course_id=$request->course_name;
            $new_course->subCourses_name = $request->subcourse_name;
            $new_course->save();
            return back()->with('success','subcourses Successfully Created');
        }
        else
        {
            return back()->with('alert','subcourse already exist');
        }
        

    }

    public function subcourse_update(Request $request)
    {
        $update_course = subcourses::where('id',$request->course_edit_id)->first();
        $update_course->subCourses_name = $request->course_name;
        $update_course->save();

        return back()->with('success','subcourses Successfully Updated');
    }

    public function subcourse_delete(Request $request)
    {
        $delete_course = subcourses::where('id',$request->course_delete_id)->first();
        $delete_course->delete();
        return back()->with('success','subcourses Successfully Deleted');
    }



}
