<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function updateStatusPayment(Request $request)
    {
        $payment = Payment::where('order_id', $request->order_id)->first();
        $payment->status = $request->status;
        $payment->save();

        $order = Order::find($request->order_id);
        $order->status = $request->status;
        $order->save();

        return response()->json([
            'success' => true,
            'message' => 'Payment status updated successfully'
        ]);
    }
}
