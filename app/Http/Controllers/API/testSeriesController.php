<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testSeriesController extends Controller
{
    //
    public function data()
    {
        $testSeries['data']=previous_papers::with('goals','course','subcourses')->get();
        return response()->json($testSeries);
    }
}
