<?php

namespace App\Http\Controllers\Teacher;
use App\Group_Name as TeaGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherGroupRequest extends Controller
{
    public function view()
    {
        return view('teacher.Groups.RequestGroup');
    }
    public function request(Request $request)
    {


         $this->validate($request,[
      'group_name'=> 'required',
      
      
            ]);
        $user =Auth::guard('teacher')->user();
        $exist =TeaGroup::where('group_name',$request->group_name)->first();

      if ( $exist == NULL) {
         
    
        
            $new_assign = new TeaGroup();
            $new_assign->group_name = $request->group_name;
            $new_assign->status=0;
            $new_assign->save();
            return redirect(route('teacher.groupnotification'));
        }else {
            return back()->with('success','Already Requested');
        }

        
    }
   
}
