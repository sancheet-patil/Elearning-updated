<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Imports\Previous_import;
use App\Exports\Previous_export;


class previouspapersController extends Controller
{
    public function index()
    {
    	return view('teacher.previous_papers.papers');
    }
    public function import(Request $request)
    {

        Excel::import(new Previous_import($request->goal_name,$request->course_name,$request->subcourse_name,$request->year,),$request->file);
       return back()->with('Success','Your Papers Uploaded Successfully');
   
    }
   public function export() 
    {
        return Excel::download(new Previous_export, 'samplePapers.xlsx');
    }
   
    //
}
