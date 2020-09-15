<?php

namespace App\Http\Controllers\Admin;

use App\goals;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmingoalsController extends Controller
{
    public function goals()
    {
        $all_goals = goals::orderBy('id','desc')->paginate(20);
        return view('admin.Goals.goals',compact('all_goals'));
    }
    public function goal_save(Request $request)
    {
          $this->validate($request,[
      'goal_name'=> 'required',
      ]);
        $goal_exist = goals::where('goal_name',$request->goal_name)->first();

        if($goal_exist == null)
        {
            $new_goal = new goals();
            $new_goal->goal_name = $request->goal_name;
            $new_goal->save();
            return back()->with('success','goal Successfully Created');
        }
        
        else
        {
            return back()->with('alert','goal Already Exist');
        }
    }
    public function goal_update(Request $request)
    {

         $this->validate($request,[
      'goal_name'=> 'required',
      
      
            ]);
        $update_goal = goals::where('id',$request->goal_edit_id)->first();
        $update_goal->goal_name = strtolower($request->goal_name);
        $update_goal->save();

        return back()->with('success','goal Successfully Updated');
    }

    public function goal_delete(Request $request)
    {
        $delete_goal = goals::where('id',$request->goal_delete_id)->first();
        $delete_goal->delete();
        return back()->with('success','goal Successfully Deleted');
    }
}
