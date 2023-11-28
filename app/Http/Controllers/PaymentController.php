<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PaytmWallet;

class PaymentController extends Controller
{
/**
* Redirect the user to the Payment Gateway.
*
* @return Response
*/
    public function order(Request $request)
    {
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
            'order' =>$request->  $order->id,
            'user' => $request-> $user->id,
            'mobile_number' => $user->phonenumber,
            'email' => $user->email,
            'amount' => $order->amount,
            'callback_url' => 'http://example.com/payment/status'
        ]);
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');

        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm

        if($transaction->isSuccessful()){
            //Transaction Successful
        }else if($transaction->isFailed()){
            //Transaction Failed
        }else if($transaction->isOpen()){
            //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }


    /**
     * Obtain the transaction status/information.
     *
     * @return Object
     */
    public function statusCheck(Request $request){
        $status = PaytmWallet::with('status');
        $status->prepare(['order' => $request-> $order->id]);
        $status->check();

        $response = $status->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=txn-status-api-description

        if($status->isSuccessful()){
            //Transaction Successful
        }else if($status->isFailed()){
            //Transaction Failed
        }else if($status->isOpen()){
            //Transaction Open/Processing
        }
        $status->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $status->getOrderId(); // Get order id
        $status->getTransactionId(); // Get transaction id
    }
}
