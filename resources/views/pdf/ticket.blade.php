<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .break-after-page {
            page-break-after: always;
        }
    </style>
</head>
<body class="bg-gray-100">
    @foreach ($datas as $data)
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-10 break-after-page">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold">{{ $data['name'] }}</h1>
        </div>
        <div class="mb-4">
            <p class="text-gray-700"><strong>Price:</strong> {{ $data['price'] }}</p>
            <p class="text-gray-700"><strong>Location:</strong> {{ $data['location'] }}</p>
            <p class="text-gray-700"><strong>Order Code:</strong> {{ $data['code'] }}</p>
        </div>
        <div class="text-center mt-6">
            <p> {{$data['qr_code']}}</p>
            <img src="{{ $data['qr_code'] }}" alt="QR Code">
            <img src="{{ $data['qr_code'] }}" alt="QR Code">
        </div>
    </div>
    @endforeach
</body>
</html>
