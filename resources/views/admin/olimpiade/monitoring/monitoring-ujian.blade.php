<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Daftar Ujian Olimpiade</h1>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            Ujian
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
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Olimpiade Cardion Gelombang 3
                        </td>
                        <td class="px-6 py-4">
                            <a href="monitoring-ujian/detail">
                                <button class="btn">Monitoring</button>
                            </a>
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
                            <a href="monitoring-ujian/detail">
                                <button class="btn">Monitoring</button>
                            </a>
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
                            <a href="monitoring-ujian/detail">
                                <button class="btn">Monitoring</button>
                            </a>
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