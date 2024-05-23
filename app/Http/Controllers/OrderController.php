<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketSection;

class OrderController extends Controller
{
    public function index($ticket_section_id)
    {
        // try to not use load
        $ticketSection = TicketSection::find($ticket_section_id)->load('event');
        $event = $ticketSection->event;
        return view('web.checkout', compact('ticketSection', 'event'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'ticket_section_id' => 'required|exists:ticket_sections,id',
            'quantity' => 'required|integer|min:1',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'payment_method' => 'required|string|in:paypal,stripe',
        ]);

        $ticketSection = TicketSection::find($request->ticket_section_id);
        $total = $ticketSection->price * $request->quantity;

        return view('web.payment', compact('ticketSection', 'total'));
    }
}
