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
                <a href="/admin/olimpiade/assign-test/detail/tambah-peserta" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Tambah Peserta Ujian</a>
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