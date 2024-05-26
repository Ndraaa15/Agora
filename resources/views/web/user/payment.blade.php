@extends('layout.app')
@section('content')

<div class="container mx-auto">
    <div class="flex flex-row justify-center p-12 ">
        @include('partial.user.menu')
        <div class="xl:w-8/12 ml-5">
            <div class="min-h-screen flex flex-col bg-white shadow-md rounded-lg mx-6 my-2 p-6 mb-6 gap-5">
                <h1 class="text-3xl text-left font-bold my-2 ">My Ticket</h1>
                @foreach ($payments as $payment )
                <div class="w-full shadow-lg">
                    <div class="bg-white shadow-md rounded-md p-6">
                        <div class="flex flex-row">
                            <img src="{{ asset($payment->order->ticketSection->event->images[0]) }}" class="w-24 h-24 rounded-md">
                            <div class="ml-8 flex flex-row justify-between w-full">
                                <div>
                                    <h1 class="text-3xl font-bold">{{ $payment->order->ticketSection->event->name }}</h1>
                                    <p>{{ $payment->order->ticketSection->event->date }}</p>
                                </div>
                                <div>
                                    <p>Rp{{ $payment->amount }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
