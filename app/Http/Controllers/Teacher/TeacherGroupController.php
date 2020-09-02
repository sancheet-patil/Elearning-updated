<?php

namespace App\Http\Controllers\Teacher;
use App\group_members;
use App\group_admins;
use App\group_name;
use App\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TeacherGroupController extends Controller
{
    public function group()
    {
        $Group_names = group_name::where('status',1)->orderBy('id','desc')->paginate(20);
        
        return view('teacher.groups.creategroup',compact('Group_names'));
    }

    public function group_admin(Request $request)
    {

         $this->validate($request,[
       'group_admin'=> 'required'
      ]);
        $user =Auth::guard('teacher')->user();
        $admin_exist = group_admins::where('Admin_name',$request->name)->first();

        if($admin_exist == null)
        {
            $new_admin = new group_admins();
            $new_admin->group_id = $request->group_name;
            $new_admin->member_id = $request->group_members;
            $new_admin->Admin_name = $request->group_admin;
            $new_admin->save();
            return back()->with('success','Admin Successfully Assigned');
        }
        
        else
        {
            return back()->with('alert','Admin Already Assigned');
        }
    }
    public function group_members(Request $request)
    {
       //return $request;
         $this->validate($request,[
       'group_members'=> 'required'
      ]);
        $user =Auth::guard('teacher')->user();
        $members_exist = group_members::where('group_members',$request->name)->first();

        if($members_exist == null)
        {
            $new_member = new group_members();
            $new_member->group_id = $request->group_name;
            $new_member->group_members = $request->group_members;
            $new_member->save();
            return back()->with('success','Member Successfully Added');
        }
        
        else
        {
            return back()->with('alert','Member Already Exist');
        }
    }
   
    public function group_delete(Request $request)
    {
        $delete_assign = group_name::where('id',$request->group_delete_id)->first();
        $delete_assign->delete();

        return back()->with('success','Group is deleted Successfully');
    }
    public function group_update(Request $request)
    {

         $this->validate($request,[
       'group_name'=> 'required'
      ]);
        $update_group = group_name::where('id',$request->group_edit_id)->first();
        $update_group->group_name = $request->group_name;
        $update_group->save();

        return back()->with('success','group name successfully Updated');
    }
}
