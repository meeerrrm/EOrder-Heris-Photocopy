<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
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
@if($errors->any())
{!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
                    <div class="text-right">
                        <button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'product-create')" class="py-1 px-8 rounded-xl bg-blue-700 text-white shadow-xl hover:bg-blue-500 hover:shadow-sm transition-all inline-block mb-2 ">Create</button>
                    </div>
                    <div class="w-full overflow-y-auto mb-2">
                        <table class="table w-full border">
                            <thead>
                                <tr>
                                    <th class="py-1 px-4 text-center border">No</th>
                                    <th class="py-1 px-4 text-center border">Photo</th>
                                    <th class="py-1 px-4 text-center border">Product Name</th>
                                    <th class="py-1 px-4 text-center border">Estimate</th>
                                    <th class="py-1 px-4 text-center border">Type</th>
                                    <th class="py-1 px-4 text-center border">Price</th>
                                    <th class="py-1 px-4 text-center border">Action</th>
                                </tr>
                            </thead>
                            <tbody>
@php
    $no = 1;
    if(isset($_GET['page'])){
        $no = ($_GET['page'] - 1) * 5 + 1;
    }
@endphp                                
@foreach($products as $product)
                                <tr>
                                    <td class="py-1 px-4 text-center border">{{ $no++ }}</td>
                                    <td class="py-1 px-4 text-center border"><img src="{{ asset('storage/product/'.$product->photo) }}" class="max-h-24 mx-auto shadow" alt="{{ $product->name }}"></td>
                                    <td class="py-1 px-4 text-center border">{{ $product->name }}</td>
                                    <td class="py-1 px-4 text-center border">{{ $product->estimate }} Minutes</td>
                                    <td class="py-1 px-4 text-center border">{{ $product->type }}</td>
                                    <td class="py-1 px-4 text-center border">Rp {{ number_format($product->price) }} / pcs</td>
                                    <td class="py-1 px-4 text-center border">
                                        <button x-data=""
                                        data-id="{{ $product->id }}"
                                        x-on:click.prevent="$dispatch('open-modal', 'product-update')"
                                        class="editButton inline-flex items-center px-4 py-2 bg-yellow-800 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit</button>
                                        <button x-data=""
                                        data-id="{{ $product->id }}"
                                        x-on:click.prevent="$dispatch('open-modal', 'product-delete')" 
                                        class="deleteButton inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete</button>
                                    </td>
                                </tr>
@endforeach                                
                            </tbody>
                        </table>
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
    <x-modal name="product-create" focusable>
        <form method="post" class="p-6" enctype="multipart/form-data">
            @csrf

            <h2 class="text-lg font-medium">
                {{ __('Create Product') }}
            </h2>

            <div class="mt-6">
                <x-input-label for="name" value="{{ __('Name') }}"/>

                <x-text-input
                    id="name"
                    name="name"
                    required
                    type="text"
                    class="mt-1 block w-full"
                    :value="old('name')" 
                />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="photo" value="{{ __('Photo') }}"/>

                <x-text-input
                    id="photo"
                    name="photo"
                    required
                    type="file"
                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm border p-2"
                    
                />

                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="description" value="{{ __('Description') }}"/>

                <textarea name="description" id="description" cols="30" rows="10" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{old('description')}}</textarea>

                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="price" value="{{ __('Price') }}"/>

                <x-text-input
                    id="price"
                    name="price"
                    required
                    type="text"
                    class="mt-1 block w-full"
                    :value="old('price')" 
                />

                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="type" value="{{ __('Type') }}"/>

                <select name="type" id="type" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">-- Pilih Jenis -- </option>
                    <option value="print">Print</option>
                    <option value="other">Tambahan</option>
                </select>

                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="estimate" value="{{ __('Estimate (in minute)') }}"/>

                <x-text-input
                    id="estimate"
                    name="estimate"
                    required
                    type="number"
                    class="mt-1 block w-full"
                    :value="old('estimate')" 
                />

                <x-input-error :messages="$errors->get('estimate')" class="mt-2" />
            </div>


            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Create') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
    <x-modal name="product-update" focusable>
        <form id="update" method="POST" class="p-6" enctype="multipart/form-data">
            @csrf
            @method('put')
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Update Product') }}
            </h2>
            <input type="hidden" name="id" id="id">
            <div class="mt-6">
                <x-input-label for="name" value="{{ __('Name') }}"/>

                <x-text-input
                    id="name"
                    name="name"
                    required
                    type="text"
                    class="mt-1 block w-full"
                    :value="old('name')" 
                />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="photo" value="{{ __('Photo') }}"/>

                <x-text-input
                    id="photo"
                    name="photo"
                    type="file"
                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm border p-2"
                    
                />

                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="description" value="{{ __('Description') }}"/>

                <textarea name="description" id="description" cols="30" rows="10" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{old('description')}}</textarea>

                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="price" value="{{ __('Price') }}"/>

                <x-text-input
                    id="price"
                    name="price"
                    required
                    type="text"
                    class="mt-1 block w-full"
                    :value="old('price')" 
                />

                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="type" value="{{ __('Type') }}"/>

                <select name="type" id="type" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">-- Pilih Jenis -- </option>
                    <option value="print">Print</option>
                    <option value="other">Tambahan</option>
                </select>

                <x-input-error :messages="$errors->get('type')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="estimate" value="{{ __('Estimate (in minute)') }}"/>

                <x-text-input
                    id="estimate"
                    name="estimate"
                    required
                    type="number"
                    class="mt-1 block w-full"
                    :value="old('estimate')" 
                />

                <x-input-error :messages="$errors->get('estimate')" class="mt-2" />
            </div>


            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-primary-button class="ms-3">
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </x-modal>
    <x-modal name="product-delete" focusable>
        <form id="delete" method="POST" class="p-6" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Delete Product') }}
            </h2>
            <input type="hidden" name="id" id="id">
            <div class="py-6">
                <p>Yakin menghapus Product?</p>
            </div>
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Ya') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
    <x-slot name="js">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $('.editButton').click(function(){
                    $.ajax({
                        type: "get",
                        url: "{{ url('/admin/product/fetch') }}/"+$(this).data("id"),
                        dataType: "json",
                        success: function (response) {
                            $('#update #id').val(response.id);
                            $('#update #name').val(response.name);
                            $('#update #description').html(response.description);
                            $('#update #price').val(response.price);
                            $('#update #estimate').val(response.estimate);
                            $('#update #type').val(response.type).change();
                        }
                    });
                });
                $('.deleteButton').click(function(){
                    $('#delete #id').val($(this).data("id"));
                });
            });
        </script>
    </x-slot>
</x-app-layout>