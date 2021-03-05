<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\subcourses;
use Illuminate\Http\Request;

class AdminsubCoursesController extends Controller
{
    public function subcourses()
    {
        $all_subcourse = subcourses::orderBy('id', 'desc')->paginate(20);
        return view('admin.subcourses.subcourses', compact('all_subcourse'));
    }

    public function subcourse_save(Request $request)
    {
        //$this->validate($request, ['subcourse_name' => 'required']);

        //$subcourse = subcourses::where('subCourses_name', $request->subcourse_name)->first();

        $subcourse = subcourses::where('subCourses_name', $request->subcourse_name)->where('course_id', $request->course_name)->first();

        //$subcourse_exist = course::where('id', $subcourse->course_id)->first();

        //echo $request->course_name;

        //dd($subcourse->course->id);

        if ($subcourse) {
            return back()->with('alert', 'subcourse already exist');
        }

        $this->validate($request, [
            'subcourse_name' => 'required',
            'goal_name' => 'required',
            'course_name' => 'required',
            'free' => 'required',
            //'type' => 'required',
            'total_questions' => 'numeric',
        ]);

        //if ($subcourse_exist == null) {
        $new_course = new subcourses();
        $new_course->goal_id = $request->goal_name;
        $new_course->course_id = $request->course_name;
        $new_course->subCourses_name = $request->subcourse_name;

        $new_course->status = $request->status;
        $new_course->is_free = $request->free;
        //$new_course->sub_course_type = $request->type;
        $new_course->video_subcourse = $request->video_subcourse;
        $new_course->test_series_subcourse = $request->test_series_subcourse;
        $new_course->total_questions = $request->total_questions;

        if ($new_course->save()) {
            return back()->with('success', 'subcourses Successfully Created');
        }

        // } else {
        //     return back()->with('alert', 'subcourse already exist');
        // }
    }

    public function subcourse_update(Request $request)
    {
        $this->validate($request, ['subcourse_name' => 'required', 'total_questions' => 'numeric']);
        $update_course = subcourses::where('id', $request->course_edit_id)->first();
        $subcourse = subcourses::where('subCourses_name', $request->subcourse_name)->where('course_id', $update_course->course_id)->first();

        // if ($subcourse->count() > 1) {
        //     return back()->with('alert', 'subcourse already exist');
        // }

        if (empty($subcourse) || $update_course->id == $subcourse->id) {
            $update_course->subCourses_name = $request->subcourse_name;
            $update_course->is_free = $request->free;
            //$update_course->sub_course_type = $request->type;
            $update_course->video_subcourse = $request->video_subcourse;
            $update_course->test_series_subcourse = $request->test_series_subcourse;
            $update_course->total_questions = $request->total_questions;

            $update_course->save();

            return back()->with('success', 'subcourses Successfully Updated');
        } else {
            return back()->with('alert', 'subcourse already exist');
        }
    }

    public function subcourse_delete(Request $request)
    {
        $delete_course = subcourses::where('id', $request->course_delete_id)->first();
        $delete_course->delete();
        return back()->with('success', 'subcourses Successfully Deleted');
    }
}
