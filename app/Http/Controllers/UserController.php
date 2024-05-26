<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('web.user.profile', compact('user'));
    }

    public function wishlist()
    {
        $user = Auth::user();
        $wishlists = Wishlist::where('user_id', $user->id)->get()->load('event');
        return view('web.user.wishlist', compact('wishlists'));
    }

    public function ticket()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get()->load('ticketSection');
        return view('web.user.ticket', compact('orders'));
    }

    public function payment()
    {
        $user = Auth::user();
        $payments =Payment::where('user_id', $user->id)->get()->load('order');
        return view('web.user.payment', compact('payments'));
    }
}
