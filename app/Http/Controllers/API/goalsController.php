<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\goals;

class goalsController extends Controller
{
    //
    public function courses(Request $request)
    {

    	$this->validate($request,[
      'goal_name'=> 'required'
 
            ]);
        $goals['data']=goals::all();
        return response()->json($goals);
    }

}
