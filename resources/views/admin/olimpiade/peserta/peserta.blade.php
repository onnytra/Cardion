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
                <div class="flex gap-6 pb-6 mb-6 border-b">
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
                            {{-- <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas_sudah as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->nama_team }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->sekolah }}
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->cabangs->cabang }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->rayons->rayon }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->telepon }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->keterangan }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                -
                            </td> --}}
                            <td class="px-6 py-4">
                                <a href="{{route('olimpiade.peserta.edit', $data->id_peserta)}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="{{route('olimpiade.peserta.delete', $data->id_peserta)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-confirm-delete="true">Hapus</a>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-2">
                <div class="flex gap-6 pb-6 mb-6 border-b">
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
                            {{-- <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas_belum as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->nama_team }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->sekolah }}
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->cabangs->cabang }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->rayons->rayon }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->telepon }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->keterangan }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                -
                            </td> --}}
                            <td class="px-6 py-4">
                                <a href="{{route('olimpiade.peserta.edit', $data->id_peserta)}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="{{route('olimpiade.peserta.delete', $data->id_peserta)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-confirm-delete="true">Hapus</a>
                            </td>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
</x-layout>