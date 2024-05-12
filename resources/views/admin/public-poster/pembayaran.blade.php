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
                            Telah Dibayar
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-spinner text-xs mr-2"></i>
                            Menunggu
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-3"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-times text-xs mr-2"></i>
                            Ditolak
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-4"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-question text-xs mr-2"></i>
                            Belum Konfirmasi
                        </a>
                    </li>
                </ul>
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
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konfirmasi Pembayaran
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
                                    Ellenzia Reyzahra
                                </p>
                                <p class="text-xs">
                                    082360335255
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    Malang
                                </p>
                                <p class="text-xs">
                                    Online
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-25 21:51:56
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Tolak</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Fashila Azra Suryana
                                </p>
                                <p class="text-xs">
                                    082360335255
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    Malang
                                </p>
                                <p class="text-xs">
                                    Online
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-25 21:51:56
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Tolak</a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                3
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    Razita Irdina Putri
                                </p>
                                <p class="text-xs">
                                    082360335255
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    Malang
                                </p>
                                <p class="text-xs">
                                    Online
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-25 21:51:56
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Tolak</a>
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
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konfirmasi Pembayaran
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
                                    Ghefira Amalia Audyani
                                </p>
                                <p class="text-xs">
                                    082360335255
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    Malang
                                </p>
                                <p class="text-xs">
                                    Online
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-25 21:51:56
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                                <a href="#"
                                    class="font-medium text-green-600 dark:text-red-500 hover:underline">Terima</a>
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

            <div class="relative overflow-x-auto hidden sm:rounded-lg" id="tab-3">
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
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konfirmasi Pembayaran
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
                                    Lailatul Muna
                                </p>
                                <p class="text-xs">
                                    082360335255
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    Malang
                                </p>
                                <p class="text-xs">
                                    Online
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-25 21:51:56
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                                <a href="#"
                                    class="font-medium text-green-600 dark:text-red-500 hover:underline">Terima</a>
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

            <div class="relative overflow-x-auto hidden sm:rounded-lg" id="tab-4">
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
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
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
                                    Keysa Arum Ceria
                                </p>
                                <p class="text-xs">
                                    082360335255
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    Malang
                                </p>
                                <p class="text-xs">
                                    Online
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                2024-01-25 21:51:56
                            </td>
                            <td class="px-6 py-4">
                                -
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