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
                    </div>
                    <div class="absolute bottom-[-70px] left-[10%] transform -translate-x-1/2 border-4 border-white rounded-md">
                        <img src="{{ $user->profile_picture }}" alt="profilepicture" class="w-32 h-32 rounded-md">
                    </div>

                </div>
                <div class=" text-left ml-48 mt-2 mb-8">
                    <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
                </div>
                <form method="POST" action="{{ route('user-update-profile') }}">
                    @csrf
                    <div class="mt-16">
                        <ul class="list-reset leading-loose">
                            <li class="border-b py-4">
                                <label for="name" class="text-lg text-gray-600">Username:</label>
                                <input type="text" id="name" name="name" value="{{ $user->name }}" class="text-lg float-right text-gray-700">
                            </li>
                            <li class="border-b py-4">
                                <label for="email" class="text-lg text-gray-600">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $user->email }}" class="text-lg float-right text-gray-700">
                            </li>
                            <li class="border-b py-4">
                                <label for="phone" class="text-lg text-gray-600">Phone number:</label>
                                <input type="tel" id="phone" name="phone" value="{{ $user->phone }}" class="text-lg float-right text-gray-700">
                            </li>
                            <li class="border-b py-4">
                                <label for="password" class="text-lg text-gray-600">Password:</label>
                                <input type="password" id="password" name="password" placeholder="Enter new password" class="text-lg float-right text-gray-700">
                            </li>
                        </ul>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
