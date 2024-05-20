<div class="w-full bg-blue-400 py-5 px-40 flex flex-row justify-between items-center shadow-md">
    <a href="{{ route('home') }}" class="text-white font-bold text-2xl">AGORA</a>
    <div class="flex flex-row gap-6 text-white font-light items-center ">
        <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
        <a href="#" class="hover:text-blue-600">About</a>
        <a href="{{ route('events') }}" class="hover:text-blue-600">Events</a>
        <a href="{{ route('faq') }}" class="hover:text-blue-600">FaQ</a>
        @auth
        <a href="#" class="hover:text-blue-600">Profile</a>
        @endauth
        @guest
        <button class="bg-white px-8 py-2 shadow-md text-blue-400 rounded-md hover:bg-gray-100">Login</button>
        <button class="bg-white px-8 py-2 shadow-md text-blue-400 rounded-md hover:bg-gray-100">Register</button>
        @endguest
    </div>
</div>
