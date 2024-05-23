<?php

namespace Lib;

use Midtrans\Config;

class MidtransLib
{
    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function chargeSnap()
    {
        $params = array(
            'transaction_details' => array(
                'order_id' => '1',
                'gross_amount' => 123,
            ),
            'customer_details' => array(
                'first_name' => 'John',
                'email' => 'ai',
            ),
        );

        return \Midtrans\Snap::createTransaction($params)->redirect_url;
    }
}
