<div class="w-1/4 xl:w-2/12">
    <div class="bg-white shadow-md rounded-lg p-6">
        <button class="w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
            <img src="{{ asset('assets/icons/Avatar.png') }}" alt="Profile" class="w-8 h-8">
            <a class="text-2xl" href="{{ route('user-profile') }}">Profile</a>
        </button>
        <br>
        <button class="w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
            <img src="{{ asset('assets/icons/ticket.png') }}" alt="Ticket" class="w-8 h-8">
            <a class="text-2xl" href="{{ route('user-ticket') }}">Ticket</a>
        </button>
        <br>
        <button class="w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
            <img src="{{ asset('assets/icons/wishlist.png') }}" alt="Wishlist" class="w-8 h-8">
            <a class="text-2xl" href="{{ route('user-wishlist') }}">Wishlist</a>
        </button>
        <br>
        <button class="w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
            <img src="{{ asset('assets/icons/payment.png') }}" alt="Setting" class="w-8 h-8">
            <a class="text-2xl" href="{{ route('user-payment') }}">Payment</a>
        </button>
        <br>
        <form action="{{ route('signout') }}" id="logout" method="get"></form>
        <button form="logout" class="w-full flex flex-row gap-4 hover:bg-slate-100 text-2xl text-left font-bold p-4 rounded ">
            <img src="{{ asset('assets/icons/logout.png') }}" alt="Logout" class="w-8 h-8">
            <a class="text-2xl">Logout</a>
        </button>
    </div>
</div>
