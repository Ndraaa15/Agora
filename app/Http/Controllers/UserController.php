<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $payments = Payment::where('user_id', $user->id)->get()->load('order');
        return view('web.user.payment', compact('payments'));
    }

    public function updateProfile(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'phone' => 'required|string|max:20',
                'password' => 'nullable|string|min:8|confirmed',
            ]);

            $user = User::find(Auth::id());

            $password = $user->password;
            if ($request->password) {
                $password = Hash::make($request->password);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $password,
            ]);

            return redirect()->route('user-profile');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
