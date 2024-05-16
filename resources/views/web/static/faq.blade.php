@extends('layout.app')

@section('title', 'FAQ Section')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen py-20">
    <div class="w-full max-w-2xl p-5 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Frequently Asked Questions</h2>
        <p class="text-gray-500 mb-6 justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod, odio eget tincidunt molestie.</p>
        <div class="space-y-4 text-justify">
            <div class="border border-gray-200 rounded-md">
                <button class="w-full flex justify-between items-center p-4 text-left text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span class="flex-grow border-l-4 border-blue-500 pl-3 font-medium">Apa itu Agora?</span>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-4 pb-4 hidden">
                    <p class="text-gray-500">Agora merupakan website ticketing event sosial dan budaya. Anda dapat memesan tiket untuk event-event budaya terdekat yang ada di seluruh Indonesia.</p>
                </div>
            </div>
            <div class="border border-gray-200 rounded-md">
                <button class="w-full flex justify-between items-center p-4 text-left text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span class="flex-grow border-l-4 border-blue-500 pl-3 font-medium">Bagaimana cara membeli tiket?</span>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-4 pb-4 hidden">
                    <p class="text-gray-500">Hai kak Selamat pagi/siang/sore/malam, Untuk pembelian Tiket event bisa langsung ke website Agora lalu pilih event dan kategori tiket yang dikehedaki, atau bisa juga cari eventnya di fitur "kolom pencarian tiket".</p>
                </div>
            </div>
            <div class="border border-gray-200 rounded-md">
                <button class="w-full flex justify-between items-center p-4 text-left text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span class="flex-grow border-l-4 border-blue-500 pl-3 font-medium">Bagaimana pembayaran tiket?</span>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-4 pb-4 hidden">
                    <p class="text-gray-500">Hai kak Selamat pagi/siang/sore/malam, alat bayar yang bisa digunakan untuk membeli tiket bisa menggunakan Bank Transfer (BCA/Mandiri/BNI/BRI), Bank Virtual Account (Bank VA), Kartu Kredit & Debit, Link Aja, Ovo, Qris (Gopay, Dana, dll).</p>
                </div>
            </div>
            <div class="border border-gray-200 rounded-md">
                <button class="w-full flex justify-between items-center p-4 text-left text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span class="flex-grow border-l-4 border-blue-500 pl-3 font-medium">Bisakah melakukan pembayaran dengan kartu kredit?</span>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-4 pb-4 hidden">
                    <p class="text-gray-500">Pemesanan online menggunakan pembayaran kartu kredit akan segera diproses dan biasanya akan diselesaikan dalam akun Anda dalam waktu 1-2 hari. Pesanan telepon dan pesanan khusus akan diselesaikan saat pembayaran diminta dari petugas penjualan Anda. Dalam situasi tertentu, kami mungkin meminta pembayaran di muka sebelum proses apa pun dapat dimulai, namun, dengan banyak produk kami, kami senang untuk memulai pemeriksaan dan mendiskusikan opsi terlebih dahulu.</p>
                </div>
            </div>
            <div class="border border-gray-200 rounded-md">
                <button class="w-full flex justify-between items-center p-4 text-left text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <span class="flex-grow border-l-4 border-blue-500 pl-3 font-medium">Apakah bisa menyimpan tiket sebagai wishlist?</span>
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-4 pb-4 hidden">
                    <p class="text-gray-500">Tentu saja! Anda cukup mengklik ikon pita pada detail informasi tiket untuk menyimpannya sebagai wishlist.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
        });
    });
</script>
@endsection
