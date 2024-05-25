<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show | Event Management</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <div class="container mx-auto w-11/12 mt-5">
        <h2 class="text-center text-blue-500">Event Details</h2>
        <hr class="my-4">
        <table class="w-full border-collapse mt-5">
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Name</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->name }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Organizer</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->organizer }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Category</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->category_id }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Province</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->province }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">City</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->city }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Description</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->description }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Start Date</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->start_date }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">End Date</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->end_date }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Date</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->date }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Time</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->time }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Location Map</th>
                <td class="p-3 border border-gray-300 text-center">{{ $crud->location_map }}</td>
            </tr>
            <tr class="border border-gray-300">
                <th class="p-3 border border-gray-300 bg-gray-200 text-center">Images</th>
                <td class="p-3 border border-gray-300 text-center"><img src="{{ asset('images/' . $crud->images) }}" width="100" class="mx-auto"></td>
            </tr>
        </table>
        <a href="{{ route('crud.index') }}" class="block w-48 mt-4 p-2 bg-blue-500 text-white text-center rounded">Back to Event List</a>
    </div>
</body>
</html>
