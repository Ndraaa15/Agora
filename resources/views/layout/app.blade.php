<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['./resources/css/app.css', './resources/js/app.js'])
    <title>Agora</title>
</head>

<body>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
</body>

</html>
