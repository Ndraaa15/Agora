@extends('layout.app')
@section('content')
<div class="w-full">
    <div class="w-full mb-20">
        <img src="{{ asset($event->images[1]) }}" alt="{{ $event->name }}" class="object-cover w-full h-[45rem]">
    </div>
    <div class="px-60">
        <div class="flex flex-row gap-5 justify-end">
            <div class="p-2 bg-white shadow-md rounded-lg cursor-pointer">
                <img src="{{ asset('assets/icons/bookmark.png')}}" alt="">
            </div>
            <div class="p-2 bg-white shadow-md rounded-lg cursor-pointer">
                <img src="{{ asset('assets/icons/share.png')}}" alt="">
            </div>
        </div>
        <div class="flex flex-row mt-10 justify-between">
            <div class="mb-20">
                <h1>{{ $event->name }}</h1>
                <div class="flex flex-grow items-center">
                    <img src="{{ asset('assets/icons/location.png') }}" alt="Location">
                    <p>{{ $event->city }}, {{ $event->province }}</p>
                </div>
            </div>
            <div>
                <h1 class="text-end">Date Registration</h1>
                <p>{{ $event->start_date }} until {{ $event->end_date }}</p>
            </div>
        </div>
        <div class="border-2 border-gray-300 mb-10"></div>
        <div class="flex flex-row justify-between h-60">
            <div class="bg-white px-5 shadow-lg w-3/4">
                <h1 class="text-2xl font-bold">Description</h1>
                <p class="text-gray-400">{{ $event->description }}</p>
            </div>
            <div class="flex flex-col gap-5 bg-white px-5 shadow-lg">
                <h1>Other Information</h1>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/calendar.png') }}" alt="Calendar">
                        <p>{{ $event->date }}</p>
                    </div>
                    <div class="flex flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/time.png') }}" alt="Clock">
                        <p>{{ $event->time }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-20 p-5 bg-white shadow-lg">
            <h1 class="text-2xl font-bold mb-10">Choose your ticket</h1>
            <div class="border border-gray-400 shadow-lg rounded-lg">
                <div class="flex flex-row justify-between items-center p-5">
                    <div class="flex flex-col items-center gap-3">
                        <h1>Section 1</h1>
                        <p>ini adalah</p>
                    </div>
                    <div class="flex flex-row items-center gap-5">
                        <p>Rp. 10000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-20 p-5 bg-white shadow-lg">
            <h1 class="text-2xl font-bold mb-10">Location</h1>
            <iframe src="{{ $event->location_map }}"  allowfullscreen="" loading="lazy" class="w-full h-96 outline-none rounded-lg "></iframe>
        </div>
    </div>
</div>
@endsection
