@extends('layout.app')
@section('content')

<div class="container mx-auto">
    <div class="flex flex-row justify-center p-12 ">
        <div class="w-1/4 xl:w-2/12">
            <div class="bg-white shadow-md rounded-lg p-6">
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
            <div class="flex-col min-h-screen bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-3xl text-left font-bold mx-6 my-2">Wishlist</h1>
                <div class = "flex flex-row p-6">
                    
                    <button class ="w-1/3 h-full">
                        <div class=" bg-white shadow-md rounded-lg mr-6">
                            <div class = "flex mb-4">
                                <img src = "{{ asset('assets/images/profilebg.jpg') }}" class = "flex rounded-md">
                            </div>
                            <div class = "text-left pl-6 pb-4">
                                <h2 class="text-xl font-bold ">Lorem Ipsum</h2>
                                <p>Sunday, 17 August 2024</p>
                            </div>
                        </div>
                    </button>

                    <button class ="w-1/3 h-full">
                        <div class=" bg-white shadow-md rounded-lg mr-6">
                            <div class = "flex mb-4">
                                <img src = "{{ asset('assets/images/profilebg.jpg') }}" class = "flex rounded-md">
                            </div>
                            <div class = "text-left pl-6 pb-4">
                                <h2 class="text-xl font-bold ">Lorem Ipsum</h2>
                                <p>Sunday, 17 August 2024</p>
                            </div>
                        </div>
                    </button>

                    <button class ="w-1/3 h-full">
                        <div class=" bg-white shadow-md rounded-lg mr-6">
                            <div class = "flex mb-4">
                                <img src = "{{ asset('assets/images/profilebg.jpg') }}" class = "flex rounded-md">
                            </div>
                            <div class = "text-left pl-6 pb-4">
                                <h2 class="text-xl font-bold ">Lorem Ipsum</h2>
                                <p>Sunday, 17 August 2024</p>
                            </div>
                        </div>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection