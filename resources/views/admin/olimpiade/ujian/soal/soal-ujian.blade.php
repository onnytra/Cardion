<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Soal</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Ujian</td>
                    <td class="px-6 py-3 text-gray-600">Olimpiade Cardion Gelombang 3</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Tipe</td>
                    <td class="px-6 py-3 text-gray-600">
                        <span class="bg-green-500 text-white px-2 py-1 rounded">Periodik</span>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Soal</td>
                    <td class="px-6 py-3 text-gray-600">120</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Durasi</td>
                    <td class="px-6 py-3 text-gray-600">44</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Mulai</td>
                    <td class="px-6 py-3 text-gray-600">28/01/2024 13:20</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Berakhir</td>
                    <td class="px-6 py-3 text-gray-600">28/01/2024 13:20</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Peserta Ujian</h1>
            <div class="flex gap-2">
                <button>
                    <a href="/admin/olimpiade/ujian/soal/add" class="btn-bs-dark">
                        <i class="fad fa-plus mr-2 leading-none"></i>
                        Tambah Soal</a>
                </button>
                <button>
                    <a href="/admin/olimpiade/ujian/soal/subyek" class="btn">
                        <i class="fad fa-tag mr-2 leading-none"></i>
                        Subyek</a>
                </button>
                <button>
                    <a href="/admin/olimpiade/ujian" class="btn-gray">
                        <i class="fad fa-chevron-left mr-2 leading-none"></i>
                        Kembali ke daftar ujian</a>
                </button>
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
                            Soal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawaban
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
                            Pada mamalia, sejumlah besar cairan disaring setiap hari oleh nefron di ginjal. Hanya
                            sekitar 1% yang diekskresikan sebagai urin. Sisa 99% filtratnya......
                        </td>
                        <td class="px-6 py-4 flex flex-wrap gap-2">
                            <a href="#" class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">A</span>
                            </a>
                            <a href="#" class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">B</span>
                            </a>
                            <a href="#" class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">C</span>
                            </a>
                            <a href="#" class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">D</span>
                            </a>
                            <a href="#" class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">E</span>
                            </a>
                            <a href="#" class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">F</span>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/olimpiade/ujian/soal/edit"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit Soal</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus
                                Soal</a>
                            <a href="/admin/olimpiade/ujian/soal/preview" target="_blank"
                                class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Preview
                                Soal</a>

                            <a href="#" id="modal-box" class="font-medium text-gray-900">
                                <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                            </a>
                            <div id="modal" class="absolute hidden" aria-labelledby="modal-title" role="dialog"
                                aria-modal="true">
                                <div class="flex items-end justify-center text-center">
                                    <div id="bg-modal" class="fixed inset-0" aria-hidden="true"></div>
                                    <div
                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                        <div class="bg-white">
                                            <div class="sm:flex sm:items-start">
                                                <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                        <button class="w-full">
                                                            <a href="/admin/olimpiade/ujian/soal/edit"
                                                                class="btn-bs-primary">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Edit Ujian</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="" class="btn-bs-danger">
                                                                <i class="fad fa-trash mr-2 leading-none"></i>
                                                                Hapus Ujian</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="/admin/olimpiade/ujian/soal/preview"
                                                                class="btn-bs-info">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Preview Ujian</a>
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
                </tbody>
            </table>
        </div>
    </div>
</x-layout>