<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/icons/logo.png') }}" type="image/x-icon">
    <meta name="description" content="A place to gather symphony">
    <link rel="icon" href="">
    @vite(['./resources/css/app.css', './resources/js/app.js'])
    <title>Agora</title>
</head>

<body>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
</body>

</html>
