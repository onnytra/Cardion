<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <div
                class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                            aria-current="page">
                            <i class="fad fa-check text-xs mr-2"></i>
                            Sudah Dinilai
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-times text-xs mr-2"></i>
                            Belum Dinilai
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6 py-6 border-b">
                <h1 class="text-medium text-gray-700">Event*</h1>
                <div class="dropdown relative md:static block">
                    <button class="btn-gray focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                        <div class="my-1 capitalize flex items-center">
                            <i class="fad fa-file-export mr-2 text-sm leading-none"></i>
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">-- Pilih Event --</h1>
                            <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                        </div>
                    </button>
                    <div
                        class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 left-0 w-56 mt-2 py-2">
                        <p class="px-4 py-2 block capitalize font-medium text-xs text-black tracking-wide">Pilih Event
                        </p>
                        <hr>
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            Tes Poster Public
                        </a>
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            Pengumpulan Karya
                        </a>
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            Link Group WhatsApp
                        </a>
                    </div>
                </div>
                <button>
                    <a href="#" class="btn-gray"><i class="fad fa-search text-xs mr-2"></i>Filter</a>
                </button>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg" id="tab-1">
                <div class="flex justify-end items-center my-4">
                    <label for="search" class="text-sm mr-2">Search :</label>
                    <input type="search" name="search" id="search"
                        class="mr-5 p-1 border border-gray w-56 shadow-sm text-sm rounded-md">
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tgl. Upload
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sesi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
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
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Najwa Kharirotuz Zahwa
                                </p>
                                <p class="text-xs">
                                    Nama Tim
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-26
                            </td>
                            <td class="px-6 py-4">
                                Gelombang 2
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i
                                            class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">100</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/public-poster/penilaian/edit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Zulfiah Fathonah
                                </p>
                                <p class="text-xs">
                                    Nama Tim
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-26
                            </td>
                            <td class="px-6 py-4">
                                Gelombang 2
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i
                                            class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">100</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/public-poster/penilaian/edit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Ananda Harirotul Husna
                                </p>
                                <p class="text-xs">
                                    Nama Tim
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-26
                            </td>
                            <td class="px-6 py-4">
                                Gelombang 2
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i
                                            class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">100</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/public-poster/penilaian/edit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-end my-6 mr-5">
                    <div class="flex flex-col items-center">
                        <span class="text-sm text-gray-700 dark:text-gray-400">
                            Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span
                                class="font-semibold text-gray-900 dark:text-white">10</span> of <span
                                class="font-semibold text-gray-900 dark:text-white">100</span> Entries
                        </span>
                        <div class="inline-flex mt-2 gap-1 xs:mt-0">
                            <button class="btn-bs-dark">
                                <i class="fad fa-angle-left mr-2 leading-none"></i>
                                Prev
                            </button>
                            <button class="btn-bs-dark">
                                Next
                                <i class="fad fa-angle-right ml-2 leading-none"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg" id="tab-2">
                <div class="flex justify-end items-center my-4">
                    <label for="search" class="text-sm mr-2">Search :</label>
                    <input type="search" name="search" id="search"
                        class="mr-5 p-1 border border-gray w-56 shadow-sm text-sm rounded-md">
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tgl. Upload
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sesi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
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
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Pandu Adi Mondtara
                                </p>
                                <p class="text-xs">
                                    Nama Tim
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-26
                            </td>
                            <td class="px-6 py-4">
                                Gelombang 2
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i
                                            class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">-</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/public-poster/penilaian/edit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Rafly Priambudi
                                </p>
                                <p class="text-xs">
                                    Nama Tim
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-26
                            </td>
                            <td class="px-6 py-4">
                                Gelombang 2
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button>
                                    <a href="#" class="btn-gray"><i
                                            class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">-</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/public-poster/penilaian/edit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="flex justify-end my-6 mr-5">
                    <div class="flex flex-col items-center">
                        <span class="text-sm text-gray-700 dark:text-gray-400">
                            Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span
                                class="font-semibold text-gray-900 dark:text-white">10</span> of <span
                                class="font-semibold text-gray-900 dark:text-white">100</span> Entries
                        </span>
                        <div class="inline-flex mt-2 gap-1 xs:mt-0">
                            <button class="btn-bs-dark">
                                <i class="fad fa-angle-left mr-2 leading-none"></i>
                                Prev
                            </button>
                            <button class="btn-bs-dark">
                                Next
                                <i class="fad fa-angle-right ml-2 leading-none"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>