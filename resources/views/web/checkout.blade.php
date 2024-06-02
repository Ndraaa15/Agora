@extends('layout.app')
@section('content')
<div class="px-64 py-16 mb-8 min-h-full">
    <form action="{{ route('checkout-order') }}" method="POST">
        @CSRF
        @method('POST')
        <div class="flex flex-row justify-evenly">
            <div class="p-10 w-1/2 shadow-lg bg-white rounded-lg">
                <h1 class="text-3xl font-bold">Checkout</h1>
                <div class="border border-gray-400 mt-5 mb-5"></div>
                <h2 class="text-lg font-medium text-gray-500 mb-8">Contact Information</h2>
                <div class="flex flex-col gap-2 mb-3">
                    <label for="name" class="font-light text-gray-500">Name</label>
                    <input type="text" name="name" id="name" class="w-full border border-gray-400 rounded-lg py-1 px-5 shadow-lg" required>
                </div>
                <div class="flex flex-col gap-2 mb-3">
                    <label for="email" class="font-light text-gray-500">Email</label>
                    <input type="text" name="email" id="email" class="w-full border border-gray-400 rounded-lg py-1 px-5 shadow-lg" required>
                </div>
                <div class="flex flex-col gap-2 mb-3">
                    <label for="phone" class="font-light text-gray-500">Phone</label>
                    <input type="text" name="phone" id="phone" class="w-full border border-gray-400 rounded-lg py-1 px-5 shadow-lg" required>
                </div>
            </div>
            <div class="w-1/4 p-5 shadow-lg rounded-lg">
                <h1 class="text-2xl font-bold">Order</h1>
                <div class="border border-gray-400 mt-4 mb-4"></div>
                <div class="flex flex-row gap-5">
                    <img src="{{ asset('storage/' . $event->images[0])}}" alt="" class="w-28 h-28 rounded-lg">
                    <div>
                        <h1 class="text-lg font-bold"> {{ $event->name }}</h1>
                        <p class="text-sm font-semibold">{{ $ticketSection->name }}</p>
                        <p class="text-sm font-light">{{ $event->date }}</p>
                    </div>
                </div>
                <div class="flex flex-row justify-between items-center mt-5" data-ticket-price="{{ $ticketSection->price }}">
                    <div class="flex flex-row items-center gap-3">
                        <div class="p-3 shadow-lg cursor-pointer" id="minus-btn">
                            <img src="{{asset('assets/icons/minus.png')}}" alt="Minus">
                        </div>
                        <input type="hidden" name="ticket_section_id" value="{{ $ticketSection->id }}">
                        <input type="number" name="quantity" id="quantity-input" value="1" min="1" class="w-8 text-center rounded border-none">
                        <div class="p-3 shadow-lg cursor-pointer" id="plus-btn">
                            <img src="{{asset('assets/icons/plus.png')}}" alt="Plus">
                        </div>
                    </div>
                    <p class="text-xl font-bold text-blue-400" id="price">Rp{{ $ticketSection->price }}</p>
                </div>
                <div class="border border-gray-400 mt-7 mb-5"></div>
                <div class="mb-7">
                    <p class="text-lg font-bold mb-3">Order Summary</p>
                    <div class="flex flex-row justify-between">
                        <p class="font-medium text-gray-500">Subtotal</p>
                        <p class="font-medium text-gray-500" id="subtotal">Rp{{ $ticketSection->price }}</p>
                    </div>
                    <div class="flex flex-row justify-between">
                        <p class="font-medium text-gray-500">Tax</p>
                        <p class="font-medium text-gray-500" id="tax">Rp{{ 4000 }}</p>
                    </div>
                    <div class="flex flex-row justify-between mt-4">
                        <p class="text-lg font-bold">Total</p>
                        <p class="text-lg font-bold text-blue-400" id="total">Rp{{ $ticketSection->price }} </p>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const minusBtn = document.getElementById("minus-btn");
                        const plusBtn = document.getElementById("plus-btn");
                        const quantityInput = document.getElementById("quantity-input");
                        const priceElement = document.getElementById("price");
                        const subtotalElement = document.getElementById("subtotal");
                        const taxElement = document.getElementById("tax");
                        const totalElement = document.getElementById("total");

                        const ticketContainer = document.querySelector(
                            ".flex.flex-row.justify-between.items-center.mt-5"
                        );
                        const ticketPrice = parseFloat(
                            ticketContainer.getAttribute("data-ticket-price")
                        );
                        const taxPerItem = 4000;

                        function updatePrices() {
                            const quantity = parseInt(quantityInput.value);
                            const subtotal = ticketPrice * quantity;
                            const tax = taxPerItem * quantity;
                            const total = subtotal + tax;

                            priceElement.textContent = `Rp${ticketPrice}`;
                            subtotalElement.textContent = `Rp${subtotal}`;
                            taxElement.textContent = `Rp${tax}`;
                            totalElement.textContent = `Rp${total}`;
                        }

                        minusBtn.addEventListener("click", function() {
                            let currentValue = parseInt(quantityInput.value);
                            if (currentValue > parseInt(quantityInput.min)) {
                                quantityInput.value = currentValue - 1;
                                updatePrices();
                            }
                        });

                        plusBtn.addEventListener("click", function() {
                            let currentValue = parseInt(quantityInput.value);
                            quantityInput.value = currentValue + 1;
                            updatePrices();
                        });

                        updatePrices();
                    });
                </script>
                <button class="bg-blue-400 px-14 py-2 w-full text-white font-bold rounded-lg">Buy Now</button>
            </div>
        </div>
    </form>
</div>
@endsection
