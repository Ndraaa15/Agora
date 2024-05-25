<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | Event Management</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <div class="container mx-auto w-11/12 mt-5">
        <h2 class="text-center text-blue-500">Add Event</h2>
        <hr class="my-4">
        <form action="{{ route('crud.update', ['id' => $crud->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name" class="block">Name Event</label>
                <input type="text" id="name" class="form-control border border-gray-300 p-2 w-full" placeholder="Add Event" name="name" required>
            </div>
            <div class="form-group mb-4">
                <label for="organizer" class="block">Organizer</label>
                <input type="text" id="organizer" class="form-control border border-gray-300 p-2 w-full" placeholder="Add Organizer" name="organizer" required>
            </div>
            <div class="form-group mb-4">
                <label for="category_id" class="block">Category</label>
                <input type="text" id="category_id" class="form-control border border-gray-300 p-2 w-full" placeholder="Add Category" name="category_id" required>
            </div>
            <div class="form-group mb-4">
                <label for="province" class="block">Province</label>
                <input type="text" id="province" class="form-control border border-gray-300 p-2 w-full" placeholder="Add Province" name="province" required>
            </div>
            <div class="form-group mb-4">
                <label for="city" class="block">City</label>
                <input type="text" id="city" class="form-control border border-gray-300 p-2 w-full" placeholder="Add City" name="city" required>
            </div>
            <div class="form-group mb-4">
                <label for="description" class="block">Description</label>
                <textarea id="description" class="form-control border border-gray-300 p-2 w-full" name="description" required></textarea>
            </div>
            <div class="form-group mb-4">
                <label for="images" class="block">Images</label>
                <input type="file" id="images" name="images" class="w-full" required>
                <p class="text-red-500 text-sm mt-1">Allowed extensions: .png, .jpg, .jpeg, .gif</p>
            </div>
            <div class="form-group mb-4">
                <label for="start_date" class="block">Start Date</label>
                <input type="date" id="start_date" class="form-control border border-gray-300 p-2 w-full" name="start_date" required>
            </div>
            <div class="form-group mb-4">
                <label for="end_date" class="block">End Date</label>
                <input type="date" id="end_date" class="form-control border border-gray-300 p-2 w-full" name="end_date" required>
            </div>
            <div class="form-group mb-4">
                <label for="date" class="block">Date</label>
                <input type="date" id="date" class="form-control border border-gray-300 p-2 w-full" name="date" required>
            </div>
            <div class="form-group mb-4">
                <label for="time" class="block">Time</label>
                <input type="time" id="time" class="form-control border border-gray-300 p-2 w-full" name="time" required>
            </div>
            <div class="form-group mb-4">
                <label for="location_map" class="block">Location Map</label>
                <input type="text" id="location_map" class="form-control border border-gray-300 p-2 w-full" name="location_map" required>
            </div>
            <input type="submit" name="submit" value="Save" class="bg-blue-500 text-white p-2 rounded cursor-pointer">
        </form>
    </div>
</body>
</html>
