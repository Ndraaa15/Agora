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
}
