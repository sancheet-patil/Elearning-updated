<?php

namespace App\Http\Controllers\Admin;

use App\teacher_sub_courses as TeaSubCour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;

class AdminTeacherSubCourses extends Controller
{
    public function viewApproved()
    {
        $TeacherSubCourses= TeaSubCour::orderBy('id','desc')->where('status',2)->paginate(20);
        return view('admin.TeachersubCourses.view',compact('TeacherSubCourses'));
    }

    public function viewRequest()
    {
        $TeacherSubCourses= TeaSubCour::orderBy('id','desc')->where('status',1)->paginate(20);
        return view('admin.TeachersubCourses.viewRequest',compact('TeacherSubCourses'));
    }

    public function assign(Request $request)
    {
        $new_assign = new TeaSubCour();
        $new_assign->subCourse_id = $request->subcourse_id;
        $new_assign->teacher_id = $request->teacher_id;
        $new_assign->status = 2;
        $new_assign->save();

        return back()->with('success','subcourse is assigned to Teacher Successfully');
    }

    public function update(Request $request)
    {
        $update_assign = TeaSubCour::where('id',$request->edit_id)->first();
        $update_assign->subCourse_id=$request->subcourse_id;
        $update_assign->save();

        return back()->with('success','subcourse is assigned to Teacher Successfully');
    }

    public function delete(Request $request)
    {
        $delete_assign = TeaSubCour::where('id',$request->delete_id)->first();
        $delete_assign->delete();

        return back()->with('success','Request is deleted Successfully');
    }

    public function approve(Request $request)
    {
        $update_assign = TeaSubCour::where('id',$request->approve_id)->first();
        $update_assign->status = 2;
        $update_assign->save();
        $teacher=Teacher::where('id',$update_assign->teacher_id)->first();
        $teacher->status =4;
        $teacher->save();
        return back()->with('success','subcourse is assigned to Teacher Successfully');
    }

    public function disapprove(Request $request)
    {
        $update_assign = TeaSubCour::where('id',$request->disapprove_id)->first();
        $update_assign->status = 0;
        $update_assign->save();

        return back()->with('success','subcourse is not assign to Teacher Successfully');
    }
}
