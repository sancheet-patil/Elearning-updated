<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherReviewController extends Controller
{
    public function review()
    {
    	  return view('teacher.PaidTeacherReview.PaidTeacherReview');
    }
    public function earning()
    {
    	  return view('teacher.Earnings.Earning');
    }
     public function payout()
    {
    	  return view('teacher.Payout.payout');
    }
      public function statement()
    {
    	  return view('teacher.Statements.statements');
    }
     public function verification()
    {
    	  return view('teacher.Verification.verification');
    }
     public function setting()
    {
    	  return view('teacher.settings.setting');
    }
     public function feedback()
    {
    	  return view('teacher.feedback.feedback');
    }
}
