<<<<<<< HEAD
<div class="w-full bg-blue-400 2xl:py-5 2xl:px-34 xl:px-18 xl:pr-10 lg:py-5 lg:px-12 md:py-5 md:px-10 sm:px-6 sm:py-5 flex flex-row justify-between items-center shadow-md">
    <a href="{{ route('home') }}" class="text-white font-bold  2xl:text-3xl sm:text-lg md:text-lg lg:text-xl xl:text-2xl">AGORA</a>
    <div class="flex flex-row 2xl:gap-6 xl:gap-6 lg:gap-6 md:gap-6 sm:gap-5 text-white font-light items-center ">
        <a href="{{ route('home') }}" class="hover:text-blue-600  2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Home</a>
        <a href="{{ route('about') }}" class="hover:text-blue-600  2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">About</a>
        <a href="{{ route('events') }}" class="hover:text-blue-600  2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Events</a>
        <a href="{{ route('faq') }}" class="hover:text-blue-600  2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">FaQ</a>
=======
<div class="w-full bg-blue-400 py-5 px-40 flex flex-row justify-between items-center shadow-md">
    <a href="{{ route('home') }}" class="text-white font-bold text-2xl">AGORA</a>
    <div class="flex flex-row gap-6 text-white font-light items-center ">
        <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
        <a href="#" class="hover:text-blue-600">About</a>
        <a href="{{ route('events') }}" class="hover:text-blue-600">Events</a>
        <a href="{{ route('faq') }}" class="hover:text-blue-600">FaQ</a>
>>>>>>> 457936bb01ef1a5ffc0974eac93857a08ce490b3
        @auth
        <a href="#" class="hover:text-blue-600  2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Profile</a>
        @endauth
        @guest
<<<<<<< HEAD
        <button class="flex items-center justify-center bg-white 2xl:w-[150px] 2xl:h-[50px] xl:w-[120px] xl:h-[40px] lg:w-[90px] lg:h-[30px] md:w-[60px] md:h-[20px] sm:w-[60px] sm:h-[20px] 2xl:px-8 2xl:py-2 xl:px-8 xl:py-2 lg:px-8 lg:py-2 md:px-8 md:py-2 sm:px-3 sm:py-1 shadow-md text-blue-400 rounded-md hover:bg-gray-100 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Login</button>
        <button class="flex items-center justify-center bg-white 2xl:w-[150px] 2xl:h-[50px] xl:w-[120px] xl:h-[40px] lg:w-[90px] lg:h-[30px] md:w-[60px] md:h-[20px] sm:w-[60px] sm:h-[20px] 2xl:px-8 2xl:py-2 xl:px-8 xl:py-2 lg:px-8 lg:py-2 md:px-8 md:py-2 sm:px-3 sm:py-1 shadow-md text-blue-400 rounded-md hover:bg-gray-100 2xl:text-xl sm:text-xs md:text-sm lg:text-md xl:text-lg">Register</button>
=======
        <button class="bg-white px-8 py-2 shadow-md text-blue-400 rounded-md hover:bg-gray-100">Login</button>
        <button class="bg-white px-8 py-2 shadow-md text-blue-400 rounded-md hover:bg-gray-100">Register</button>
>>>>>>> 457936bb01ef1a5ffc0974eac93857a08ce490b3
        @endguest
    </div>
</div>