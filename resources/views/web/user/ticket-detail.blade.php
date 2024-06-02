@extends('layout.app')
@section('content')
@foreach ($tickets as $ticket )
<div class="px-52 py-28">
    <div class="bg-blue-400 py-10 px-10">
        <h1 class="text-white text-2xl font-bold">E-Ticket</h1>
    </div>
    <div class="flex flex-row py-10 px-52 border border-blue-400 justify-between items-center">
        <div class="flex flex-col gap-5">
            <div>
                <label class="text-black font-semibold text-xl">Event : </label>
                <p class="text-lg text-gray-500">{{ $order->ticketSection->event->name }}</p>
            </div>
            <div>
                <label class="text-black font-semibold text-xl">Date and Time : </label>
                <p>{{$order->ticketSection->event->date}}, {{$order->ticketSection->event->time}} </p>
            </div>
            <div>
                <label class="text-black font-semibold text-xl">Price : </label>
                <p>{{$order->ticketSection->price}}</p>
            </div>
            <div>
                <label class="text-black font-semibold text-xl">Location : </label>
                <p>{{$order->ticketSection->event->city}}, {{$order->ticketSection->event->province}}</p>
            </div>
            <div>
                <label class="text-black font-semibold text-xl">Order Code : </label>
                <p>{{$ticket->code}}</p>
            </div>
        </div>
        <div>
            <img src="{{ $ticket->qr_code}}" alt="qr_code" class="w-64">
        </div>
    </div>
</div>
@endforeach
@endsection
