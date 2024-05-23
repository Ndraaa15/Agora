<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::All();
        return view('web.events', compact('events'));
    }

    public function show($event_id)
    {
        $event = Event::find($event_id);
        return view('web.event', compact('event'));
    }
}
