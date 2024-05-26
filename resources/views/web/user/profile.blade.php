@extends('layout.app')
@section('content')

<div class="container mx-auto">
    <div class="flex flex-row justify-center p-12 ">
        @include('partial.user.menu')
        <div class="w-full xl:w-8/12 ml-5">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="relative gap-4">
                    <div>
                        <img src="{{ asset('assets/images/profilebg.jpg') }}" alt="coverImage" class="w-full h-72 rounded-md">
                        <div class="text-right">
                            <button class="text-blue-400 underline">edit</button>
                        </div>
                    </div>
                    <div class="absolute bottom-[-70px] left-[10%] transform -translate-x-1/2 border-4 border-white rounded-md">
                        <img src="{{ asset('assets/images/pp.png') }}" alt="profilepicture" class="w-32 h-32 rounded-md">
                    </div>

                </div>
                <div class=" text-left ml-48 mt-2 mb-8">
                    <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
                </div>
                <div class="mt-16">
                    <ul class="list-reset leading-loose">
                        <li class="border-b py-4">
                            <span class="text-lg text-gray-600">Username:</span>
                            <span class="text-lg float-right text-gray-700">{{ $user->name }}</span>
                        </li>
                        <li class="border-b py-4">
                            <span class="text-lg text-gray-600">Email:</span>
                            <span class="text-lg float-right text-gray-700">{{ $user->email }}</span>
                        </li>
                        <li class="border-b py-4">
                            <span class="text-lg text-gray-600">Phone number:</span>
                            <span class="text-lg float-right text-gray-700">{{ $user->phone }}</span>
                        </li>
                        <li class="border-b py-4">
                            <span class="text-lg text-gray-600">Password:</span>
                            <span class="text-lg float-right text-gray-700 ">********</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
