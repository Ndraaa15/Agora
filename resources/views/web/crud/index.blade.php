<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>

    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
<div class="container mx-auto w-11/12">
    <h1 class="text-blue-500">Event Management</h1>
    <a href="/crud/create" class="block w-24 p-2 bg-blue-500 text-white text-center rounded mb-4">Add Events</a>
    <table class="w-full border-collapse mt-5">
        <thead>
            <tr>
                <th class="p-3 border border-gray-300 bg-gray-200">No</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Name</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Organizer</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Category</th>
                <th class="p-3 border border-gray-300 bg-gray-200">City</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Images</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Date</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Time</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Location Map</th>
                <th class="p-3 border border-gray-300 bg-gray-200">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $e)
            <tr>
                <td class="p-3 border border-gray-300 text-center">{{ $loop->iteration }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->name }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->organizer }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->category_id }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->city }}</td>
                <td class="p-3 border border-gray-300 text-center"><img src="{{ asset('assets/images/' . $e->images) }}" width="35" height="40" class="mx-auto"></td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->date }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->time }}</td>
                <td class="p-3 border border-gray-300 text-center">{{ $e->location_map }}</td>
                <td class="p-3 border border-gray-300 text-center space-x-2">
                    <form action="{{ route('crud.edit', $e->id) }}" method="GET" class="inline-block">
                        <button class="p-2 bg-blue-500 text-white rounded">Edit</button>
                    </form>
                    <form action="{{ route('crud.show', $e->id) }}" method="GET" class="inline-block">
                        <button class="p-2 bg-green-500 text-white rounded">Show</button>
                    </form>
                    <form action="{{ route('crud.delete', $e->id) }}" method="GET" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this event?');">
                        @csrf
                        <button class="p-2 bg-red-500 text-white rounded">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
