<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:teacher',['except'=>['logout']]);
    }


    public function showLoginform()
    {
        return view('auth.teacherLogin');
    }



    public function showRegisterform()
    {
        return view('auth.teacherRegister');
    }

    public function register_submit(Request $request)
    {
        $rules=$this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/',
            'Confirm_Password' => 'required|same:password'
        ]);
        
        $exitst_teacher_email = Teacher::where('email',$request->email)->first();
        if ($exitst_teacher_email){
            return back()->with('t_email_error','Email Already Exist');
        }else{
            $teacher = new Teacher();
            $teacher->name = $request->name;
            $teacher->email = $request->email;
            $teacher->phone = $request->phone;
            $teacher->dob = $request->dob;
            $teacher->password = Hash::make($request->password);
             if($request->hasfile('image'))
            {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('teacherProfile',$filename);
            $teacher->profile_image=$filename;
            
        }
       


            $teacher->status = 1;
            $teacher->save();

            return redirect(route('teacher.registerNotification'));

        }


    }





    //this is login function for admin which is given email and password to get data form database
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        if(Auth::guard('teacher')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect(route('teacher.send'));
        }

        return redirect()->back();

    }



    //this funsion for admin logout which i customized to cpy form loginController
    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect(route('teacher.login'));
    }
}
