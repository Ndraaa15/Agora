@extends('layout.app')
@section('content')

<div class="container mx-auto">
    <div class="flex flex-row justify-center p-12">
        @include('partial.user.menu')
        <div class="xl:w-8/12 ml-5">
            <div class="min-h-screen bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-3xl text-left font-bold mx-6 my-2">Wishlist</h1>
                <div class="grid grid-cols-3 gap-6 p-6">
                    @foreach ($wishlists as $wishlist)
                        <div class="bg-white shadow-md rounded-lg">
                            <div class="mb-4">
                                <img src="{{ asset($wishlist->event->images[0]) }}" class="w-full h-auto rounded-md">
                            </div>
                            <div class="text-left pl-6 pb-4">
                                <h2 class="text-xl font-bold">{{ $wishlist->event->name }}</h2>
                                <p>{{ $wishlist->event->date }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
