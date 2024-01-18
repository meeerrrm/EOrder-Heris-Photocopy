<x-app-layout>
    <x-slot name="header">
        <h2 class=" text-gray-800 leading-tight">
            Detail
        </h2>
        <h1 class="font-semibold text-2xl text-gray-800 leading-tight">{{ $order->uniq }}</h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
@if(Session::has('success'))
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 3000)"
                            class="bg-green-500 text-white py-4 px-8 block rounded-lg shadow mb-4"
                        >{!! Session::get('success') !!}</p>
@endif
@if(Session::has('error'))
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 3000)"
                            class="bg-red-500 text-white py-4 px-8 block rounded-lg shadow mb-4"
                        >{!! Session::get('error') !!}</p>
@endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="w-full overflow-y-auto mb-2">
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
                            <tr>
                                <td>File</td>
                                <td>: <a href="{{ url('storage/order/'.$order->file) }}" class="text-blue-500 font-semibold">Download</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl text-gray-800">Detail Order</h2>
                    <table class="table w-full mt-4">
                        <thead>
                            <tr>
                                <th class="border p-2 text-center w-12">No</th>
                                <th class="border p-2 text-center">Product</th>
                            </tr>
                        </thead>
                        <tbody>
@foreach(json_decode($order->order_detail) as $detail)
                            <tr>
                                <td class="border p-2 text-center">{{ $loop->iteration }}</td>
                                <td class="border p-2 text-center">{{ $detail->name }}</td>
                            </tr>
@endforeach                            
                        </tbody>
                    </table>
                    <h3 class="text-xl mt-2">Catatan:</h3>
                    <p>{!! $order->description !!}</p>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('admin.order.index') }}" class="py-2 px-8 rounded-xl bg-slate-600 text-white shadow-xl hover:bg-slate-500 hover:shadow-sm transition-all inline-block mb-1">Kembali</a>
                    
                    <button x-data=""
                     data-id="{{ $order->id }}"
                     x-on:click.prevent="$dispatch('open-modal', 'order-update')"
                     class="py-2 px-8 rounded-xl bg-yellow-600 text-white shadow-xl hover:bg-yellow-500 hover:shadow-sm transition-all inline-block mb-1">
                        Change Status
                    </button>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="order-update" focusable>
        <form id="order" method="POST" action="{{ route('admin.order.update',$order->id) }}" class="p-6" enctype="multipart/form-data">
            @csrf
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Update Status order') }}
            </h2>
            <div class="py-6">
                <select name="status" id="status" required class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">-- Pilih Jenis -- </option>
                    <option value="on-going">On Going</option>
                    <option value="done">Done</option>
                    <option value="taken">Taken</option>
                </select>

            </div>
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Update') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
    <x-slot name="js">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </x-slot>
</x-app-layout>