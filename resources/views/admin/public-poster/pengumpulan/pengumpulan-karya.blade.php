<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Ujian Public Poster</h1>
            <button>
                <a href="/admin/public-poster/pengumpulan-karya/add" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Pengumpulan Karya Baru</a>
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
                            Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mulai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Berakhir
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Status
                        </th> --}}
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
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Olimpiade Cardion Gelombang 3
                        </td>
                        <td class="px-6 py-4">
                            28-01-2024 13:20
                        </td>
                        <td class="px-6 py-4">
                            26-04-2024 23:00
                        </td>
                        {{-- <td class="px-6 py-4">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="toggle" id="toggle"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </td> --}}
                        <td class="px-6 py-4">
                            <a href="/admin/public-poster/pengumpulan-karya/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Olimpiade Cardion Gelombang 2
                        </td>
                        <td class="px-6 py-4">
                            28-01-2024 13:20
                        </td>
                        <td class="px-6 py-4">
                            26-04-2024 23:00
                        </td>
                        {{-- <td class="px-6 py-4">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="toggle" id="toggle"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </td> --}}
                        <td class="px-6 py-4">
                            <a href="/admin/public-poster/pengumpulan-karya/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            3
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Olimpiade Cardion Gelombang 1
                        </td>
                        <td class="px-6 py-4">
                            28-01-2024 13:20
                        </td>
                        <td class="px-6 py-4">
                            26-04-2024 23:00
                        </td>
                        {{-- <td class="px-6 py-4">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="toggle" id="toggle"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </td> --}}
                        <td class="px-6 py-4">
                            <a href="/admin/public-poster/pengumpulan-karya/edit"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-layout>