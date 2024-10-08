<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Sesi Ujian ({{$ujians->judul}})</h1>
            <div class="flex gap-2">
                <button>
                    <a href="{{route('olimpiade.sesi.create', $ujians->id_ujian)}}" class="btn-bs-dark">
                        <i class="fad fa-plus mr-2 leading-none"></i>
                        Sesi Baru</a>
                </button>
                <button>
                    <a href="{{route('olimpiade.ujian.index')}}" class="btn-gray">
                        <i class="fad fa-chevron-left mr-2 leading-none"></i>
                        Kembali ke daftar ujian</a>
                </button>
            </div>
        </div>

        <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10">
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
                            Mulai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Selesai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sesis as $data)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Gelombang {{$loop->iteration}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->mulai ?? '--'}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $data->berakhir ?? '--'}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('olimpiade.sesi.edit', $data->id_sesi)}}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="{{route('olimpiade.sesi.delete', $data->id_sesi)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline" data-confirm-delete="true">Hapus</a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-layout>