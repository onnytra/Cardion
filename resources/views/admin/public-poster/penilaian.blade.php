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

            <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10" id="tab-1">
                <div class="flex items-center gap-6 mb-6 pb-6 border-b">
                    <h1 class="text-medium text-gray-700">Event*</h1>
                    <div class="dropdown relative md:static block">
                        <button class="btn-gray focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                            <div class="my-1 capitalize flex items-center">
                                <i class="fad fa-file-export mr-2 text-sm leading-none"></i>
                                <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">-- Pilih Event --
                                </h1>
                                <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                            </div>
                        </button>
                        <div
                            class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 left-0 w-56 mt-2 py-2">
                            <p class="px-4 py-2 block capitalize font-medium text-xs text-black tracking-wide">Pilih
                                Event
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
                                <a href="" id="modal-box"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity"
                                            aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true">&#8203;</span>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <form action="">
                                                <div class="bg-white px-4 pt-2">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <div class="card-header">
                                                                <h1 class="h6">Penilaian Hasil Karya</h1>
                                                            </div>
                                                            <div
                                                                class="card-body relative overflow-x-auto sm:rounded-lg">
                                                                <table class="w-full text-sm text-left rtl:text-right">
                                                                    <tr>
                                                                        <td class="px-6 py-3">Nomor Peserta</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            02-01-008-0108
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Nama Peserta</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <p class="text-gray-900">
                                                                                Najwa Kharirotuz Zahwa
                                                                            </p>
                                                                            <p class="text-xs">
                                                                                Nama Tim
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Tanggal Upload</td>
                                                                        <td class="px-6 py-3 text-gray-600">2024-05-22
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Event</td>
                                                                        <td class="px-6 py-3 text-gray-600">Tes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">
                                                                            <label for="nilai"
                                                                                class="block text-sm">Nilai</label>
                                                                        </td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <input type="number" name="nilai" id="nilai"
                                                                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">
                                                                            <label for="keterangan"
                                                                                class="block text-sm">Keterangan
                                                                                Nilai</label>
                                                                        </td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <textarea type="text" name="keterangan"
                                                                                id="keterangan"
                                                                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 flex flex-row-reverse gap-2">
                                                    <button type="button" class="btn-bs-dark" id="close-modal">
                                                        batal
                                                    </button>
                                                    <button>
                                                        <a href="#" type="submit" class="btn-indigo">simpan</a>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                <a id="modal-box" href=""
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity"
                                            aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true">&#8203;</span>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-2 pb-2 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div class="card-header">
                                                            <h1 class="h6">Data Konfirmasi Pembayaran</h1>
                                                        </div>
                                                        <div class="card-body relative overflow-x-auto sm:rounded-lg">
                                                            <table class="w-full text-sm text-left rtl:text-right">
                                                                <tr>
                                                                    <td class="px-6 py-3">Nama</td>
                                                                    <td class="px-6 py-3 text-gray-600">A.n Desi
                                                                        Rahmadani</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bank</td>
                                                                    <td class="px-6 py-3 text-gray-600">BRI</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Tanggal Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">2024-01-25
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Status Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">Diterima</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bukti Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">
                                                                        <a href="#" class="btn-gray">
                                                                            View
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <button type="button" class="btn-bs-dark w-full" id="close-modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-2">
                <div class="flex items-center gap-6 mb-6 pb-6 border-b">
                    <h1 class="text-medium text-gray-700">Event*</h1>
                    <div class="dropdown relative md:static block">
                        <button class="btn-gray focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                            <div class="my-1 capitalize flex items-center">
                                <i class="fad fa-file-export mr-2 text-sm leading-none"></i>
                                <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">-- Pilih Event --
                                </h1>
                                <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                            </div>
                        </button>
                        <div
                            class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 left-0 w-56 mt-2 py-2">
                            <p class="px-4 py-2 block capitalize font-medium text-xs text-black tracking-wide">Pilih
                                Event
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
                <table id="datatable2" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
            </div>
        </div>
</x-layout>