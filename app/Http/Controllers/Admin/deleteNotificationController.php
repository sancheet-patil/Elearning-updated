<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\notifications;

class deleteNotificationController extends Controller
{
   
   public function DeleteNotification()
    {
       notifications::truncate();
        return redirect('admin/index');
        //
    } //
}
