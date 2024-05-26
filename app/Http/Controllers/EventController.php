<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class EventController extends Controller
{
    public function index(Request $request)
    {
        try {
            $events = Event::All();

            if ($request->query('search')) {
                $search = $request->query('search');
                $events = $events->where('name', 'like', '%' . $search . '%');
            }

            if ($request->query('category')) {
                $category = $request->query('category');
                $events = $events->where('category_id', $category);
            }

            return view('web.events', compact('events'));
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function show($event_id)
    {
        try {
            $event = Event::find($event_id)->load('ticketSections');
            $ticketSections = $event->ticketSections;
            return view('web.event', compact('event', 'ticketSections'));
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
