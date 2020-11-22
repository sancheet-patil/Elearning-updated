<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Auth;
use App\Imports\testSeries;
use App\Exports\testseriesExport;

class testSeriesController extends Controller
{
    public function view()
    {
        return view('teacher.testSeries.testView');
    }
    public function import(Request $request)
    {
    	$this->validate($request,[
      'goal_name'=> 'required',
      'course_name'=> 'required',
      'subcourse_name'=> 'required',
      'time'=> 'required',
      'negative_marks'=> 'required', 
      'file'=>'required'
      ]);
        $teacher_name = Auth::guard('teacher')->user()->id; 
        Excel::import(new testSeries($request->goal_name,$request->course_name,$request->subcourse_name,$request->negative_marks,$request->time,$teacher_name),$request->file);
        return back()->with('success','Test-Series Successfully uploaded');
    }
    public function export() 
    {
        return Excel::download(new testseriesExport, 'testSeries.xlsx');
    }
}
