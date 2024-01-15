<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Heris Fotocopy</title>

        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="w-full shadow">
            <nav class="w-full max-w-5xl mx-auto py-8 flex flex-wrap">
                <h1 class="font-bold w-1/4 text-xl">Heris Fotocopy</h1>
                <div class="max-w-full w-3/4 text-right">
                    <a href="#" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all hover:text-white hover:bg-slate-800">Beranda</a>
                    <a href="#" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all hover:text-white hover:bg-slate-800">Cek Pesanan</a>
                    <a href="#" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all text-white bg-slate-800 hover:text-white hover:bg-slate-800">Order Online</a>
                </div>
            </nav>
        </header>
        <section id="main" class="w-full py-24">
            <div class="w-full max-w-5xl mx-auto grid grid-cols-2 gap-4">
                <div class="py-2">
                    <label class="font-bold">Nama Lengkap</label>
                    <div class="mt-2">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                    </div>
                </div>
                <div class="py-2">
                    <label class="font-bold">Nomor WhatsApp</label>
                    <div class="mt-2">
                        <input type="text" name="no_telepon" id="no_telepon" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                    </div>
                </div>
                <div class="py-2">
                    <label class="font-bold">Nama Lengkap</label>
                    <div class="mt-2">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                    </div>
                </div>
                <div class="py-2">
                    <label class="font-bold">Nomor WhatsApp</label>
                    <div class="mt-2">
                        <input type="text" name="no_telepon" id="no_telepon" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                    </div>
                </div>
            </div>
        </section>
        <section id="information" class="bg-slate-600 py-24">
            <div class="mx-auto max-w-5xl gap-8 grid grid-cols-1 md:grid-cols-3">
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