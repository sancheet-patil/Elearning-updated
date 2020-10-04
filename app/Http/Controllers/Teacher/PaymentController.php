<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Razorpay\Api\Api;
use Illuminate\Support\str;

class PaymentController extends Controller
{
    private $razorpayId = "rzp_live_iWfOsgXI6Gvn8p";
    private $razorpayKey = "ACGpCC4cEHTH4z7dDN9mJ06T";

    public function Initiate(Request $request)
    {


        $receiptId= str::random(20);

        $api = new Api($this->razorpayId, $this->razorpayKey);

        $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR'
            )
          );


          $response=[
              'orderId'=>$order['id'],
              'razorpayId'=>$this->razorpayId,
              'amount' => $request->all()['amount'] * 100,
              'name'=>$request->all()['name'],
              'currency'=> 'INR',
              'email'=>$request->all()['email'],
              'contactNumber'=>$request->all()['contactNumber'],
              'address'=>$request->all()['address'],
              'description'=>'Testing discription',

          ];
          return view('teacher.payout.paymentpage',compact('response'));
    }
    public function complete(Request $request)
    {
      //  print_r($request->all());
       // exit();
      $signatureStatus = $this->SignatureVerify(
           $request->all()['rzp_signature'],
           $request->all()['rzp_paymentid'],
           $request->all()['rzp_orderid']
      );
      if($signatureStatus == true)
      {return view('teacher.payout.payment-failed-page');
          
      }else{
        return view('teacher.payout.payment-success-page');
      }
      
     }

       private function SignatureVerify($_signature,$_paymentId,$_orderId)
       {
           try{
            $api = new Api($this->razorpayId, $this->razorpayKey);
            $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'order_id' => $_orderId);
            $order  = $api->utility->verifyPaymentSignature($attributes);
           return true;

           }catch(\Exception $e)
           {
               return false;
           }
    }
}
