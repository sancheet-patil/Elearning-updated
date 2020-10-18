<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subcourses;

class subcourseController extends Controller
{
    public function subcourses()
    {
        $subcourses['data']=subcourses::with('goals','course')->get();
        return response()->json($subcourses);
    }

    public function subcourse($id)
    {
        $subcourse['data']=subcourses::where('subCourse_id',$id)->get();
        return response()->json($course);
    }

    
}
