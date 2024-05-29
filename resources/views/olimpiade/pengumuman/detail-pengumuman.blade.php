<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header">
            <h1 class="h6">Pengumuman</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <h1 class="h4">Materi Kedokteran Dasar 1</h1>
            <p class="text-gray-900 mt-3">Materi Kedokteran Dasar 1</p>
            <a class="block mt-2 text-blue-500 hover:underline"
                href="https://drive.google.com/file/d/1vgGjU0a94T7WCgzPOy8RkUvMvVmqS_kQ/view?usp=drive_link">https://drive.google.com/file/d/1vgGjU0a94T7WCgzPOy8RkUvMvVmqS_kQ/view?usp=drive_link</a>
            <p class="mt-5">
                Cabang: Online
            </p>
            <p>
                Rayon: Online
            </p>
            <p>
                Ujian: Try Out Intermediate 1
            </p>
            <div
                class="mt-5 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                            aria-current="page">
                            Nilai Total
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            Kimia
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg mt-5" id="tab-1">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Tim
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asal Sekolah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Benar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Salah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kosong
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peringkat
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                1
                            </td>
                            <td class="px-6 py-4">
                                00-01-007-0054
                            </td>
                            <td class="px-6 py-4">
                                Medstar 271
                            </td>
                            <td class="px-6 py-4">
                                SMAN 1 Pacitan
                            </td>
                            <td class="px-6 py-4">
                                36
                            </td>
                            <td class="px-6 py-4">
                                16
                            </td>
                            <td class="px-6 py-4">
                                8
                            </td>
                            <td class="px-6 py-4">
                                128
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                00-01-007-0054
                            </td>
                            <td class="px-6 py-4">
                                Medstar 271
                            </td>
                            <td class="px-6 py-4">
                                SMAN 1 Pacitan
                            </td>
                            <td class="px-6 py-4">
                                36
                            </td>
                            <td class="px-6 py-4">
                                16
                            </td>
                            <td class="px-6 py-4">
                                8
                            </td>
                            <td class="px-6 py-4">
                                128
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg mt-5 hidden" id="tab-2">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Tim
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Asal Sekolah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Benar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Salah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kosong
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peringkat
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                1
                            </td>
                            <td class="px-6 py-4">
                                00-01-007-0054
                            </td>
                            <td class="px-6 py-4">
                                Cephalgia
                            </td>
                            <td class="px-6 py-4">
                                Man 2 Kota Probolinggo
                            </td>
                            <td class="px-6 py-4">
                                10
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                5
                            </td>
                            <td class="px-6 py-4">
                                40
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                00-01-007-0054
                            </td>
                            <td class="px-6 py-4">
                                Cephalgia
                            </td>
                            <td class="px-6 py-4">
                                Man 2 Kota Probolinggo
                            </td>
                            <td class="px-6 py-4">
                                10
                            </td>
                            <td class="px-6 py-4">
                                0
                            </td>
                            <td class="px-6 py-4">
                                5
                            </td>
                            <td class="px-6 py-4">
                                40
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout-u>