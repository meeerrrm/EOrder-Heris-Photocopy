<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order') }}
        </h2>
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
                        <table class="table w-full border">
                            <thead>
                                <tr>
                                    <th class="py-1 px-4 text-center border">No</th>
                                    <th class="py-1 px-4 text-center border">Name</th>
                                    <th class="py-1 px-4 text-center border">Email</th>
                                    <th class="py-1 px-4 text-center border">Phone Number</th>
                                    <th class="py-1 px-4 text-center border">Last Status</th>
                                    <th class="py-1 px-4 text-center border">Last Update</th>
                                    <th class="py-1 px-4 text-center border">Action</th>
                                </tr>
                            </thead>
                            <tbody>                
@foreach($orders as $order)
                                <tr>
                                    <td class="py-1 px-4 text-center border">{{ $loop->iteration }}</td>
                                    <td class="py-1 px-4 text-center border">{{ $order->name }}</td>
                                    <td class="py-1 px-4 text-center border">{{ $order->email }}</td>
                                    <td class="py-1 px-4 text-center border">{{ $order->phone_number }}</td>
                                    <td class="py-1 px-4 text-center border">{{ $order->log[0]->desc }}</td>
                                    <td class="py-1 px-4 text-center border">{{ $order->log[0]->created_at }}</td>
                                    <td class="py-1 px-4 text-center border">
                                        <a href="{{ route('admin.order.show',$order->id) }}" class="py-1 px-8 rounded-xl bg-blue-700 text-white shadow-xl hover:bg-blue-500 hover:shadow-sm transition-all inline-block mb-1">Detail</a>
                                    </td>
                                </tr>
@endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    </x-slot>
</x-app-layout>