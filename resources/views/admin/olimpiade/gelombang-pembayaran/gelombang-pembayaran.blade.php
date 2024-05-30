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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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
                            @if ($item->status_gelombang_pembayaran == 1)
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                            @else
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('olimpiade.gelombang_pembayaran.edit', $item->id_gelombang) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href=" {{ route('olimpiade.gelombang_pembayaran.delete', $item->id_gelombang) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-confirm-delete="true">Hapus</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-layout>