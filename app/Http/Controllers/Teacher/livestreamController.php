<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\livestream;
use Illuminate\Support\Facades\Auth;

class livestreamController extends Controller
{
    public function view()
    {
        return view('teacher.Livestream.scheduleLivestream');
    }

    public function getPassword() 
    { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
        for ($i = 0; $i < 10; $i++) 
        { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        }       
        return $randomString; 
    }

    public function save(Request $request)
    {
        $this->validate($request,[
            'goal_name' =>'required',
            'subcourse_name' => 'required',
            'course_name'=> 'required',
            'duration'=>'required',
            'topic' => 'required'
        ]);
            $topic=$request->topic;
            $livestream = new livestream();
            $livestream->goal_id = $request->goal_name;
            $livestream->subcourse_id = $request->subcourse_name;
            $livestream->course_id = $request->course_name;
            $livestream->teacher_id = Auth::guard('teacher')->user()->id;
            $livestream->Topic = $topic;
            $livestream->Password = $this->getPassword();
            $livestream->Duration = $request->duration;
            $livestream->save(); 

        if($request->button == 'Live')
        {
            
            return view('teacher.Livestream.livestream',compact('topic'));
        }
        else
        {
                return back()->with('success','Successfully Schedule');
        }
    }

     
}
