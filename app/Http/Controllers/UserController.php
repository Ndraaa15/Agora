<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Ticket;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\ThirdParty\CloudinaryLib;
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
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $user = User::find(Auth::id());

            $password = $user->password;
            if ($request->password) {
                $password = Hash::make($request->password);
            }

            $cloudinary = new CloudinaryLib();
            $profilePicture = $user->profile_picture;
            if ($request->hasFile('profile_picture')) {
                $result = $cloudinary->upload($request->file('profile_picture')->getRealPath());
                $profilePicture = $result;
            }


            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $password,
                'profile_picture' => $profilePicture
            ]);

            return redirect()->route('user-profile');
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function getTicketDetails($order_id){
        $user = Auth::user();
        $order = Order::find($order_id);
        $tickets = Ticket::where('user_id', $user->id)->where('order_id', $order_id)->get()->load('order');
        if(!$tickets){
            return redirect()->route('user-ticket');
        }
        return view('web.user.ticket-detail', compact('order', 'tickets'));
    }
}
