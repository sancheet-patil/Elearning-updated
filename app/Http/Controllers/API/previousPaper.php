<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\previous_papers;

class previousPaper extends Controller
{
    //data 
    public function data()
    {
        $previousPaper['data']=previous_papers::with('goals','course','subcourse')->get();
        return response()->json($previousPaper);
    }
}
