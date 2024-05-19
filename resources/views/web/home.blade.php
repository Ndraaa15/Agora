@extends('layout.app')
@section('content')
<div class="w-full ">
    <div class="relative">
        <div class="absolute inset-0 flex flex-col items-center justify-center z-10">
            <h1 class="text-2xl font-bold mb-3 text-white">What event are you looking for?</h1>
            <div class="relative w-1/4">
                <input type="text" class="w-full px-8 py-3 border border-gray-300 rounded-md outline-none">
                <img src="{{ asset('assets/icons/search-events.png') }}" alt="Search Icon" class="absolute right-5 top-1/2 transform -translate-y-1/2 w-7 h-7">
            </div>
        </div>
        <div>
            <img class="w-full object-cover -z-10 min-h-screen" src="{{ asset('assets/images/home-1.jpg') }}" alt="Danau Batur">
        </div>
    </div>
    <div class="px-60 py-20 relative overflow-hidden">
        <img src="{{ asset('assets/images/ulir-dayak.png') }}" alt="Ulir Dayak" class="absolute -z-50 -left-10 w-72">
        <h1 class="font-bold text-4xl">Upcoming Events</h1>
        <div class="relative mt-10">
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                <div id="prevBtn" class="p-5 bg-blue-400 cursor-pointer">
                    <img src="{{asset('assets/icons/left.png')}}" alt="Previous">
                </div>
            </div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                <div id="nextBtn" class="p-5 bg-blue-400 cursor-pointer">
                    <img src="{{asset('assets/icons/right.png')}}" alt="Next">
                </div>
            </div>
            <div id="carouselWrapper" class="overflow-hidden relative">
                <div id="carousel" class="flex gap-6">
                    @foreach($upcomingEvents as $upcomingEvent)
                    <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white min-w-[20%] flex-shrink-0">
                        <img src="{{ asset($upcomingEvent->images[0]) }}" alt="" class="rounded-md">
                        <div class="flex flex-row justify-between mt-5 items-center">
                            <h1 class="text-xl font-bold">{{$upcomingEvent->name}}</h1>
                            <p class="text-sm text-gray-400">{{ $upcomingEvent->date }}</p>
                        </div>
                        <p class="text-sm text-gray-400 mt-2 mb-3">{{ $upcomingEvent->city }}, {{ $upcomingEvent->province }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carousel');
            const carouselWrapper = document.getElementById('carouselWrapper');
            const items = carousel.querySelectorAll('.min-w-[20%]');
            const totalItems = items.length;
            const itemWidth = items[0].offsetWidth + parseInt(getComputedStyle(items[0]).marginRight, 10);
            let currentIndex = 0;

            console.log('Total items:', totalItems);
            console.log('Item width including margin:', itemWidth);

            document.getElementById('prevBtn').addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    console.log('Prev clicked. Current index:', currentIndex);
                    carousel.scrollBy({
                        left: -itemWidth,
                        behavior: 'smooth'
                    });
                }
            });

            document.getElementById('nextBtn').addEventListener('click', () => {
                if (currentIndex < totalItems - 4) {
                    currentIndex++;
                    console.log('Next clicked. Current index:', currentIndex);
                    carousel.scrollBy({
                        left: itemWidth,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    <div class="mt-20 px-60 mb-20 relative overflow-hidden">
        <img src="{{ asset('assets/images/ulir-dayak.png') }}" alt="Ulir Dayak" class="absolute -z-50 -right-10 w-72">
        <h1 class="font-bold text-4xl">Categories</h1>
        <div class="w-full grid grid-cols-3 mt-10 gap-10">
            @foreach ($categories as $category)
            <div class="relative flex flex-col items-center justify-center p-5 rounded-lg bg-white">
                <img src="{{ asset($category->image) }}" alt="" class="w-full h-auto rounded-lg shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-110">
                <h1 class="text-2xl font-bold mt-5 text-white absolute">{{ $category->name }}</h1>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
