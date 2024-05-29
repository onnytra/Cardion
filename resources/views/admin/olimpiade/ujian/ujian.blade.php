<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Daftar Ujian Olimpiade</h1>
            <button>
                <a href="{{route('olimpiade.ujian.create')}}" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Ujian Baru</a>
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
                            Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mulai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Berakhir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Durasi
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            Jenis
                        </th> --}}
                        {{-- <th scope="col" class="px-6 py-3">
                            Status
                        </th> --}}
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ujians as $data)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->judul }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->mulai ?? '--'}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->berakhir ?? '--'}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->durasi }}
                        </td>
                        {{-- <td class="px-6 py-4">
                            <span class="bg-green-500 text-white px-2 py-1 rounded">{{ $data->jenis }}</span>
                        </td> --}}
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
                            <a href="{{route('olimpiade.ujian.edit', $data->id_ujian)}}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit Ujian</a>
                            <a href="{{route('olimpiade.ujian.edit', $data->id_ujian)}}"
                                    class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit Soal</a>
                            <a href="{{route('olimpiade.sesi.index', $data->id_ujian)}}"
                                        class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit Sesi</a>
                            <a href="{{route('olimpiade.ujian.delete', $data->id_ujian)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-confirm-delete="true">Hapus</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>