<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;
use app\Mail\OfferMail;

class studentApicontroller extends Controller
{
    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'message' => 'Sucessfully login In',
            'user' => [
                'id' => $request->user()['id'],
                'first_name' => explode(' ', $request->user()['name'])[0],
                'last_name' => explode(' ', $request->user()['name'])[1],
                'mobile_number' => $request->user()['mobile_number'],
                'email' => $request->user()['email'],
                'email_verified_at' => $request->user()['email_verified_at'],
            ],
        ]);
    }

    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'mobile_number' => 'required|min:10|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 422);
        }


        $user = new User([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile_number' => $request->mobile_number,
        ]);

        $user->save();   

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'message' => 'Sucessfully login In',
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Change Password
     *
     * @return [string] message
     */

    public function change_password(Request $request)
    {
        if (Auth::guard('api')->check()) {
            $messages = [
                'password.required' => 'Please enter Current Password',
                'new_password.required' => 'Please Enter New Password',
            ];

            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'new_password' => 'required|min:8|confirmed',
                'new_password_confirmation' => 'required',
            ], $messages);

            if ($validator->fails()) {
                return response()->json(['message' => $validator->errors()], 400);
            } else {
                $current_password = Auth::User()->password;
                if (Hash::check($request->password, $current_password)) {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request->new_password);
                    $obj_user->save();
                    if ($obj_user->save()) {
                        return response()->json(['message' => 'Password Changed Successfully']);
                    }
                } else {
                    $error = array('password' => 'Please enter correct current password');
                    return response()->json(array('error' => $error), 400);
                }
            }
        } else {
            return response()->json(['message' => 'Please login']);
        }
    }

    public function user_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:8',
            'user_devise_token' => 'required',

        ], [
            'first_name.required' => 'Please Enter Your First Name',
            'last_name.required' => 'Please Enter Your Last Name',
            'email.required' => 'Please Enter Your Email',
            'phone_number.required' => 'Please Enter Phone Number',
            'password.required' => 'Please Enter Password',
            'user_devise_token.required' => 'Please Enter Device Token',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ]);
        } else {
            $exist_user = User::where('email', $request->email)->first();
            if ($exist_user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Email Already Exist',
                ]);
            } else {
                $new_user = new User();

                if ($request->hasFile('profile_image')) {
                    $image = $request->file('profile_image');
                    $imageName = uniqid() . time() . '.' . 'jpg';
                    $directory = 'assets/admin/images/users/';
                    $imgUrl = $directory . $imageName;
                    Image::make($image)->save($imgUrl);
                    $new_user->profile_image = $imgUrl;
                }

                $new_user->first_name = $request->first_name;
                $new_user->last_name = $request->last_name;
                $new_user->email = $request->email;
                $new_user->phone_number = $request->phone_number;
                $new_user->password = Hash::make($request->password);
                $new_user->user_devise_token = $request->user_devise_token;
                $new_user->account_status = 0;
                $new_user->save();

                $success['token'] = $new_user->createToken('srtresapp')->accessToken;

                $phone = $new_user->phone_number;
                $code = rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9) . rand(1, 9);
                $new_user->ver_code = $code;
                $new_user->save();

                $new_user_details = User::where('id', $new_user->id)->first();

                $full_name = $new_user_details->first_name . ' ' . $new_user_details->last_name;

                $msg1 = [
                    'name' => $full_name,
                    'code' => $code,
                ];
                Mail::to($to)->send(new UserRegOtpMail($msg1));

                return response()->json([
                    'status' => 'success',
                    'message' => 'User Account Successfully Register',
                    'access_token' => 'Bearer' . ' ' . $success['token'],
                    'token_type' => 'Bearer',
                    'user' => $new_user_details,
                ]);
            }
        }
    }

    public function reset_password(Request $request)
    { 
        if($request->new_password == $request->confirm_new_password)
        {
            $user_id = $request->user_id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->new_password);
            $obj_user->save();
            if ($obj_user->save()) {
                return response()->json(['status' => 'success','message' => 'Password Successfully Reset']);
            }
        } else {
                return response()->json(['status' => 'fail','message' => 'Please enter correct confirm password'], 400);
        }
    }
}
