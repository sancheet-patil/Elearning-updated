<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Imports\Previous_import;
use App\Exports\Previous_export;


class PreviousPaperController extends Controller
{
	 public function index()
    {
    	return view('admin.previous_papers.papers');
    }
    public function import(Request $request)
    {

        Excel::import(new Previous_import($request->year),$request->file);
        return back()->with('Success','Your Papers Uploaded Successfully');
    }
    public function export() 
    {
        return Excel::download(new Previous_export, 'samplePapers.xlsx');
    }
   
    //
}
