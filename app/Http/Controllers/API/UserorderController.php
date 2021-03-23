<?php

namespace App\Http\Controllers\API;

use App\course;
use App\Http\Controllers\Controller;
use App\user_order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class UserorderController extends Controller
{
    public function user_rezor_order(Request $request)
    {

        $api_key ="rzp_test_WgT05n9QZ9bqqT";
        $api_secret ="aoQJPl0rawnt6EkHR8zAehss";

        $api = new Api($api_key, $api_secret);


        $rec_id = user_order::where('user_id',Auth::user()->id)->get();
        $rec_id_count = count($rec_id) + 1;

        if ($rec_id_count < 10) {
                $rec_order_id = "RECP-"."00000".$rec_id_count;
        }elseif ($rec_id_count >= 10 && $rec_id_count <= 99){
            $rec_order_id = "RECP-"."0000".$rec_id_count;

        }elseif ($rec_id_count >= 100 && $rec_id_count <= 999){
            $rec_order_id = "RECP-"."000".$rec_id_count;
        }elseif ($rec_id_count >= 1000 && $rec_id_count <= 9999){
            $rec_order_id = "RECP-"."00".$rec_id_count;
        }elseif ($rec_id_count <= 10000){
            $rec_order_id = "RECP-"."0".$rec_id_count;
        }
        else{
            $rec_order_id = "RECP-".$rec_id_count;
        }


        $order = $api->order->create(array(
                'receipt' => $rec_order_id,
                'amount' => $request->total_amount,
                'currency' => 'INR'
            )
        );
        $order_id = $order['id'];

        if ($order_id){

            $user_order = new user_order();
            $user_order->user_id = Auth::user()->id;
            $user_order->recp_id = $rec_order_id;
            $user_order->currency = "INR";
            $user_order->razor_order_id = $order_id;
            $user_order->total_amount = $request->total_amount;
            $user_order->tax_amount = $request->tax_amount;
            $user_order->tax_rate = $request->tax_rate;
            $user_order->course_fees = $request->course_fees;
            $user_order->course_id = $request->course_id;
            $user_order->is_payment_done = 1;
            $user_order->status = 1;
            $user_order->order_create_date = Carbon::now()->format('Y-m-d');

            $user_order->save();



            return response()->json([
                'status' => 'success',
                'message' => 'order id successfully created',
                'razor_payment_order_id' => $user_order
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong',
            ]);
        }

    }


    public function user_rezor_order_submit(Request $request)
    {
        $user_order_save = user_order::where('user_id',Auth::user()->id)->where('razor_order_id',$request->razor_order_id)->first();


        if ($user_order_save){
            $user_order_save->course_id = $request->course_id;
            $user_order_save->razor_pay_id = $request->razor_pay_id;
            $user_order_save->razor_signature = $request->razor_signature;
            $user_order_save->is_payment_done = 2;
            $user_order_save->status = 2;


            $course_details = course::where('id',$request->course_id)->first();

            if ($course_details){
                if ($course_details->course_duration <= 1 ){
                    $user_order_save->order_expire_date = Carbon::now()->addMonth($course_details->course_duration)->format('Y-m-d');
                }elseif ($course_details->course_duration >= 1200){
                    $user_order_save->order_expire_date = null;
                }
                else{
                    $user_order_save->order_expire_date = Carbon::now()->addMonths($course_details->course_duration)->format('Y-m-d');
                }

            }
            $user_order_save->save();


//            $api_key ="rzp_test_WgT05n9QZ9bqqT";
//            $api_secret ="aoQJPl0rawnt6EkHR8zAehss";
//            $api = new Api($api_key, $api_secret);
//            $attributes  = array('razorpay_signature'  => $request->razor_signature,  'razorpay_payment_id'  => $request->razor_pay_id ,  'razorpay_order_id' => $request->razor_order_id);
//            $order  = $api->utility->verifyPaymentSignature($attributes);
//
//
//            return $order;

            return response()->json([
                'status' => 'success',
                'message' => 'payment success',
            ]);

        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'order not found',
            ]);
        }

    }



}
