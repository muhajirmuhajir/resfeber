<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use Midtrans\Notification;
use App\Models\Transaction;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function notificationHandler(Request $request)
    {
        // Set midtrans configuration
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // create notification
        $notification = new Notification();

        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $notification->order_id;

        $transaction = Transaction::where('payment_id', $order_id)->first();

        if($status == 'capture'){
            if($type == 'credit_card'){
                if($fraud == 'challange'){
                    $transaction->transaction_status = 'CHALLENGE';
                }else{
                    $transaction->transaction_status = 'SUCCESS';
                }

            }
        }else if($status == 'settlement'){
            $transaction->transaction_status = 'SUCCESS';
        }else if($status == 'pending'){
            $transaction->transaction_status = 'PENDING';
        }else if($status == 'deny'){
            $transaction->transaction_status = 'FAILED';
        }else if($status == 'cancel'){
            $transaction->transaction_status = 'CANCELLED';
        }else if($status == 'expire'){
            $transaction->transaction_status = 'EXPIRED';
        }

        $transaction->save();

        // sending email

        return response()->json([
            'meta' =>[
                'code' => 200,
                'message' => 'Midtrans notification handler'
            ]
        ]);
    }

    public function finishRedirect()
    {
        return "transaksi berhasil";
    }

    public function unfinishRedirect()
    {
        return "transaksi sedang di proses";
    }
    public function errorRedirect()
    {
        return abort(400, 'transaksi gagal');
    }
}
