@extends('layout.auth')
@section('content')
<div class="flex flex-col md:flex-row w-full h-screen">
    <div class="w-full md:w-1/2 h-1/2 md:h-full">
        <img src="{{ asset('assets/images/signin.jpg') }}" alt="Signin Image" class="w-full h-full object-cover">
    </div>
    <div class="w-full md:w-1/2 flex items-center justify-center p-4 md:p-8">
    <div >
            <h1 class="text-5xl font-bold mb-10">Login</h1>
            <form action="" method="POST">
                @csrf
                @method('POST')
                <div class="flex flex-col gap-2">
                    <input type="text" placeholder="Email" name="email" class="w-96 px-4 py-2 border  rounded-md mb-4 shadow-md outline-none">
                    <input type="password" placeholder="Password" name="password" class="w-96 px-4 py-2 border  rounded-md mb-4 shadow-md outline-none">
                    <a href="#" class="text-gray-400 text-sm text-end -mt-5 hover:text-gray-500">Forget Password?</a>
                    <div class="flex flex-row justify-between mb-5 mt-4">
                        <button class="px-8 py-2 flex flex-row gap-5 rounded-md align-middle shadow-md hover:bg-gray-50">
                            <img src="{{ asset('assets/icons/google.png') }}" alt="Google" class="w-5 h-5">
                            <p class="text-sm">Google</p>
                        </button>
                        <button class="px-8 py-2 flex flex-row gap-5 rounded-md shadow-md hover:bg-gray-50">
                            <img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                            <p class="text-sm">Facebook</p>
                        </button>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-400 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-500">Login</button>
            </form>
            <p class="text-sm text-gray-400 text-center mt-5">Dont have any account yet? <a href="#" class="hover:text-gray-500">Sign up</a></p>
        </div>
    </div>
</div>
@endsection