@extends('layout.auth')

@section('content')
<div class="flex flex-row justify-evenly">
    <div>
        <img src="{{ asset('assets/images/signin.png') }}" alt="Signin Image" class="object-cover">
    </div>
    <div class="">
        <h1 class="text-2xl mb-4">Login</h1>
        <form action="" method="POST">
            @csrf
            @method('POST')
            <input type="text" placeholder="Username" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4">
            <input type="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded-md mb-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded-md">Login</button>
        </form>
    </div>
</div>
@endsection

