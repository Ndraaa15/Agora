<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\ThirdParty\CloudinaryLib;

class EventController extends Controller
{
    public function index()
    {
        try {
            $events = Event::paginate(10)->load('category');
            return view('web.admin.event.index', compact('events'));
        } catch (\Exception $e) {
            return redirect()->route('admin-event')->withErrors('error', $e->getMessage());
        }
    }

    public function create()
    {
        return view('web.admin.event.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'organizer' => 'required|string|max:255',
                'category_id' => 'required|string|max:255',
                'province' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'description' => 'required|string',
                'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'date' => 'required|date',
                'time' => 'required|date_format:H:i',
                'location_map' => 'required|string|max:255',
            ]);

            $imagesUrl = [];
            $cloudinary = new CloudinaryLib();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $result = $cloudinary->upload($image->getRealPath());
                    $imagesUrl[] = $result;
                }
            }

            Event::create([
                'name' => $request->name,
                'organizer' => $request->organizer,
                'category_id' => $request->category_id,
                'province' => $request->province,
                'city' => $request->city,
                'description' => $request->description,
                'images' => $imagesUrl,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'date' => $request->date,
                'time' => $request->time,
                'location_map' => $request->location_map,
            ]);

            return redirect()->route('admin-event')->with('success', 'Event created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin-event')->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        try {
            $event = Event::find($id);

            if (!$event) {
                return redirect()->route('admin-event')->withErrors('error', 'Record not found');
            }

            return view('web.admin.event.edit', compact('event'));
        } catch (\Exception $e) {
            return redirect()->route('admin-event')->withErrors('error', $e->getMessage());
        }
    }

    public function editsave(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'organizer' => 'required|string|max:255',
                'category_id' => 'required|string|max:255',
                'province' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'description' => 'required|string',
                'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
                'start_date' => 'date',
                'end_date' => 'date',
                'date' => 'date',
                'time' => 'required|date_format:H:i',
                'location_map' => 'required|string|max:255',
            ]);

            $imagesUrl = [];
            $cloudinary = new CloudinaryLib();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $result = $cloudinary->upload($image->getRealPath());
                    $imagesUrl[] = $result;
                }
            }
            $event = Event::find($id);
            $event->update([
                'name' => $request->name,
                'organizer' => $request->organizer,
                'category_id' => $request->category_id,
                'province' => $request->province,
                'city' => $request->city,
                'description' => $request->description,
                // 'images' => $imagesUrl,
                // 'start_date' => $request->start_date,
                // 'end_date' => $request->end_date,
                // 'date' => $request->date,
                'time' => $request->time,
                'location_map' => $request->location_map,
            ]);
            return redirect()->route('admin-event');
        } catch (\Exception $e) {
            return redirect()->route('admin-event')->withErrors('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            Event::where('id', $id)->delete();
            return redirect()->route('admin-event');
        } catch (\Exception $e) {
            return redirect()->route('admin-event')->withErrors('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $event = Event::find($id);
            if (!$event) {
                return redirect()->route('admin-event')->withErrors('error', 'not_found');
            }
            return view('web.admin.event.show', compact('event'));
        } catch (\Exception $e) {
            return redirect()->route('admin-event')->withErrors('error', $e->getMessage());
        }
    }
}
