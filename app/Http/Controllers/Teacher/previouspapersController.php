<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class previouspapersController extends Controller
{
    public function index()
    {
    	return view('teacher.previous_papers.papers');
    }
    public function create()
    {
    	return view('teacher.previous_papers.upload_papers');
    }
    //
}
