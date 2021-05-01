<?php

namespace App\Http\Controllers\Admin;

use App\Exports\testseriesExport;
use App\Http\Controllers\Controller;
use App\Imports\testSeries;
use App\test;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testSeriesController extends Controller
{
    public function view()
    {
        return view('admin.testSeries.testView');
    }

    public function import(Request $request)
    {        
        $this->validate($request, [
            'goal_name' => 'required',
            'course_name' => 'required',
            'subcourse_name' => 'required',
            'time' => 'required',
            'test_series_name' => 'required',
            'negative_marks' => 'required',
            'file' => 'required',
            'time' => 'required|numeric|regex:/^[0-9]+(\.[0-9]{1,2})?$/',
            'question_marks' => 'required|numeric',
            'negative_marks' => 'required|numeric',
        ]);

        $user_name = Auth::guard('admin')->user()->id;

        Excel::import(new testSeries(
            $request->test_series_name, 
            $request->goal_name, 
            $request->course_name, 
            $request->subcourse_name, 
            $request->language, 
            $request->total_questions,                        
            $request->negative_marks, 
            $request->total_marks, 
            $request->question_marks, 
            $request->free,  
            $request->time,                 
            $request->general_instructions, 
            $user_name), 
            $request->file);
        
        
        return back()->with('success', 'Test-Series Successfully uploaded');
    }

    public function export()
    {
        return Excel::download(new testseriesExport, 'testSeries.xlsx');
    }

    public function ImageUpload()
    {
        return view('teacher.testSeries.ImageQuestionSeries');
    }

    public function ImageUploadSave(Request $request)
    {
        $this->validate($request, [
            'goal_name' => 'required',
            'course_name' => 'required',
            'subcourse_name' => 'required',
            'time' => 'required',
            'negative_marks' => 'required',
            'file' => 'required',
        ]);

        $testSeriesImage = new test();
        $testSeriesImage->Goal_id = $request->goal_name;
        $testSeriesImage->course_id = $request->course_name;
        $testSeriesImage->subCourse_id = $request->subcourse_name;
        $testSeriesImage->teacher_id = Auth::guard('teacher')->user()->id;
        $testSeriesImage->Eng_Question = $request->Eng_Question;
        $testSeriesImage->Eng_Options_1 = $request->Eng_Options_1;
        $testSeriesImage->Eng_Options_2 = $request->Eng_Options_2;
        $testSeriesImage->Eng_Options_3 = $request->Eng_Options_3;
        $testSeriesImage->Eng_Options_4 = $request->Eng_Options_4;
        $testSeriesImage->Eng_Que_Url = $request->Eng_Que_Url;
        $testSeriesImage->Correct_Ans = $request->Correct_Ans;
        $testSeriesImage->Marathi_Question = $request->Marathi_Question;
        $testSeriesImage->Mar_Options_1 = $request->Mar_Options_1;
        $testSeriesImage->Mar_Options_2 = $request->Mar_Options_2;
        $testSeriesImage->Mar_Options_3 = $request->Mar_Options_3;
        $testSeriesImage->Mar_Options_4 = $request->Mar_Options_4;
        $testSeriesImage->Mar_Que_Url = $request->Mar_Que_Url;        
        $testSeriesImage->time = $request->time;
        $testSeriesImage->Negative_marks = $request->negative_marks;

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "_testSeries." . $extension;
            $file->move('abc', $filename);
            $testSeriesImage->Image_file = "abc/" . $filename;
        }
        $testSeriesImage->save();
        return back()->with('success', 'Test-Series Successfully uploaded');
    }
}