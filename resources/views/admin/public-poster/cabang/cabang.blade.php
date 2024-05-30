<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Cabang Public Poster</h1>
            <button>
                <a href="/admin/public-poster/cabang/add" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Cabang Baru</a>
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
                            Cabang
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
                    @for ($i = 1; $i <= 2; $i++) <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Online
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
                            <a id="modal-box{{ $i }}" onclick="showModal({{ $i }})"
                                class="font-medium text-gray-900 cursor-pointer">
                                <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                            </a>
                            <div id="modal{{ $i }}" class="absolute right-0 hidden z-10" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center text-center">
                                    <div id="bg-modal{{  $i }}" onclick="hideModal({{ $i }})" class="fixed inset-0"
                                        aria-hidden="true"></div>
                                    <div
                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                        <div class="bg-white">
                                            <div class="sm:flex sm:items-start">
                                                <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                        <button class="w-full">
                                                            <a href="/admin/public-poster/cabang/rayon"
                                                                class="btn-bs-success">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Edit Rayon</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="/admin/public-poster/cabang/edit"
                                                                class="btn-bs-primary">
                                                                <i class="fad fa-edit mr-2 leading-none"></i>
                                                                Edit Cabang</a>
                                                        </button>
                                                        <button class="w-full mt-2">
                                                            <a href="#" class="btn-bs-danger">
                                                                <i class="fad fa-trash mr-2 leading-none"></i>
                                                                Hapus Cabang</a>
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