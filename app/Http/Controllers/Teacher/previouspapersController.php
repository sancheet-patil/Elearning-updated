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

        Excel::import(new Previous_import,request()->file);
        return back()->with('Success','Your file uploaded');
    }
    public function export() 
    {
        return Excel::download(new Previous_export, 'sample.Papers.xlsx');
    }
    //
}
