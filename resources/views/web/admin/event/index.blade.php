@extends('layout.admin')
@section('content')
<div class="container mx-auto w-11/12">
    <div class="flex flex-row gap-5 items-center">
        <a href="{{ route('admin-event-create')}}" class="block p-2 bg-blue-500 text-white text-center rounded mb-4 mt-4">Add Events</a>
        <a href="{{ route('signout')}}" class="block w-24 p-2 bg-red-500 text-white text-center rounded mb-4 mt-4">Logout</a>
    </div>
    <table class="w-full border-collapse mt-5">
        <thead>
            <tr>
                <th class="p-3 border border-gray-300 bg-gray-200">No</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Name</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Organizer</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Category</th>
                <th class="p-3 border border-gray-300 bg-gray-200">City</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Date</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Time</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td class="p-3 border border-gray-300 text-center">{{ $loop->iteration }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $event->name }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $event->organizer }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $event->category->name }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $event->city }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $event->date }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $event->time }}</td>
                <td class="p-3 border border-gray-300 text-center space-x-2">
                    <form action="{{ route('admin-event-edit', $event->id) }}" method="GET" class="inline-block">
                        <button class="p-2 bg-blue-500 text-white rounded">Edit</button>
                    </form>
                    <form action="{{ route('admin-event-show', $event->id) }}" method="GET" class="inline-block">
                        <button class="p-2 bg-green-500 text-white rounded">Show</button>
                    </form>
                    <form action="{{ route('admin-event-delete', $event->id) }}" method="GET" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this event?');">
                        @csrf
                        <button class="p-2 bg-red-500 text-white rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
