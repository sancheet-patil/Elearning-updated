<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user_goal;

class user_goalController extends Controller
{
    //
    public function data(Request $request)
    {
        $goal['data']=user_goal::with('goals')->where('user_id',$request->user()->id)->get();
        return response()->json($goal);
    }

    public function add(Request $request)
    {
        $goal = new user_goal();
        $goal -> goal_id =$request->goal_id;
        $goal -> user_id = $request->user()->id;
        $goal->save();
        return response()->json($goal);
    }
}
