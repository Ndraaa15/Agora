@extends('layout.app')
@section('content')
<div class="w-full">
    <div class="w-full mb-10">
        <img src="{{ asset('storage/' .$event->images[0]) }}" alt="{{ $event->name }}" class="object-cover w-full h-[45rem]">
    </div>
    <div class="px-60">
        <div class="flex flex-row gap-5 justify-end">
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('wishlist').addEventListener('click', function() {
                        document.getElementById('bookmarkForm').submit();
                    });
                });
            </script>
            <form id="bookmarkForm" action="{{ route('add-wishlist', ['event_id' => $event->id]) }}" method="POST" class="hidden">
                @csrf
                <input type="hidden" name="message" value="Bookmark clicked">
            </form>
            <div id="wishlist" class="p-2 bg-white shadow-md rounded-lg cursor-pointer">
                <img src="{{ asset('assets/icons/bookmark.png')}}" alt="">
            </div>
            <div class="p-2 bg-white shadow-md rounded-lg cursor-pointer">
                <img src="{{ asset('assets/icons/share.png')}}" alt="">
            </div>
        </div>
        <div class="flex mb-10 flex-row mt-20 justify-between">
            <div class="flex flex-col gap-5   ">
                <h1 class="text-4xl font-bold">{{ $event->name }}</h1>
                <div class="flex flex-grow items-center">
                    <img src="{{ asset('assets/icons/location.png') }}" alt="Location">
                    <p class="text-gray-500 font-medium text-lg">{{ $event->city }}, {{ $event->province }}</p>
                </div>
            </div>
            <div>
                <h1 class="text-end font-semibold text-xl">Date Registration</h1>
                <p class="font-medium text-gray-500">{{ $event->start_date }} - {{ $event->end_date }}</p>
            </div>
        </div>
        <div class="border-2 border-gray-300 mb-10"></div>
        <div class="flex flex-row justify-between h-60">
            <div class="bg-white px-5 shadow-lg w-3/4 rounded-lg">
                <h1 class="text-2xl font-bold">Description</h1>
                <p class="text-gray-400">{{ $event->description }}</p>
            </div>
            <div class="flex flex-col gap-5 bg-white px-5 shadow-lg rounded-lg">
                <h1 class="text-xl font-bold">Other Information</h1>
                <div class="flex flex-col gap-3">
                    <div class="flex flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/calendar.png') }}" alt="Calendar">
                        <p class="text-gray-500 font-medium">{{ $event->date }}</p>
                    </div>
                    <div class="flex flex-row items-center gap-3">
                        <img src="{{ asset('assets/icons/time.png') }}" alt="Clock">
                        <p class="text-gray-500 font-medium">{{ $event->time }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-20 p-5 bg-gray-50 shadow-lg flex flex-col gap-5 rounded-lg">
            <h1 class="text-2xl font-bold mb-10">Choose your ticket</h1>
            @foreach ($ticketSections as $ticketSection )
            <a href="{{ route('checkout', ['ticket_section_id' => $ticketSection->id]) }}">
                <div class="border bg-white border-gray-400 shadow-lg rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-105">
                    <div class="flex flex-row justify-between items-center p-5">
                        <div class="flex flex-col gap-3">
                            <h1 class="font-semibold text-xl">{{ $ticketSection->name }}</h1>
                            <p>{{ $ticketSection->description }}</p>
                        </div>
                        <div class="flex flex-row items-center gap-5">
                            <p>Rp{{ $ticketSection->price }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="my-20 p-5 bg-white shadow-lg">
            <h1 class="text-2xl font-bold mb-10">Location</h1>
            <iframe src="{{ $event->location_map }}" allowfullscreen="" loading="lazy" class="w-full h-96 outline-none rounded-lg "></iframe>
        </div>
    </div>
</div>
@endsection
