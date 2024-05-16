@extends('layout.app')
@section('content')
<div class="px-64 py-16 mb-8 min-h-full">
    <div class="flex flex-row justify-evenly">
        <div class="p-10 w-1/2 shadow-lg bg-white">
            <h1>Checkout</h1>
            <div class="border border-gray-400"></div>
            <h2>Contact Information</h2>
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-400 rounded-lg p-2">
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-400 rounded-lg p-2">
            </div>
            <div class="flex flex-col">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="w-full border border-gray-400 rounded-lg p-2">
            </div>
        </div>
        <div class="w-1/4 p-5 shadow-lg">
            <h1>Checkout</h1>
            <div class="border border-gray-400"></div>
            <div class="flex flex-row">
                <img src="{{ asset( $event->images[0])}}" alt="" class="w-28 h-28">
                <div>
                    <h1>Event Name</h1>
                    <p>Ticket</p>
                    <p>Event Time</p>
                </div>
            </div>
            <div class="flex flex-row">
                <div>
                    <input type="number">
                    <h1>Rp 100000</h1>
                </div>
            </div>
            <div class="border border-gray-400"></div>
            <p>Order Summary</p>
            <div class="flex flex-row">
                <p>Subtotal</p>
                <p>Rp 100000</p>
            </div>
            <div class="flex flex-row">
                <p>Tax</p>
                <p>Rp 100000</p>
            </div>
            <div class="flex flex-row">
                <p>Total</p>
                <p>Rp 100000</p>
            </div>
            <button class="bg-blue-400 px-14 py-2 w-full">Buy Now</button>
        </div>
    </div>
</div>
@endsection
