<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subscription_plans;

class adminSubscription_plans extends Controller
{
    public function view()
    {
        return view('admin.subscription_management.create');
    }

    public function save(Request $request)
    {
        $subscription_plan = new subscription_plans();
        $subscription_plan->goal_id = $request->goal_name;
        $subscription_plan->subcourse_id= $request->subcourse_name;
        $subscription_plan->course_id= $request->course_name;
        $subscription_plan->teacher_id = $request->teacher_name;
        $subscription_plan->Price_per_months= $request->price_per_month;
        $subscription_plan->Price_Annually = $request->price_annually;
        $subscription_plan->Price_quaterly = $request->price_quaterly;
        $subscription_plan->Price_semiAnnually = $request->price_semiannually;
        $subscription_plan->save();
        return back()->with('success','Subscription Amount Allocated Successfully!!!');

    }
}
