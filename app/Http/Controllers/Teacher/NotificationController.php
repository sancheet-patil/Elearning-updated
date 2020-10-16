<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use Notification;
use App\Notifications\registerNotification;
use App\Notifications\LoginNotification;
use App\Notifications\TeachergroupNotification;
use App\Notifications\RequestSubcoursesNotification;
use App\Notifications\BlogNotification;
use App\Notifications\LiveStream;
use App\Notifications\LogoutNotification;
use Illuminate\Support\Facades\Auth;
use App\notifications;
use App\Admin;

class NotificationController extends Controller
{
    public function registerNotification() {
        $userSchema = Admin::first('id');
  
        $offerData = 
            'New Registration';
            
        ;
         Notification::send($userSchema, new registerNotification($offerData));
   
        return redirect(route('teacher.login'))->with('teacher_success_reg','Account Successfully Created. Please login');
    }
    public function TeacherVideoVerificationNotification() {
        $userSchema = Admin::first('id');
  
        $offerData = 
            'New Video Verification ';
            
        ;
         Notification::send($userSchema, new TeacherVideoVerificationNotification($offerData));
   
        return dd('done');
    }
    
	 public function sendrNotification() {
        $userSchema = Admin::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new LoginNotification($offerData));
   
        return redirect(route('teacher.dashboard'));
    }
     public function groupNotification() {
       $userSchema = Admin::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new TeachergroupNotification($offerData));
   
        return redirect(route('teacher.group.view'))->with('success','Request for group is under review');
    }
    public function RequestsubcoursesNotification() {
       $userSchema = Admin::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new RequestsubcoursesNotification($offerData));
   
        return redirect(route('teacher.subcourses.view'))->with('success','Request for subcourse is under review');
    }
    public function BlogNotification() {
        $userSchema = Admin::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new BlogNotification($offerData));
   
        return redirect('teacher/createblog')->with('success','Your Blog Post Sucessfully');
    }
    
    public function LiveStreamNotification()
    {
       $userSchema = Admin::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new LiveStream($offerData));
         return redirect()->away('https://solutions.agora.io/education/web/?_ga=2.113566215.184414609.1597420959-482435269.1596626319&_gac=1.261705599.1596683766.CjwKCAjwsan5BRAOEiwALzomX2k8YKitn0lIWH4oZP26lbOgh_4SYTC0FHRSQa7z4LSKOuDwDa0fDxoCkPIQAvD_BwE#/');
   

    }
    
     public function LogoutNotification()
    {
         $userSchema = Admin::first('id');
  
        $offerData = 
            Auth::guard('teacher')->user()->name
            
        ;
         Notification::send($userSchema, new LogoutNotification($offerData));
         
   
        return redirect(route('teacher.logout'));
    }
     public function markasread()
    {
        $note=Auth::guard('teacher')->user()->id;

        $user=Teacher::find($note);
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
     public function DeleteNotification($id)
    {
        $user=Auth::guard('teacher')->user()->id;
        $teacher=notifications::where('notifiable_id',$user)->where('notifiable_type','=','App\Teacher')->delete();

        //notifications::find($teacher)->delete();
        
       // $user=notification::find($teacher);
        

        return back();
            }
    
   
     
    

    //
}
