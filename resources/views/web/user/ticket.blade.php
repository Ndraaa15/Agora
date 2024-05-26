@extends('layout.app')
@section('content')

<div class="container mx-auto">
    <div class="flex flex-row justify-center p-12 ">
        <div class="w-1/4 xl:w-2/12">
            <div class="bg-white shadow-md rounded-lg p-6 ">
            <button class= "w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
                        <img src="{{ asset('assets/icons/Avatar.png') }}" alt="Profile" class="w-8 h-8">
                        <p class="text-2xl">Profile</p>
                    </button>
                    <br>
                    <button class= "w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
                        <img src="{{ asset('assets/icons/ticket.png') }}" alt="Ticket" class="w-8 h-8">
                        <p class="text-2xl">Ticket</p>
                    </button>
                    <br>
                    <button class= "w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
                        <img src="{{ asset('assets/icons/wishlist.png') }}" alt="Wishlist" class="w-8 h-8">
                        <p class="text-2xl">Wishlist</p>
                    </button>                    
                    <br>
                    <button class= "w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
                        <img src="{{ asset('assets/icons/setting.png') }}" alt="Setting" class="w-8 h-8">
                        <p class="text-2xl">Setting</p>
                    </button>
                    <br>
                    <button class= "w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
                        <img src="{{ asset('assets/icons/logout.png') }}" alt="Logout" class="w-8 h-8">
                        <p class="text-2xl">Logout</p>
                    </button>
            </div>
        </div>

        <div class="xl:w-8/12 ml-5">
            <div class="min-h-screen flex-col bg-white shadow-md rounded-lg mx-6 my-2 p-6 mb-6 ">
                <h1 class="text-3xl text-left font-bold my-2 ">My Ticket</h1>
                <button class= "w-full">
                    <div class="bg-white shadow-md rounded-lg p-6">

                        <div class = "flex flex-row">
                            <img src = "{{ asset('assets/images/ticket1.png') }}" class = "w-24 h-24 rounded-md">
                            <div class = "ml-8">
                                <h1 class="text-3xl font-bold">Lorem Ipsum</h1>
                                <p>Sunday, 17 August 2024</p>
                            </div>
                        </div>

                    </div>
                </button>
                <button class= "w-full">
                    <div class="bg-white shadow-md rounded-lg mt-4 p-6">

                        <div class = "flex gap-8">
                            <img src = "{{ asset('assets/images/ticket1.png') }}" class = "w-24 h-24 rounded-md">
                            <div>
                                <h1 class="text-3xl font-bold ">Lorem Ipsum</h1>
                                <p>Sunday, 17 August 2024</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>


@endsection