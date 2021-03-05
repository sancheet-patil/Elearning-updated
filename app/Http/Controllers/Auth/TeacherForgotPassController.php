<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Mail;
use Reminder;
use Sentinel;

class TeacherForgotPassController extends Controller
{
    public function index()
    {
        return view('auth.teacherForgotPass');
    }

    public function password(Request $request)
    {
        $user = User::whereEmail($request->email)->first();
        if ($user == null) {
            return redirect()->back()->with(['error' => 'Email not exist']);
        }
        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exists($user) ?: Reminder::create($user);
        $this->sendEmail($user, $reminder->code);
        return redirect()->back()->with(['success' => 'Reset code sent to your email']);
    }

    public function sendEmail($user, $code)
    {
        Mail::send(
            'email.forgot',
            ['user' => $user, 'code' => $code],
            function ($message) use ($user) {
                $message->to($user->email);
                $message->subject("$user->name, reset your password.");
            }
        );
    }
}
