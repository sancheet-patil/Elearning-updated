<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user_goal;

class user_goalController extends Controller
{

    public function data(Request $request)
    {
        $goal['data'] = user_goal::with('goals')->where('user_id',$request->user()->id)->get();
        return response()->json($goal);
    }


    public function add(Request $request)
    {
        $goal = new user_goal();
        $goal -> goal_id = $request->goal_id;
        $goal -> user_id = $request->user()->id;
        $goal -> save();
        return response()->json($goal);
    }


    public function update(Request $request, $goal_id)
    {
        $goal = user_goal::where('goal_id', $goal_id)->where('user_id', $request->user()->id)->first();
        $goal->update($request->all());
        return response()->json($goal);
    }


    public function delete(Request $request, $goal_id)
    {
        $goal = user_goal::where('goal_id', $goal_id)->where('user_id', $request->user()->id)->first();

        if($goal)
            $goal->delete();
        else
            return response()->json([
                'message' => 'Goal Not Found!'
            ]);

        return response()->json([
            'message' => 'Goal deleted successfully!'
        ]);
    }
}
