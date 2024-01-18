<x-guest-layout>
    <section id="main" class="w-full py-24 min-h-[80vh]">
        
        <form method="POST" class="w-full max-w-5xl mx-auto grid grid-cols-2 gap-4" enctype="multipart/form-data">
            
        @if($errors->any())
        {!! implode('', $errors->all('<div class="bg-red-500 text-white py-4 px-8 block rounded-lg shadow mb-2 col-span-2">:message</div>')) !!}
        @endif
            @csrf
            <div class="pt-1">
                <label class="font-bold">Nama Lengkap</label>
                <div class="mt-2">
                    <input type="text" :value="{{ old('name') }}" required name="name" id="name" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                </div>
            </div>
            <div class="pt-1">
                <label class="font-bold">Nomor WhatsApp</label>
                <div class="mt-2">
                    <input type="text" :value="{{ old('phone_number') }}" required name="phone_number" id="phone_number" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                </div>
            </div>
            <div class="pt-1">
                <label class="font-bold">Email</label>
                <div class="mt-2">
                    <input type="text" :value="{{ old('email') }}" required name="email" id="email" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                </div>
            </div>
            <div class="pt-1">
                <label class="font-bold">File <span class="text-red-500 text-sm font-normal">* pastikan bentuk file merupakan .pdf</span></label>
                <div class="mt-2">
                    <input type="file" :value="{{ old('file') }}" required name="file" id="file" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                </div>
            </div>
            <div class="pt-1 col-span-2">
                <label class="font-bold">Jenis Print</label>
                <div class="mt-2">
                    <select :value="{{ old('jenis') }}" required name="jenis" id="jenis" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                        <option value="" selected disabled>-- Pilih Jenis --</option>
@foreach($prints as $print)                        
                        <option value="{{ $print->id }}">{{ $print->name }} - Rp {{ number_format($print->price) }} / Lembar</option>
@endforeach
                    </select>
                </div>
            </div>
            <div class="repeater col-span-2">
                <div data-repeater-list="options">
                        <label class="font-bold">Opsi Tambahan</label>
                        <div class="pt-1" data-repeater-item>
                        <div class="mt-2 flex flex-wrap">
                            <select :value="{{ old('other') }}" name="other" class="w-5/6 px-4 py-2 text-sm border border-gray-300 rounded outline-none">
                                <option value="" selected disabled>-- Pilih Opsi --</option>
@foreach($others as $other)                        
                                <option value="{{ $other->id }}">{{ $other->name }} - Rp {{ number_format($other->price) }} </option>
@endforeach                    
                            </select>
                            <x-danger-button type="button" class="mx-auto" data-repeater-delete>Hapus</x-danger-button>
                        </div>
                    </div>
                </div>
                <div class="pt-1">
                    <x-primary-button type="button" class="mt-2" data-repeater-create>Tambah Opsi</x-primary-button>
                </div>
            </div>
            <div class="pt-1">
                <label class="font-bold">Catatan Pembeli</label>
                <textarea required name="description"cols="30" rows="10" class="w-full px-4 py-2 text-sm border border-gray-300 rounded outline-none mt-2">{{ old('description') }}</textarea>
            </div>
            <div class="pt-1 text-right">
                <label class="font-bold">Biaya</label>
                <table class="ml-auto">
                    <tr>
                        <td>Jumlah Halaman: </td>
                        <th><span id="halaman">0</span> Halaman</th>
                    </tr>
                    <tr>
                        <td>Biaya Cetak: </td>
                        <th>Rp <span id="biayaCetak">0</span></th>
                    </tr>
                    <tr>
                        <td>Biaya Opsi: </td>
                        <th>Rp <span id="biayaOpsi">0</span></th>
                    </tr>
                    <tr>
                        <td>Total: </td>
                        <th>Rp <span id="biayaTotal">0</span></th>
                    </tr>
                    <tr>
                        <td>Estimasi Waktu: </td>
                        <th><span id="estimasiWaktu">0</span> Menit </th>
                    </tr>
                </table>
                <a href="#" id="hitung" class="inline-block mt-4 px-4 py-2 bg-blue-800 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">Hitung</a>
            </div>
            <div class="pt-1 col-span-2">
                <input type="hidden" name="num_of_page" id="numOfPage">
                <x-primary-button class="mt-4 w-full text-center">Pesan</x-primary-button>
            </div>
        </form>
    </section>
    <x-slot name="js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" integrity="sha512-foIijUdV0fR0Zew7vmw98E6mOWd9gkGWQBWaoA1EOFAx+pY+N8FmmtIYAVj64R98KeD2wzZh1aHK0JSpKmRH8w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function(){
                $('.repeater').repeater({
                    show: function () {
                        $(this).slideDown();
                    },
                    hide: function (deleteElement) {
                        if (confirm('Are you sure you want to delete this element?')) {
                            $(this).slideUp(deleteElement);
                        }
                    }
                });
                $('#file').change(function(){
                    var input = document.getElementById("file");
                    var reader = new FileReader();
                    reader.readAsBinaryString(input.files[0]);
                    reader.onload = function(){
                        var count = reader.result.match(/\/Type[\s]*\/Page[^s]/g).length;
                        $('#halaman').html(count);
                        $('#numOfPage').val(count);
                    }
                })
                $("#hitung").click(function(){
                    var numOfPage = 0;
                    
                    numOfPage = $('#halaman').html();
                    var print = $("#jenis").val();
                    var repeater = $('.repeater').repeaterVal().options;
                    $.ajax({
                        type: "POST",
                        url: "{{ route('quick_count') }}",
                        dataType: "JSON",
                        data: {
                            cetak:print,
                            opsi:repeater,
                            jum_hal: numOfPage,
                        },
                        enctype: 'multipart/form-data',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            $('#biayaCetak').html(numberFormat(response.biayaCetak));
                            $('#biayaOpsi').html(numberFormat(response.biayaOpsi));
                            $('#biayaTotal').html(numberFormat(response.biayaTotal));
                            $('#estimasiWaktu').html(numberFormat(response.estimasiWaktu));
                            
                        }
                    });
                });
            });
            const numberFormat = (number, decimals, dec_point, thousands_sep) => {
                number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = typeof thousands_sep === 'undefined' ? ',' : thousands_sep,
                    dec = typeof dec_point === 'undefined' ? '.' : dec_point,
                    s = '',
                    toFixedFix = function (n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            };
        </script>
    </x-slot>
</x-guest-layout>
