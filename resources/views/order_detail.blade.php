<x-guest-layout>            
    <section id="header" class="w-full bg-slate-700 py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 max-w-5xl mx-auto">
            <div class="">
                <h2 class=" text-2xl text-white">Detail Pesanan <b>{{ $order->uniq }}</b>!</h2>
            </div>
        </div>
    </section>
    <section id="main" class="w-full py-24">
        <div class="w-full max-w-5xl mx-auto grid grid-cols-2">
            <div>
                <table class="table w-full">
                    <tr>
                        <td>Nama</td>
                        <td>: <b>{{ $order->name }}</b></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <b>{{ $order->email }}</b></td>
                    </tr>
                    <tr>
                        <td>Nomor Telephone</td>
                        <td>: <b>{{ $order->phone_number }}</b></td>
                    </tr>
                    <tr>
                        <td>Status Pembayaran</td>
                        <td>: <b>@if($order->pay == true)Sudah Bayar @else Belum Bayar @endif</b></td>
                    </tr>
                    <tr>
                        <td>Status Pengerjaan</td>
                        <td>: <b>{{ $order->log[0]->desc }}</b></td>
                    </tr>
                </table>
@if($order->pay == false)
                    <a href="#" id="pay-button" class="inline-block py-2 px-8 rounded-lg transition-all text-white bg-red-800 hover:bg-red-600 text-sm">Bayar</a>
@endif
            </div>
            <div>
                <table class="table w-full">
                    <tr>
                        <td colspan="2"><b>Detail Pesanan</b></td>
                    </tr>
                    <tr>
                        <td class="text-center border px-4">No</td>
                        <td class="text-center border px-4">Nama Produk</td>
                        <td class="text-center border px-4">Total</td>
                    </tr>
@php $no = 1 @endphp
@foreach(json_decode($order->order_detail) as $detail)
                    <tr>
                        <td class="text-center border px-4">{{ $no++ }}</td>
                        <td class="text-center border px-4">{{ $detail->name }}</td>
                        <td class="text-center border px-4">Rp {{ number_format($detail->price) }}</td>
                    </tr>
@endforeach                
                    <tr>
                        <th class="text-right border px-4" colspan="2">Total</th>
                        <th class="text-center border px-4">Rp {{ number_format($order->total_price) }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <x-slot name="js">
        @if($order->pay == false)
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
        <script type="text/javascript">
          var payButton = document.getElementById('pay-button');
        
          payButton.addEventListener('click', function () {
            snap.pay('{{ $order->snap_token }}', {
              // Optional
              onSuccess: function(result){
                location.replace("{{ route('detailOrder',$order->uniq) }}?do=payment&token={{ $order->snap_token }}");
              },
              // Optional
              onPending: function(result){
              },
              // Optional
              onError: function(result){
              }
            });
          });
        </script> 
        @endif 
    </x-slot>
</x-guest-layout>
