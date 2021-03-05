<?php

namespace App\Http\Controllers\Admin;

use App\course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    public function courses()
    {
        $all_course = course::orderBy('id', 'desc')->paginate(20);
        return view('admin.courses.courses', compact('all_course'));
    }

    public function course_save(Request $request)
    {
        $this->validate($request, ['goal_name' => 'required', 'course_name' => 'required']);
        $course_exist = course::where('course_name', $request->course_name)->first();

        if ($course_exist == null) {
            $this->validate($request, [
                'goal_name' => 'required',
                'course_name' => 'required',
                'video_course' => 'required',
                'test_series_course' => 'required',
                'paid_course' => 'required',
                //'course_duration' => 'required|numeric|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
                'course_duration' => 'required|numeric',
                'course_fees' => 'required|numeric',
            ]);

            $new_course = new course();
            $new_course->course_name = $request->course_name;
            $new_course->goal_id = $request->goal_name;

            $new_course->is_video_course = $request->video_course;
            $new_course->is_testseries_course = $request->test_series_course;
            $new_course->is_paid_course = $request->paid_course;
            $new_course->course_fees = $request->course_fees;
            $new_course->course_duration = $request->course_duration;

            $new_course->save();
            return back()->with('success', 'Course Successfully Created');
        } else {
            return back()->with('alert', 'Course Already Exist');
        }
    }

    public function course_update(Request $request)
    {
        $this->validate($request, [
            'course_name' => 'required',
            'video_course' => 'required',
            'test_series_course' => 'required',
            'paid_course' => 'required',
            //'course_duration' => 'required|numeric|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
            'course_duration' => 'required|numeric',
            'course_fees' => 'required|numeric',
        ]);

        $this->validate($request, ['course_name' => 'required']);
        $update_course = course::where('id', $request->course_edit_id)->first();
        $update_course->course_name = $request->course_name;

        $update_course->is_video_course = $request->video_course;
        $update_course->is_testseries_course = $request->test_series_course;
        $update_course->is_paid_course = $request->paid_course;
        $update_course->course_fees = $request->course_fees;
        $update_course->course_duration = $request->course_duration;

        $update_course->save();
        return back()->with('success', 'Course Successfully Updated');
    }

    public function course_delete(Request $request)
    {
        $delete_course = course::where('id', $request->course_delete_id)->first();
        $delete_course->delete();
        return back()->with('success', 'Course Successfully Deleted');
    }

    public function getCourse($goal_id)
    {
        $courses_names['data'] = course::where('goal_id', $goal_id)->get();
        echo json_encode($courses_names);
        exit;
    }
}
