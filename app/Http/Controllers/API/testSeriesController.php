<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\test;

class testSeriesController extends Controller
{
    //
    public function data()
    {
        $testSeries['data']=test::with('goals','teachers')->get();
        return response()->json($testSeries);
    }
}
