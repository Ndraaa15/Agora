<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addWishlist($event_id)
    {
        try {
            $user = Auth::user();
            Wishlist::create([
                'user_id' => $user->id,
                'event_id' => $event_id,
            ]);
            return redirect()->route('user-wishlist');
        } catch (\Exception $e) {
            if ($e->getCode() == 1062) {
                return redirect()->back()->with('error', 'Event already added to wishlist');
            }
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
