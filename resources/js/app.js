import './bootstrap';

// Checkout page
document.addEventListener('DOMContentLoaded', function() {
    const minusBtn = document.getElementById('minus-btn');
    const plusBtn = document.getElementById('plus-btn');
    const quantityInput = document.getElementById('quantity-input');
    const priceElement = document.getElementById('price');
    const subtotalElement = document.getElementById('subtotal');
    const taxElement = document.getElementById('tax');
    const totalElement = document.getElementById('total');

    const ticketContainer = document.querySelector('.flex.flex-row.justify-between.items-center.mt-5');
    const ticketPrice = parseFloat(ticketContainer.getAttribute('data-ticket-price'));
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

    minusBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > parseInt(quantityInput.min)) {
            quantityInput.value = currentValue - 1;
            updatePrices();
        }
    });

    plusBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        updatePrices();
    });

    updatePrices();
});



