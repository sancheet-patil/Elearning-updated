<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\group_name;
use App\group_admins;
use App\Teacher;
class AdminTeacherGroupController extends Controller
{
    public function teacherGroups()
    {
        $teacherGroups = group_name::orderBy('id','desc')->paginate(20);
        return view('admin.groups.teacherGroups',compact('teacherGroups'));
    }
    public function approve(Request $request)
    {   
        $update_assign = group_name::where('id',$request->approve_id)->first();
        $update_assign->status = 1;
        $update_assign->save();
        return back()->with('success','Group Name Approved  Successfully');
    }
    
    public function delete(Request $request)
    {
        $delete_assign = group_name::where('id',$request->delete_id)->first();
        $delete_assign->delete();

        return back()->with('success','Group is deleted Successfully');
    }
    public function disapprove(Request $request)
    {
        $update_assign = group_name::where('id',$request->disapprove_id)->first();
        $update_assign->status = 0;
        $update_assign->save();

        return back()->with('success','Group Name Disapproved Successfully');
    }

   
}
