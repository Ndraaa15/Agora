@extends('layout.app')
@section('content')
<div class="w-full ">
    <div class="relative">
        <div class="absolute inset-0 flex flex-col items-center justify-center z-10">
            <h1 class="text-2xl font-bold mb-3 text-white">What event are you looking for?</h1>
            <div class="relative w-1/4">
                <input type="text" class="w-full px-8 py-3 border border-gray-300 rounded-md outline-none">
                <img src="{{ asset('assets/icons/search.png') }}" alt="Search Icon" class="absolute right-5 top-1/2 transform -translate-y-1/2 w-7 h-7">
            </div>
        </div>
        <div>
            <img class="w-full object-fill -z-10" src="{{ asset('assets/images/home-1.jpg') }}" alt="Danau Batur">
        </div>
    </div>
    <div class="mt-20 px-60 mb-20">
        <h1 class="font-bold text-4xl">Upcoming Events</h1>
        <div class="flex flex-row gap-2 mt-10 justify-between">
            @foreach($upcomingEvents as $upcomingEvent)
            <div class="px-5 py-2 pb-10 shadow-md rounded-md">
                <img src="{{ asset( $upcomingEvent['image'] ) }}" alt="" class="rounded-md">
                <div class="flex flex-row justify-between mt-5 items-center">
                    <h1 class="text-xl font-bold">{{$upcomingEvent['name']}}</h1>
                    <p class="text-sm text-gray-400">{{$upcomingEvent['price']}}</p>
                </div>
                <p class="text-sm text-gray-400 mt-2 mb-3">{{$upcomingEvent['city']}}, {{$upcomingEvent['province']}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mt-20 px-60 mb-20">
        <h1 class="font-bold text-4xl">Categories</h1>
        <div class="w-full grid grid-cols-3 mt-10 gap-10">
            @foreach ($categories as $category)
            <div class="relative flex flex-col items-center justify-center p-5 rounded-lg shadow-md">
                <img src="{{ asset($category['image']) }}" alt="" class="w-full h-auto rounded-lg">
                <h1 class="text-2xl font-bold mt-5 text-white absolute">{{ $category['name'] }}</h1>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
