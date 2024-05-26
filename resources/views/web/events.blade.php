@extends('layout.app')
@section('content')
<div class="mt-20 px-60 w-full">
    <div class="mb-20">
        <div class="flex flex-row gap-0">
            <div class="flex flex-row relative items-center w-full">
                <img src="{{ asset('assets/icons/search-events.png') }}" alt="Search Events" class="absolute w-6 h-6 left-3">
                <input id="search-input" placeholder="What are you looking for..." type="text" name="search" id="search" class="pl-10 outline-none border border-blue-400 w-full py-2 pr-8 rounded-md rounded-br-none rounded-tr-none">
            </div>
            <button class="py-2 px-6 bg-blue-400 rounded-md rounded-bl-none rounded-tl-none text-white font-medium">Search</button>
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
        </div>
        <div class="flex flex-row mt-10 gap-10">
            @foreach ($categories as $category )
            <a href="{{ route('events', ['category_id' => $category->id ])}}" class="px-6 py-2 rounded-3xl border-2 border-blue-400 text-gray-600 hover:bg-blue-400 hover:text-white bg-white">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="grid grid-cols-4 gap-6 px-4 mb-40">
        @foreach($events as $event)
        <a href="{{ route('event', ['event_id' => $event->id]) }}">
            <div class="px-5 py-2 pb-10 shadow-lg rounded-md bg-white">
                <img src="{{ asset( $event->images[0] ) }}" alt="" class="rounded-md">
                <div class="flex flex-row justify-between mt-5 items-center">
                    <h1 class="text-xl font-bold">{{$event->name}}</h1>
                    <p class="text-sm text-gray-400">{{ $event->date }}</p>
                </div>
                <p class="text-sm text-gray-400 mt-2 mb-3">{{ $event->city }}, {{ $event->province }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
