<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\goals;

class goalsController extends Controller
{
    //
    public function goals()
    {
        $goals['data']=goals::all();
        return response()->json($goals);
    }

}
