<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\previous_papers;

class previousPaper extends Controller
{
    //
    public function data()
    {
        $previousPaper['data']=previous_papers::all();
        return response()->json($previousPaper);
    }
}
