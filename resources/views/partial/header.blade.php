<div class="w-full bg-blue-400 py-5 px-6 md:px-40 flex flex-wrap md:flex-nowrap justify-between items-center shadow-md">
    <a href="{{ route('home') }}" class="text-white font-bold text-2xl">AGORA</a>
    <button id="menu-button" class="block md:hidden text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    <div id="menu" class="hidden md:flex flex-col md:flex-row gap-6 text-white font-light items-center w-full md:w-auto mt-4 md:mt-0 transition-all duration-300 ease-in-out">
        <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
        <a href="{{ route('about-us') }}"" class="hover:text-blue-600">About</a>
        <a href="{{ route('events') }}" class="hover:text-blue-600">Events</a>
        <a href="{{ route('faq') }}" class="hover:text-blue-600">FaQ</a>
        @auth
        <a href="{{ route('user-profile') }}" class="hover:text-blue-600">Profile</a>
        @endauth
        @guest
        <a href="{{ route('signin') }}" class="bg-white px-8 py-2 shadow-md w-full text-blue-400 rounded-md hover:bg-gray-100">
            Login
        </a>
        <a href="{{ route('signup') }}" class="bg-white px-8 py-2 shadow-md w-full text-blue-400 rounded-md hover:bg-gray-100">
            Register
        </a>
        @endguest
    </div>
</div>

<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            menu.classList.add('flex', 'flex-col', 'items-center', 'justify-center');
        } else {
            menu.classList.add('hidden');
            menu.classList.remove('flex', 'flex-col', 'items-center', 'justify-center');
        }
    });
</script>
