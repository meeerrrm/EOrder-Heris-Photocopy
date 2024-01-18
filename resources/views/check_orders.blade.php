<x-guest-layout>            
    <section id="header" class="w-full bg-slate-700 py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 max-w-5xl mx-auto">
            <div class="">
                <h2 class="font-semibold text-2xl text-white">Cek pesanan Kamu dengan nomor invoice!</h2>
                <p class="text-white mt-4">Cek pesanan Kamu sudah siap diambil atau belum? Harap tunggu 5-25 menit. Pastikan cek pesanan Kamu secara berkala.</p>
            </div>
        </div>
    </section>
    <section id="main" class="w-full py-24">
        <div class="w-full max-w-5xl mx-auto">
            <label class="font-bold">Nomor Invoice Anda</label>
            <form method="POST" class="mt-2">
                @csrf
                
                <input type="text" required name="invoice_code" id="invoice_code" class="px-4 py-2 text-sm border border-gray-300 rounded outline-none" placeholder="Masukan Nomor Invoice">
                <button class="py-2 px-4 rounded-lg mx-2 transition-all text-white bg-slate-800 hover:bg-slate-600 text-sm">Cari Transaksi</button>
            </form>
        </div>
    </section>
</x-guest-layout>
