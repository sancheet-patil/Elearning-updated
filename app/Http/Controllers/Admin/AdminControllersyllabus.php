<?php

namespace App\Http\Controllers\Admin;

use App\syllabus;
use App\sub_chapter;
use App\subcourses;
use App\Imports\SyllabusImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class AdminControllersyllabus extends Controller
{
    public function save(Request $request)
    {

         $this->validate($request,[
       'goal_name'=> 'required','course_name'=> 'required','subcourse_name'=> 'required'
      ]);
        $syllabus=new syllabus();
        $syllabus->goal_id=$request->goal_name;
        $syllabus->course_id=$request->course_name;
        $syllabus->subCourse_id= $request->subcourse_name;
        $syllabus->chapterName =$request->chapterName;
        $syllabus->save();
            
           return back()->with('success', 'Syllabus Added Successfully!!!');
    }

    public function select()
    {
            return view('admin.syllabus.selectOption');
    }

    public function view()
    {
        $subcourse_name = Input::get('subcourse_name');
        $course_name = Input::get('course_name');
        if($course_name== '-1'&& $subcourse_name =='-1')
        {
            $syllabus= syllabus::orderBy('id','desc')->paginate(20);
            return view('admin.syllabus.view',compact('syllabus','subcourse_name','course_name'));
        }
        else{
        if($subcourse_name=='-1')
        {
            $syllabus= syllabus::where('course_id', $course_name )->orderBy('id','desc')->paginate(20);
            return view('admin.syllabus.view',compact('syllabus','subcourse_name','course_name'));   
        }
        else
        {
            $syllabus= syllabus::where([
                ['course_id', '=',  $course_name],
                ['subCourse_id', '=',$subcourse_name],
            ])->orderBy('id','desc')->paginate(20);
            return view('admin.syllabus.view',compact('syllabus','subcourse_name','course_name'));
                
        }
        }
    }

    public function update(Request $request)
    {
        $syllabus= syllabus::where('id',$request->edit_id)->first();
        $syllabus->course_id=$request->course_name;
        $syllabus->subCourse_id= $request->subcourse_name;
        $syllabus->chapterName =$request->chapterName;
        $syllabus->save();
        return back()->with('success', 'Syllabus Updated Successfully!!!');
    }

    public function addSubtopic(Request $request)
    {
        $sub_chapter= new sub_chapter();
        $sub_chapter->syllabus_id = $request->syllabus_id;
        $sub_chapter->SubchapterName=$request->subtopic_name;
        $sub_chapter->save();
        return back()->with('success', 'Sub-Chapter Added Successfully!!!');
    }

    public function getSubchapter($syllabus_id)
    {
        $sub_chapters = sub_chapter::where('syllabus_id',$syllabus_id)->orderBy('id','desc')->paginate(20);
        $chapterName = syllabus::select('chapterName')->where('id',$syllabus_id)->first();
        return view('admin.syllabus.sub_chapter.sub_chapter',compact('sub_chapters','chapterName'));
    }

    public function updatesubchapter(Request $request)
    {
        $subchapterName = sub_chapter::where('id',$request->edit_id)->first();
        $subchapterName->SubchapterName=$request->SubchapterName;
        $subchapterName->save();
        return back()->with('success', 'Sub-Chapter Updated Successfully!!!');
    }

    public function deleteSyllabus(Request $request)
    {
        $subchapterName = syllabus::where('id',$request->delete_id);
        $subchapterName->delete();
        return back()->with('success', 'Syllabus Deleted Successfully!!!');
    }


    public function deleteSubchapter(Request $request)
    {
        $subchapterName = sub_chapter::where('id',$request->delete_id);
        $subchapterName->delete();
        return back()->with('success', 'Sub-Chapter Deleted Successfully!!!');
    }

    public function getSubcourse($course_id)
    {
        $subcourse['data'] = \DB::table('subcourses')->where('course_id',$course_id)->get();
        echo json_encode($subcourse);
        exit;
    }

}
