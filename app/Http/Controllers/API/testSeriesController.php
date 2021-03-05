<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\test;
use App\TestReportSubmit;
use App\user_goal;

class testSeriesController extends Controller
{
    public function data()
    {
        $testSeries['data']=test::with('goals','course')->get();
        return response()->json($testSeries);
    }

    public function submitReport(Request $request)
    {
        $testSubmitReport = new TestReportSubmit();
        $testSubmitReport->question_id = $request->question_id;
        $testSubmitReport->email = $request->email;
        $testSubmitReport->issue = $request->issue;
        $testSubmitReport->save();
        return response()->json([
            'message' => 'Successfully log the report'
        ]);
    }

    public function tests($test_id,$goal_id)
    {
        $tests = test::with('goals','course')->where('id', $test_id)->where('Goal_id', $goal_id)->get();
        return response()->json($tests);
    }

    public function alltests($goal_id)
    {
        $tests = test::with('goals','course')->where('Goal_id', $goal_id)->get();
        return response()->json($tests);
    }

    public function testsection($goal_id)
    {
        $tests = test::where('Goal_id', $goal_id)
                ->select(['test.id as id','Goal_id as Goal-id','test.mode as mode','test.test_title as testname','test.total_questions as totalquestion','test.total_marks as total marks','test.time as time','test.status as status','test.general_instuctions as general instuctions'])
                ->get();
        return response()->json($tests);
    }
}
