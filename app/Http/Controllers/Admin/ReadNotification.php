<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use Notification;
use App\Notifications\LoginNotification;
use App\Notifications\TeachergroupNotification;
use App\Notifications\RequestSubcoursesNotification;
use App\Notifications\BlogNotification;
use App\Notifications\TestNotification;
use App\Notifications\PaperNotification;
use App\Notifications\SubCourseRequestAceept;
use Illuminate\Support\Facades\Auth;
use App\notifications;
use Illuminate\Support\Facades\DB;
use App\Admin;




class ReadNotification extends Controller
{
	 public function index($id)
    {
        $user=Auth::guard('admin')->user()->id;
        $teacher=notifications::where('notifiable_id',$user)->where('notifiable_type','=','App\Admin')->delete();
        return back();

    }
     
     public function read()
    {
        $user=Admin::find(1);
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
    
      public function GroupRequestNotification($id) {
       $userSchema = Teacher::all()->where('id',$id)->first();
  
        $offerData = 
            Auth::guard('admin')->user()->id
            
        ;
         Notification::send($userSchema, new GroupRequestAcceptNotification($offerData));
         
   
        return dd('done');
    }
    public function subcourseRequestAccept($id) {
       $userSchema = Teacher::all()->where('id',$id)->first();
  
        $offerData = 
            Auth::guard('admin')->user()->id
            
        ;
         Notification::send($userSchema, new SubCourseRequestAceept($offerData));
         
   
        return back()->with('success','subcourse is assigned to Teacher Successfully');
    }



    
     
      

    //
}
