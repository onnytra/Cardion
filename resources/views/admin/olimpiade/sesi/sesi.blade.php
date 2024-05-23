<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Sesi Ujian</h1>
            <button>
                <a href="/admin/olimpiade/sesi/add" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Sesi Baru</a>
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
                            Tipe
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
                            Gelombang 1
                        </td>
                        <td class="px-6 py-4">
                            Rp 170.000
                        </td>
                        <td class="px-6 py-4">
                            2023-12-04
                        </td>
                        <td class="px-6 py-4">
                            2024-01-25
                        </td>
                        <td class="px-6 py-4">
                            Offline
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/olimpiade/sesi/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            Gelombang 2
                        </td>
                        <td class="px-6 py-4">
                            Rp 170.000
                        </td>
                        <td class="px-6 py-4">
                            2023-12-04
                        </td>
                        <td class="px-6 py-4">
                            2024-01-25
                        </td>
                        <td class="px-6 py-4">
                            Offline
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/olimpiade/sesi/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            3
                        </td>
                        <td scope="row" class="px-6 py-4 text-gray-900">
                            Gelombang 3
                        </td>
                        <td class="px-6 py-4">
                            Rp 170.000
                        </td>
                        <td class="px-6 py-4">
                            2023-12-04
                        </td>
                        <td class="px-6 py-4">
                            2024-01-25
                        </td>
                        <td class="px-6 py-4">
                            Offline
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/olimpiade/sesi/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</x-layout>