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
        <header class="w-full">
            <nav class="w-full max-w-5xl mx-auto py-8 flex flex-wrap">
                <h1 class="font-bold w-1/4 text-xl">Heris Fotocopy</h1>
                <div class="max-w-full w-3/4 text-right">
                    <a href="#" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all text-white bg-slate-800 hover:text-white hover:bg-slate-800">Beranda</a>
                    <a href="#" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all hover:text-white hover:bg-slate-800">Cek Pesanan</a>
                    <a href="#" class="py-2 px-4 font-semibold rounded-lg mx-2 transition-all hover:text-white hover:bg-slate-800">Order Online</a>
                </div>
            </nav>
            <section id="header" class="w-full bg-slate-700 py-24">
                <div class="grid grid-cols-1 md:grid-cols-3 max-w-5xl mx-auto">
                    <div class="">
                        <img src="{{ url('assets/images/wait.png') }}" class=" h-72" alt="Heris Fotocopy">
                    </div>
                    <div class="col-span-2 place-self-center">
                        <h2 class="font-semibold text-2xl text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed error earum magnam nisi alias minus. Dolores nesciunt sunt, cum asperiores, fuga sapiente eligendi recusandae beatae placeat repudiandae aspernatur quis inventore ducimus adipisci? Exercitationem porro, reprehenderit commodi voluptate non iusto nihil, quod sint, atque officiis voluptatem iste numquam nulla dolor provident.</h2>
                    </div>
                </div>
            </section>
        </header>
        <section id="alur-pemesanan" class="w-full py-24 bg-slate-200">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-2xl font-bold text-center">Alur Pemesanan Fotocopy Heris</h2>
                <div class="mt-4 p-2 bg-white rounded-lg">
                    <img src="{{ url('assets/images/how-to-order.png') }}" alt="Cara Order - Heris Fotocopy">
                </div>
                <a href="#" class="py-2 px-4 block font-semibold rounded-lg mt-4 text-center transition-all text-white bg-slate-800 hover:text-white hover:bg-slate-600">Pesan Sekarang</a>
            </div>
        </section>
        <section id="pelayanan-kami" class="w-full py-24">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-2xl font-bold text-center">Pelayanan Kami</h2>
                <div class="mt-2 grid grid-cols-1 md:grid-cols-3">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-center">Jam Operasional</h3>
                        <table class="w-full mt-4 mx-auto">
                            <tr>
                                <td class="p-2">Senin</td>
                                <td class="font-bold text-center p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Selasa</td>
                                <td class="font-bold text-center p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Rabu</td>
                                <td class="font-bold text-center p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Kamis</td>
                                <td class="font-bold text-center p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Jumat</td>
                                <td class="font-bold text-center p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Sabtu</td>
                                <td class="font-bold text-center p-2">08:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td class="p-2">Minggu</td>
                                <td class="font-bold text-center p-2 text-red-600">Libur</td>
                            </tr>
                        </table>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-center">Estimasi Pengerjaan</h3>
                        <p class="mt-4">
                            Estimasi pengerjaan pemesanan pada <b>Heris Fotocopy</b> bergantung pada estimasi yang tertera pada saat pemesanan!
                        </p>
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