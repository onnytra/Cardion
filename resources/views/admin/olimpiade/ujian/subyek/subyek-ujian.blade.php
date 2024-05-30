<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Subyek</h1>
            <div class="flex gap-2">
                <button>
                    <a href="/admin/olimpiade/ujian/soal/subyek/add" class="btn-bs-dark">
                        <i class="fad fa-plus mr-2 leading-none"></i>
                        Tambah Subyek</a>
                </button>
                <button>
                    <a href="/admin/olimpiade/ujian/soal" class="btn-gray">
                        <i class="fad fa-chevron-left mr-2 leading-none"></i>
                        Kembali ke daftar soal</a>
                </button>
            </div>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10">
            <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Label
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Soal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 3; $i++) <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            Kedokteran Dasar
                        </td>
                        <td scope="row" class="px-6 py-4">
                            15
                        </td>
                        <td class="px-6 py-4">
                            <a id="modal-box{{ $i }}" onclick="showModal({{ $i }})"
                                class="font-medium text-gray-900 cursor-pointer">
                                <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                            </a>
                            <div id="modal{{ $i }}" class="absolute right-0 hidden z-10" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center text-center">
                                    <div id="bg-modal{{  $i }}" onclick="hideModal({{ $i }})" class="fixed inset-0"
                                        aria-hidden="true"></div>
                                    <div
                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                        <div class="bg-white">
                                            <div class="sm:flex sm:items-start">
                                                <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                        <button class="w-full">
                                                            <a href="/admin/olimpiade/ujian/soal/subyek/edit"
                                                                class="btn-bs-primary">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Edit Subyek</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="" class="btn-bs-danger">
                                                                <i class="fad fa-trash mr-2 leading-none"></i>
                                                                Hapus Subyek</a>
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
                        @endfor
                </tbody>
            </table>
        </div>
    </div>
</x-layout>