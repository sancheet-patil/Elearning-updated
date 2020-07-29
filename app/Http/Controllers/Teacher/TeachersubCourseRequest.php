<?php

namespace App\Http\Controllers\Teacher;

use App\teacher_sub_courses as TeaSubCour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeachersubCourseRequest extends Controller
{

    public function view()
    {
        return view('teacher.RequestSubCourse.request');
    }

    public function request(Request $request)
    {
        $user =Auth::guard('teacher')->user();
        $exist =TeaSubCour::where([['subCourse_id','=',$request->subcourse_name],['teacher_id',$user->id]])->first();
        if($exist==null)
        {
            $new_assign = new TeaSubCour();
            $new_assign->subCourse_id = $request->subcourse_name;
            $new_assign->teacher_id = $user->id;
            $user->status =3;
            $user->save();
            $new_assign->save();
            return back()->with('success','Request for subcourse is under review');
        }

        return back()->with('success','Already Requested');
    }

    public function getSubcourse($course_id)
    {
        $subcourse['data'] = \DB::table('subcourses')->where('course_id',$course_id)->get();
        echo json_encode($subcourse);
        exit;
    }

}
