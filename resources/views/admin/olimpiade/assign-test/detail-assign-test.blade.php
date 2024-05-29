<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Keterangan Ujian</h1>
            <button>
                <a href="/admin/olimpiade/monitoring-ujian" class="btn-gray">
                    <i class="fad fa-chevron-left mr-2 leading-none"></i>
                    Kembali</a>
            </button>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Judul Ujian</td>
                    <td class="px-6 py-3 text-gray-600">Olimpiade Cardion Gelombang 3</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Waktu Ujian</td>
                    <td class="px-6 py-3 text-gray-600">28/01/2024 13:20 - 26/04/2024 23:00</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Tipe Ujian</td>
                    <td class="px-6 py-3 text-gray-600">Periodik</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Durasi</td>
                    <td class="px-6 py-3 text-gray-600">120 Menit</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Peserta</td>
                    <td class="px-6 py-3 text-gray-600">44 Peserta</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Peserta Ujian</h1>
            <button>
                <a href="" id="modal-box" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Tambah Peserta Ujian</a>
            </button>
            <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden" aria-labelledby="modal-title"
                role="dialog" aria-modal="true">
                <div class="flex items-end justify-center pt-24 px-4 pb-20 text-center">
                    <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <form action="">
                            <div class="bg-white px-4 pt-2">
                                <div class="sm:flex sm:items-start">
                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <div class="card-header">
                                            <h1 class="h6">Tambah Peserta</h1>
                                        </div>
                                        <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                            <div class="w-96 h-56 text-sm text-left text-gray-600">
                                                <select id="listPeserta" name="peserta" multiple>
                                                    <option class="font-medium text-sm">Select all</option>
                                                    <option class="font-medium text-sm">Adi</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                    <option class="font-medium text-sm">Bagas</option>
                                                </select>
                                            </div>
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
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10" id="tab-1">
            <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Peserta
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Asal Sekolah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telepon
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
                                01-01-007-0552
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            SMA ALMAAHIRA IIBS MALANG
                        </td>
                        <td class="px-6 py-4">
                            dianita.puspitasari1@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            085704241809
                        </td>
                        <td class="px-6 py-4">
                            Gelombang 1
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
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
                                01-01-007-0552
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            SMA ALMAAHIRA IIBS MALANG
                        </td>
                        <td class="px-6 py-4">
                            dianita.puspitasari1@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            085704241809
                        </td>
                        <td class="px-6 py-4">
                            Gelombang 1
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
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
                                01-01-007-0552
                            </p>
                        </td>
                        <td class="px-6 py-4">
                            SMA ALMAAHIRA IIBS MALANG
                        </td>
                        <td class="px-6 py-4">
                            dianita.puspitasari1@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            085704241809
                        </td>
                        <td class="px-6 py-4">
                            Gelombang 1
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</x-layout>