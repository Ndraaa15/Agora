<?php

namespace App\ThirdParty;

use App\Models\Order;
use Midtrans\Config;
use Midtrans\Snap;


class MidtransLib
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function chargeSnap(Order $order, $user)
    {
        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'email' => $user->email,
            ),
        );

        return Snap::createTransaction($params)->redirect_url;
    }
}
