<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Imports\testSeries;
class testSeriesController extends Controller
{
    public function view()
    {
        return view('teacher.testSeries.testView');
    }
    public function import(Request $request)
    {

        Excel::import(new testSeries($request->goal_name,$request->course_name,$request->subcourse_name,$request->negative_marks,$request->time),$request->file);
        return back()->with('success','Test-Series Successfully uploaded');
    }
}