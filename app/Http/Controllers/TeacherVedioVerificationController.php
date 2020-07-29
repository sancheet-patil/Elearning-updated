<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherVedioVerificationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:teacher');
    }


    public function video_verification()
    {
        return view('verification.teacherVedioVer');
    }

    public function video_verification_file_save(Request $request)
    {
        $teacher = Teacher::where('id',Auth::user()->id)->first();
        if($request->hasFile('doc_file')){
            @unlink($teacher->doc_file);
            $image = $request->file('doc_file');
            $imageName = Auth::user()->id.time().'.'.$image->getClientOriginalName('doc_file');
            $directory = 'assets/admin/teacher/docfile/';
            $imgUrl  = $directory.$imageName;
            $image->move($directory,$imageName);
            $teacher->doc_file = $imgUrl;
        }


        if($request->hasFile('video_file')){
            @unlink($teacher->video_file);
            $image = $request->file('video_file');
            $imageName = Auth::user()->id.time().'.'.$image->getClientOriginalName('video_file');
            $directory = 'assets/admin/teacher/docfile/';
            $imgUrl1  = $directory.$imageName;
            $image->move($directory,$imageName);
            $teacher->video_file = $imgUrl1;
        }

        $teacher->private_coaching = $request->private_coaching;
        $teacher->gov_teaching = $request->gov_teaching;
        $teacher->youtube = $request->youtube;
        $teacher->telegram_admin = $request->telegram_admin;
        $teacher->book_publish = $request->book_publish;
        $teacher->stat_new_teaching = $request->stat_new_teaching;
        $teacher->certification = $request->certification;
        $teacher->save();

        return back()->with('success','Your Account is Under Review');



    }
}
