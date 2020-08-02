<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher ;
use App\teacher_sub_courses as TeaSubCour;

class TeacherController extends Controller
{
    public function index()
    {
        $status=Teacher::select('status','name')->where('id',Auth::guard('teacher')->user()->id)->first();
        $assigned_course= TeaSubCour::where([['teacher_id','=',Auth::guard('teacher')->user()->id],['status','=','2']])->count();
        $pending_course= TeaSubCour::where([['teacher_id','=',Auth::guard('teacher')->user()->id],['status','=','1']])->count();
        return view('teacher.index',compact('status','assigned_course','pending_course'));
    }
}
