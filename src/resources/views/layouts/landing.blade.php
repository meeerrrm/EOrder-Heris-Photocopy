<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Heris Fotokopi') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="w-full shadow py-4">
            <div class="max-w-6xl mx-auto flex flex-wrap">
                <a href="{{ url('/') }}" class="md:w-1/3 font-bold text-2xl">Heris Fotokopi</a>
                <div class="flex flex-wrap ml-auto">
                    <a href="#" class="mx-2 px-4 font-bold transition-all hover:bg-slate-600 hover:text-white rounded-lg py-2">Beranda</a>
                    <a href="#" class="mx-2 px-4 font-bold transition-all hover:bg-slate-600 hover:text-white rounded-lg py-2">Cek Pesanan</a>
                    <a href="#" class="mx-2 px-4 font-bold transition-all hover:bg-slate-600 hover:text-white rounded-lg py-2">Order</a>
                </div>
            </div>
        </nav>
        <header class="w-full py-24 bg-slate-600">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 content-center">
                    <img src="{{ url('assets/wait.png')}}" alt="Heris Fotokopi" class="h-72 mx-auto">
                    <div class="grid grid-cols-1 content-center">
                        <h1 class="text-2xl font-bold text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus fugit dolore praesentium vel commodi architecto provident aperiam minima et. Quisquam autem amet itaque ut adipisci modi culpa optio rem?</h1>
                    </div>
                </div>
            </div>
        </header>
        <section id="how-to-order" class="bg-slate-200">
            <div class="max-w-6xl mx-auto py-24">
                <h2 class="text-center text-2xl font-bold">Alur Pemesanan Fotokopi Heris</h2>
                <div class="w-full py-12 mt-8 bg-white rounded-lg shadow-lg" id="alurasi-order">
                    <img src="{{ url('assets/how-to-order.png') }}" class="max-h-72 mx-auto" alt="Cara order di Fotokopi Heris">
                </div>
                <div class="text-center">
                    <a href="#" class="py-4 bg-slate-600 inline-block mt-4 px-12 text-white rounded-lg">Order Sekarang!</a>
                </div>
            </div>
        </section>
        <section id="pelayanan-kami">
            <div class="max-w-6xl mx-auto py-24">
                <h2 class="text-center text-2xl font-bold">Pelayanan Kami</h2>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="shadow-lg p-8 rounded-lg border-2 text-center">
                        <h3 class="text-xl font-bold">Jam Operasional</h3>
                        <table class="w-full mt-4">
                            <tr>
                                <td class="p-2">Senin</td>
                                <td class="font-bold p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Selasa</td>
                                <td class="font-bold p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Rabu</td>
                                <td class="font-bold p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Kamis</td>
                                <td class="font-bold p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Jumat</td>
                                <td class="font-bold p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Sabtu</td>
                                <td class="font-bold p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Minggu</td>
                                <td class="font-bold p-2 text-red-600">Libur</td>
                            </tr>
                        </table>
                    </div>
                    <div class="shadow-lg p-8 rounded-lg border-2 text-center">
                        <h3 class="text-xl font-bold">Estimasi Pengerjaan</h3>
                        <p class="mt-4">Estimasi Pengerjaan dapat sesuai dengan tingkat kesulitas customer. Anda dapat melihat dengan detail perkiraan selesai pengerjaan pada laman order!</p>
                    </div>
                    <div class="shadow-lg p-8 rounded-lg border-2 text-center">
                        <h3 class="text-xl font-bold">Estimasi Pengerjaan</h3>
                        <p class="mt-4">Estimasi Pengerjaan dapat sesuai dengan tingkat kesulitas customer. Anda dapat melihat dengan detail perkiraan selesai pengerjaan pada laman order!</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="information" class="bg-slate-600 py-24">
            <div class="mx-auto max-w-6xl gap-8 grid grid-cols-1 md:grid-cols-3">
                <div class="col-span-2">
                    <h1 class="text-white text-xl font-bold">Lokasi Kami</h1>
                    <iframe class="w-full h-64 rounded-lg mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2356714378157!2d106.83351317488119!3d-6.363538093626529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed920b3c2adb%3A0xa69639c64b840c16!2sKedai%20Gypsy!5e0!3m2!1sen!2sid!4v1701913289192!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <h1 class="text-white text-xl font-bold">Informasi Kontak</h1>
                    <div class="mt-4">
                        <h2 class="text-white">Whatsapp</h2>
                        <a href="#" class="text-white block text-xl font-bold">+62 858 4759 2933</a>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-white">Instagram</h2>
                        <a href="#" class="text-white block text-xl font-bold">@haris.fotokopi</a>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-white">Tokopedia</h2>
                        <a href="#" class="text-white block text-xl font-bold">haris.fotokopi.online</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="w-full border-t-2 border-slate-500 py-4 bg-slate-600">
            <p class="text-center text-white">©Heris Fotocopy - {{ date('Y') }}</p>
        </footer>
    </body>
</html>
