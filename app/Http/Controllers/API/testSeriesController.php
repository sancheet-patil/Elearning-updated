<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\test;
use App\TestReportSubmit;

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
}
