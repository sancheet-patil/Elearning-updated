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
        Excel::import(new testSeries($request->test_series_name, $request->goal_name, $request->course_name, $request->subcourse_name, $request->negative_marks, $request->time, $request->question_marks, $request->general_instructions, $user_name), $request->file);
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
        $testSeriesImage->Questions = $request->Question;
        $testSeriesImage->Option1 = $request->Option1;
        $testSeriesImage->Option2 = $request->Option2;
        $testSeriesImage->Option3 = $request->Option3;
        $testSeriesImage->Option4 = $request->Option4;
        $testSeriesImage->Marathi_Question = $request->Marathi_Question;
        $testSeriesImage->Marathi_Option1 = $request->Marathi_Option1;
        $testSeriesImage->Marathi_Option2 = $request->Marathi_Option2;
        $testSeriesImage->Marathi_Option3 = $request->Marathi_Option3;
        $testSeriesImage->Marathi_Option4 = $request->Marathi_Option4;
        $testSeriesImage->Correct_option = $request->Correct;
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
