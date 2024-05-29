<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Cabang Olimpiade</h1>
            <button>
                <a href="/admin/olimpiade/cabang/add" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Cabang Baru</a>
            </button>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg text-sm p-10">
            <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cabang
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
                    @foreach ($cabangs as $data)
                    <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->cabang }}
                        </td>
                        <td class="px-6 py-4">
                            @if($data->status_cabang)
                            <span
                                class="inline-flex items-center rounded-md bg-green-200 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Aktif</span>
                            @else
                            <span
                                class="inline-flex items-center rounded-md bg-red-200 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('olimpiade.rayon.index', $data->id_cabang)}}"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit Rayon</a>
                            <a href="{{route('olimpiade.cabang.edit', $data->id_cabang)}}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit Cabang</a>
                            <a href="{{route('olimpiade.cabang.delete', $data->id_cabang)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-confirm-delete="true">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>