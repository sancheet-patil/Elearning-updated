<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function teachers()
    {
        $teachers = Teacher::orderBy('id','desc')->paginate(20);
        return view('admin.teacher.teacherAccounts',compact('teachers'));
    }

    public function view_veri_doc_file($id)
    {
        $teacher = Teacher::where('id',$id)->first();
        return view('admin.teacher.teacherVerFile',compact('teacher'));
    }

    public function view_veri_doc_file_update(Request $request)
    {
        $status = $request->status;
        if ($status == 1){
            $teacher = Teacher::where('id',$request->teacher_id)->first();
            $teacher->status = 1;
            $teacher->save();

            return back()->with('success','Teacher Account Successfully Approved');

        }elseif ($status == 2){
            $teacher = Teacher::where('id',$request->teacher_id)->first();
            $teacher->status = 2;
            $teacher->save();

            return back()->with('success','Teacher Account Successfully Approved');
        }
        elseif ($status == 0){
            $teacher = Teacher::where('id',$request->teacher_id)->first();
            $teacher->status = 0;
            $teacher->save();

            return back()->with('success','Teacher Account Dis-Approved');
        }
        else{
            return back()->with('success','Please Select Status');
        }
    }


}
