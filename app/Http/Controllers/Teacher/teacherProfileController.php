<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher ;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Validator;

class teacherProfileController extends Controller
{
    public function view()
    {
        $teacher_details=Teacher::where('id',Auth::guard('teacher')->user()->id)->first();
        return view('teacher.teacherProfile',compact('teacher_details'));
    }

    public function edit(Request $request)
    {

 $this->validate($request,[
      'name'=> 'required',
      'phone'=> 'required',
      'private_coaching'=> 'required',
      'gov_teaching'=> 'required',
      'youtube'=> 'required',
      'telegram_admin'=> 'required',
      'book_publish'=> 'required',
      'stat_new_teaching'=> 'required',
      'certification'=> 'required',
      'equipment'=> 'required'
 
            ]);

         $teacher_details =Teacher::find(Auth::guard('teacher')->user()->id);
         $teacher_details->name =             $request->name;
         $teacher_details->phone =            $request->phone;
         $teacher_details->private_coaching = $request->private_coaching;
         $teacher_details->gov_teaching =     $request->gov_teaching;
         $teacher_details->youtube=           $request->youtube;
         $teacher_details->telegram_admin=    $request->telegram_admin;
         $teacher_details->book_publish=      $request->book_publish;
         $teacher_details->stat_new_teaching= $request->stat_new_teaching;
         $teacher_details->certification=     $request->certification;
         $teacher_details->equipment= implode($request->equipment);
         $teacher_details->save();
        return view('teacher.teacherProfile',compact('teacher_details'));
    }
}
