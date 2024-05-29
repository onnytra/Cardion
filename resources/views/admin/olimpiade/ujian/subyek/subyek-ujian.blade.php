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
                        Tambah Soal</a>
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
                            Nama
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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            Kedokteran Dasar
                        </td>
                        <td scope="row" class="px-6 py-4">
                            Kedokteran Dasar
                        </td>
                        <td scope="row" class="px-6 py-4">
                            15
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/olimpiade/ujian/soal/subyek/edit"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit Subyek</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus
                                Subyek</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>