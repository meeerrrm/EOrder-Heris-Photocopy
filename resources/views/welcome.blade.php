<x-guest-layout>
        <header class="w-full">
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
                <a href="{{ route('orders') }}" class="py-2 px-4 block font-semibold rounded-lg mt-4 text-center transition-all text-white bg-slate-800 hover:text-white hover:bg-slate-600">Pesan Sekarang</a>
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
</x-guest-layout>
