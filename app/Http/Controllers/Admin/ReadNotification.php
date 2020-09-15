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
use App\Notifications\AdminToTeacher;
use Illuminate\Support\Facades\Auth;
use App\notifications;
use Illuminate\Support\Facades\DB;
use App\group_name;
use App\group_admins;
use App\Admin;




class ReadNotification extends Controller
{
	 public function index()
    {
        notifications::truncate();
        return back();
    }
     
     public function read()
    {
        $user=Admin::find(1);
        $user->unreadNotifications->markAsRead();
        return redirect()->back();
    }
      public function group() {
       $userSchema = Teacher::first('id');
  
        $offerData = 
            Auth::guard('admin')->user()->id
            
        ;
         Notification::send($userSchema, new AdminToTeacher($offerData));
         
   
        return dd('done');
    }


    
     
      

    //
}
