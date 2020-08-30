<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\payment_allocation;

class paymentAllocationcontroller extends Controller
{
    public function save(Request $request)
    {
        $payment_allocation= new payment_allocation();
        $payment_allocation->course_id=$request->course_name;
        $payment_allocation->subcourse_id=$request->subcourse_name;
        $payment_allocation->goal_id=$request->goal_name;
        $payment_allocation->teacher_id=$request->teacher_name;
        $payment_allocation->payment_percentage=$request->pay_per;
        $payment_allocation->no_student_reffered=$request->stud_reff;
        $payment_allocation->reffered_students_percentage=$request->reff_per;
        $payment_allocation->save();
        return back()->with('success','Allocated Sucessfully');
        
        
    }

    public function view()
    {
        return view('admin.payment_allocation.view');
    }
}
