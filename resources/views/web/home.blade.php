@extends('layout.app')
@section('content')
<div class="w-full ">
    <div class="relative">
        <div class="absolute inset-0 flex flex-col items-center justify-center z-10">
            <h1 class="text-2xl font-bold mb-3 text-white">What event are you looking for?</h1>
            <div class="relative w-1/4">
                <input type="text" class="w-full px-8 py-3 border border-gray-300 rounded-md outline-none" id="search-input" onkeypress="handleKeyPress(event)">
                <img src="{{ asset('assets/icons/search-events.png') }}" alt="Search Icon" class="absolute right-5 top-1/2 transform -translate-y-1/2 w-7 h-7 cursor-pointer" id="search-icon" onclick="searchEvent()">
            </div>
        </div>
        <script>
            function searchEvent() {
                let inputVal = document.getElementById('search-input').value;
                window.location.href = '/events?search=' + inputVal;
            }

            function handleKeyPress(event) {
                if (event.keyCode === 13) {
                    searchEvent();
                }
            }
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const images = [
                    'assets/images/home-1.jpg',
                    'assets/images/home-2.jpg',
                    'assets/images/home-3.jpg',
                ];
                let currentIndex = 0;

                const imageElement = document.getElementById("slideshow-image");

                function changeImage() {
                    currentIndex = (currentIndex + 1) % images.length;
                    imageElement.src = images[currentIndex];
                }

                setInterval(changeImage, 3000);
            });
        </script>
        <div>
            <img id="slideshow-image" class="w-full object-cover -z-10 min-h-screen" src="{{ asset('assets/images/home-1.jpg') }}" alt="Slideshow Image">
        </div>
    </div>
    <div class="px-60 py-20 relative overflow-hidden">
        <img src="{{ asset('assets/images/ulir-dayak.png') }}" alt="Ulir Dayak" class="absolute -z-50 -left-10 w-72">
        <h1 class="font-bold text-4xl">Upcoming Events</h1>
        <div class="grid grid-cols-4 mt-10 gap-6">
            @foreach($upcomingEvents as $upcomingEvent)
            <a href="{{ route('event', ['event_id' => $upcomingEvent->id])}}">
                <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white h-96 cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('storage/' . $upcomingEvent->images[0] ) }}" alt="{{ $upcomingEvent->name }}" class="rounded-md">
                    <div class="flex flex-row justify-between mt-5 items-center">
                        <h1 class="text-xl font-bold">{{$upcomingEvent->name}}</h1>
                        <p class="text-sm text-gray-400">{{ $upcomingEvent->date }}</p>
                    </div>
                    <p class="text-sm text-gray-400 mt-2 mb-3">{{ $upcomingEvent->city }}, {{ $upcomingEvent->province }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <div class="mt-20 px-60 mb-20 relative overflow-hidden">
        <img src="{{ asset('assets/images/ulir-dayak.png') }}" alt="Ulir Dayak" class="absolute -z-50 -right-10 w-72">
        <h1 class="font-bold text-4xl">Categories</h1>
        <div class="w-full grid grid-cols-3 mt-10 gap-10">
            @foreach ($categories as $category)
            <a href="{{ route('events', ['category' => $category->id]) }}">
                <div class="relative flex flex-col items-center justify-center p-5 rounded-lg bg-white">
                    <img src="{{ asset($category->image) }}" alt="" class="w-full h-auto rounded-lg shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-110">
                    <h1 class="text-2xl font-bold mt-5 text-white absolute">{{ $category->name }}</h1>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
