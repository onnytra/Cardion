<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Gelombang Pembayaran</h1>
            <button>
                <a href="{{ route('olimpiade.gelombang_pembayaran.create')}}" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Gelombang Baru</a>
            </button>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10">
            <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mulai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Selesai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gelombang_pembayarans as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            {{ $item->gelombang }}
                        </td>
                        <td class="px-6 py-4">
                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->mulai }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->selesai }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($item->status_gelombang_pembayaran )
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                            @else
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a id="modal-box{{ $item->id_gelombang }}" onclick="showModal({{ $item->id_gelombang }})" class="font-medium text-gray-900 cursor-pointer">
                                <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                            </a>
                            <div id="modal{{ $item->id_gelombang }}" class="absolute right-0 hidden z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center text-center">
                                    <div id="bg-modal{{  $item->id_gelombang }}" onclick="hideModal({{ $item->id_gelombang }})" class="fixed inset-0" aria-hidden="true"></div>
                                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                        <div class="bg-white">
                                            <div class="sm:flex sm:items-start">
                                                <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                        <button class="w-full">
                                                            <a href="{{ route('olimpiade.gelombang_pembayaran.edit', $item->id_gelombang)}}" class="btn-bs-primary">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Edit Gelombang</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="{{ route('olimpiade.gelombang_pembayaran.delete', $item->id_gelombang)}}" class="btn-bs-danger" data-confirm-delete="true">
                                                                <i class="fad fa-trash mr-2 leading-none"></i>
                                                                Hapus Gelombang</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-layout>