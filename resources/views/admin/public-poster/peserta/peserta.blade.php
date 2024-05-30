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
                            Sudah Bayar
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-times text-xs mr-2"></i>
                            Belum Bayar
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10" id="tab-1">
                <div class="flex gap-6 mb-6 pb-6 border-b">
                    <div class="dropdown relative md:static block" id="dropdown-export">
                        <button class="btn-gray focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                            <div class="my-1 capitalize flex items-center">
                                <i class="fad fa-file-export mr-2 text-sm leading-none"></i>
                                <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">Export tiap cabang
                                </h1>
                                <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                            </div>
                        </button>
                        <div
                            class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 left-0 w-40 mt-2 py-2">
                            <p class="px-4 py-2 block capitalize font-medium text-xs text-black tracking-wide">Pilih
                                Cabang
                            </p>
                            <hr>
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                                href="#">
                                Online
                            </a>
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                                href="#">
                                Offline
                            </a>
                        </div>
                    </div>
                    <button>
                        <a href="#" class="btn">Export as Excel</a>
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
                                Sekolah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
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
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    SALMA MUTI HAFIZHA
                                </p>
                                <p class="text-xs">
                                    Nama Tim
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                SMAN 9 Malang
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
                                salma@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                081234567890
                            </td>
                            <td class="px-6 py-4">
                                Aktif
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a id="modal-box{{ $i }}" onclick="showModal({{ $i }})"
                                    class="font-medium text-gray-900 cursor-pointer">
                                    <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                                </a>
                                <div id="modal{{ $i }}" class="absolute right-0 hidden z-10"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center text-center">
                                        <div id="bg-modal{{  $i }}" onclick="hideModal({{ $i }})" class="fixed inset-0"
                                            aria-hidden="true"></div>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                            <div class="bg-white">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div
                                                            class="card-body relative overflow-x-visible sm:rounded-lg">
                                                            <button class="w-full">
                                                                <a href="/admin/public-poster/edit"
                                                                    class="btn-bs-primary">
                                                                    <i class="fad fa-edit mr-2 leading-none"></i>
                                                                    Edit Peserta</a>
                                                            </button>
                                                            <button class="w-full mt-2">
                                                                <a href="" class="btn-bs-danger">
                                                                    <i class="fad fa-trash mr-2 leading-none"></i>
                                                                    Hapus Peserta</a>
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

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-2">
                <div class="flex gap-6 mb-6 pb-6 border-b">
                    <button>
                        <a href="#" class="btn">Export as Excel</a>
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
                                Sekolah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No. Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
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
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                ADI NUGRAHA
                            </td>
                            <td class="px-6 py-4">
                                SMAN 9 Malang
                            </td>
                            <td class="px-6 py-4">
                                Online
                            </td>
                            <td class="px-6 py-4">
                                adi@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                081234567890
                            </td>
                            <td class="px-6 py-4">
                                Aktif
                            </td>
                            <td class="px-6 py-4">
                                -
                            </td>
                            <td class="px-6 py-4">
                                <a id="modal-box{{ $i }}" onclick="showModal({{ $i }})"
                                    class="font-medium text-gray-900 cursor-pointer">
                                    <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                                </a>
                                <div id="modal{{ $i }}" class="absolute right-0 hidden z-10"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center text-center">
                                        <div id="bg-modal{{  $i }}" onclick="hideModal({{ $i }})" class="fixed inset-0"
                                            aria-hidden="true"></div>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                            <div class="bg-white">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div
                                                            class="card-body relative overflow-x-visible sm:rounded-lg">
                                                            <button class="w-full">
                                                                <a href="/admin/public-poster/edit"
                                                                    class="btn-bs-primary">
                                                                    <i class="fad fa-edit mr-2 leading-none"></i>
                                                                    Edit Peserta</a>
                                                            </button>
                                                            <button class="w-full mt-2">
                                                                <a href="" class="btn-bs-danger">
                                                                    <i class="fad fa-trash mr-2 leading-none"></i>
                                                                    Hapus Peserta</a>
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