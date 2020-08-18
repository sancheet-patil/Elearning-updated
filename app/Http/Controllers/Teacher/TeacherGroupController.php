<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherGroupController extends Controller
{
    public function group()
    {
        return view('teacher.groups.creategroup');
    }
}
