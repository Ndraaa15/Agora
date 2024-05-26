<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="text-center">
    <h1>Hello, {{$user->name}}</h1>
    <p>Thank you for purchasing a ticket. We have attached your ticket to this email.</p>
    <p>We hope you enjoy the event!</p>
    <p>Best regards,</p>
    <p>The Event Team</p>
</div>
</body>
</html>
