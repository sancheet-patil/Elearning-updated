<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use Notification;
use App\Notifications\LoginNotification;
use App\Notifications\TeachergroupNotification;
use App\Notifications\RequestSubcoursesNotification;
 use App\Notifications\BlogNotification;
use Illuminate\Support\Facades\Auth;
use App\notifications;


class NotificationController extends Controller
{
	 public function sendrNotification() {
        $userSchema = Teacher::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new LoginNotification($offerData));
   
        return redirect(route('teacher.dashboard'));
    }
     public function groupNotification() {
        $userSchema = Teacher::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new TeachergroupNotification($offerData));
   
        return redirect(route('teacher.group.view'))->with('success','Request for group is under review');
    }
    public function RequestsubcoursesNotification() {
        $userSchema = Teacher::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new RequestsubcoursesNotification($offerData));
   
        return redirect(route('teacher.subcourses.view'))->with('success','Request for subcourse is under review');
    }
    public function BlogNotification() {
        $userSchema = Teacher::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new BlogNotification($offerData));
   
        return redirect('teacher/createblog')->with('success','Your Blog Post Sucessfully');
    }
    

    //
}
