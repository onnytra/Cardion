<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Pengumuman</h1>
            <button>
                <a href="{{route($event.'.pengumuman.create')}}" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Pengumuman Baru</a>
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
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gelombang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe Pengumuman
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
                    @foreach ($pengumumans as $pengumuman)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            {{ $pengumuman->judul }}
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            {{ $pengumuman->gelombang->gelombang ?? '-'}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pengumuman->tipe_pengumuman }}
                        </td>
                        <td class="px-6 py-4">
                            @if($pengumuman->status_pengumuman)
                            <span
                                class="inline-flex items-center rounded-md bg-green-200 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Aktif</span>
                            @else
                            <span
                                class="inline-flex items-center rounded-md bg-red-200 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Tidak
                                Aktif</span>
                            @endif
                        </td>

                        <td class="px-6 py-4">
                            <a id="modal-box{{ $loop->iteration }}" onclick="showModal({{ $loop->iteration }})"
                                class="font-medium text-gray-900 cursor-pointer">
                                <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                            </a>
                            <div id="modal{{ $loop->iteration }}" class="absolute right-0 hidden z-10"
                                aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center text-center">
                                    <div id="bg-modal{{  $loop->iteration }}" onclick="hideModal({{ $loop->iteration }})"
                                        class="fixed inset-0" aria-hidden="true"></div>
                                    <div
                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                        <div class="bg-white">
                                            <div class="sm:flex sm:items-start">
                                                <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                        <button class="w-full">
                                                            <a href="{{ route($event.'.pengumuman.edit', $pengumuman->id_pengumuman) }}"
                                                                class="btn-bs-primary">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Edit Pengumuman</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="{{ route($event.'.pengumuman.delete', $pengumuman->id_pengumuman) }}"
                                                                class="btn-bs-danger" data-confirm-delete="true">
                                                                <i class="fad fa-trash mr-2 leading-none"></i>
                                                                Hapus Pengumuman</a>
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