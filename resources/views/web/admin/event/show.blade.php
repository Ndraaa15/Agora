@extends('layout.admin')
@section('content')
<div class="container mx-auto w-11/12 mt-5">
    <h2 class="text-center text-blue-500">Event Details</h2>
    <hr class="my-4">
    <table class="w-full border-collapse mt-5">
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Name</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->name }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Organizer</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->organizer }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Category</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->category_id }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Province</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->province }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">City</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->city }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Description</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->description }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Start Date</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->start_date }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">End Date</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->end_date }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Date</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->date }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Time</th>
            <td class="p-3 border border-gray-300 text-center">{{ $event->time }}</td>
        </tr>
        <tr class="border border-gray-300">
            <th class="p-3 border border-gray-300 bg-gray-200 text-center">Images</th>
            <td class="p-3 border border-gray-300 text-center">
                @foreach($event->images as $image)
                <img src="{{ asset( $image) }}" alt="" class="w-32 h-32 object-cover">
                @endforeach
            </td>
        </tr>
    </table>
    <a href="{{ route('admin-event') }}" class="block w-48 mt-4 p-2 bg-blue-500 text-white text-center rounded">Back to Event List</a>
</div>
@endsection
