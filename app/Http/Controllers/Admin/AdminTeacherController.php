<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Teacher;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function teachers()
    {
        $teachers = Teacher::orderBy('id','desc')->paginate(20);
        return view('admin.teacher.teacherAccounts',compact('teachers'));
    }
    public function teachersprofile($id)
    {
        $teacher_details=Teacher::where('id',$id)->first();
        return view('admin.teacher.teacherProfile',compact('teacher_details'));
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
    public function delete(Request $request)
    {
        $delete_assign = Teacher::where('id',$request->delete_id)->first();
        $delete_assign->delete();

        return back()->with('success','Teacher is deleted Successfully');
    }

    public function searchItem(Request $request)
    {
        $searchTerm =$request->get('search');
        $teacher=DB::Table('Teacher')->where('name','like','%'.$searchTerm.'%')->paginate(5);
    
        return view('admin.teacher.teacherAccounts', ['teacher'=>$teacher]);

     }

}
