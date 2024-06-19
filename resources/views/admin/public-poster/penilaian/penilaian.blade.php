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
                            Sudah Dinilai
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-times text-xs mr-2"></i>
                            Belum Dinilai
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10" id="tab-1">
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
                                Tgl. Upload
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Sesi
                            </th> --}}
                            {{-- <th scope="col" class="px-6 py-3">
                                Link
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karya_sudah as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->nama_team }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $data->sesi }}
                            </td> --}}
                            {{-- <td class="px-6 py-4">
                                <button>
                                    <a href="{{asset('storage/'.$data->bukti)}}" class="btn-gray"><i
                                            class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td> --}}
                            <td class="px-6 py-4">
                                <button>
                                    <a href="{{asset('storage/karya/'.$data->karya)}}" class="btn-gray"
                                        target="_blank"><i class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">{{ $data->nilai }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a id="modal-box{{ $data->id_karya }}" onclick="showModal({{ $data->id_karya }})"
                                    class="font-medium text-blue-600 dark:text-blue-500 cursor-pointer hover:underline">Edit</a>
                                <div id="modal{{ $data->id_karya }}"
                                    class="fixed z-10 inset-0 top-20 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items
                                    -end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity"
                                            aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true">&#8203;</span>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <form action="{{ route('poster.penilaian.update_nilai', $data->id_karya) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <div class="bg-white px-4 pt-2">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <div class="card-header">
                                                                <h1 class="h6">Penilaian Hasil Karya</h1>
                                                            </div>
                                                            <div
                                                                class="card-body relative overflow-x-auto sm:rounded-lg">
                                                                <table class="w-full text-sm text-left rtl:text-right">
                                                                    <tr>
                                                                        <td class="px-6 py-3">Nomor Peserta</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            {{ $data->peserta->nomor }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Nama Peserta</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <p class="text-gray-900">
                                                                                {{ $data->peserta->nama }}
                                                                            </p>
                                                                            <p class="text-xs">
                                                                                {{ $data->peserta->nama_team }}
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Tanggal Upload</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            {{ $data->tanggal }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Event</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            {{ $data->pengumpulan_karya->judul }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Karya</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <button>
                                                                                <a href="{{asset('storage/karya/'.$data->karya)}}"
                                                                                    class="btn-gray" target="_blank"><i
                                                                                        class="fad fa-download text-xs mr-2"></i>Download
                                                                                    Karya</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Surat Originalitas</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <button>
                                                                                <a href="{{asset('storage/karya/'.$data->surat_originalitas)}}"
                                                                                    class="btn-gray" target="_blank"><i
                                                                                        class="fad fa-download text-xs mr-2"></i>Download
                                                                                    Surat</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Essay Karya</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <button>
                                                                                <a href="{{asset('storage/karya/'.$data->essay_karya)}}"
                                                                                    class="btn-gray" target="_blank"><i
                                                                                        class="fad fa-download text-xs mr-2"></i>Download
                                                                                    Essay</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">
                                                                            <label for="nilai"
                                                                                class="block text-sm">Nilai</label>
                                                                        </td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <input type="number" name="nilai" id="nilai"
                                                                                value="{{ $data->nilai }}"
                                                                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">
                                                                            <label for="keterangan"
                                                                                class="block text-sm">Keterangan
                                                                                Nilai</label>
                                                                        </td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <textarea type="text" name="keterangan"
                                                                                id="keterangan"
                                                                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">{{ $data->keterangan_nilai }}</textarea>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 flex flex-row-reverse gap-2">
                                                    <button type="button" class="btn-bs-dark" id="bg-modal"
                                                        onclick="hideModal({{ $data->id_karya }})">
                                                        batal
                                                    </button>
                                                    <button type="submit" class="btn-indigo"
                                                        onclick="confirmEdit(event)">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('poster.penilaian.delete', $data->id_karya)}}"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                    data-confirm-delete="true">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-2">
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
                                Tgl. Upload
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Sesi
                            </th> --}}
                            {{-- <th scope="col" class="px-6 py-3">
                                Link
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                File
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nilai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karya_belum as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->nama_team }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{ $data->sesi }}
                            </td> --}}
                            {{-- <td class="px-6 py-4">
                                <button>
                                    <a href="{{asset('storage/'.$data->bukti)}}" class="btn-gray"><i
                                            class="fad fa-link text-xs mr-2"></i>Link</a>
                                </button>
                            </td> --}}
                            <td class="px-6 py-4">
                                <button>
                                    <a href="{{asset('storage/karya/'.$data->karya)}}" class="btn-gray"
                                        target="_blank"><i class="fad fa-download text-xs mr-2"></i>Download</a>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">{{ $data->nilai }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a id="modal-box{{ $data->id_karya }}" onclick="showModal({{ $data->id_karya }})"
                                    class="font-medium text-blue-600 dark:text-blue-500 cursor-pointer hover:underline">Edit</a>
                                <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items
                                    -end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity"
                                            aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true">&#8203;</span>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <form action="{{ route('poster.penilaian.update_nilai', $data->id_karya) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <div class="bg-white px-4 pt-2">
                                                    <div class="sm:flex sm:items-start">
                                                        <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                            <div class="card-header">
                                                                <h1 class="h6">Penilaian Hasil Karya</h1>
                                                            </div>
                                                            <div
                                                                class="card-body relative overflow-x-auto sm:rounded-lg">
                                                                <table class="w-full text-sm text-left rtl:text-right">
                                                                    <tr>
                                                                        <td class="px-6 py-3">Nomor Peserta</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            {{ $data->peserta->nomor }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Nama Peserta</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <p class="text-gray-900">
                                                                                {{ $data->peserta->nama }}
                                                                            </p>
                                                                            <p class="text-xs">
                                                                                {{ $data->peserta->nama_team }}
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Tanggal Upload</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            {{ $data->tanggal }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Event</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            {{ $data->pengumpulan_karya->judul }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Karya</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <button>
                                                                                <a href="{{asset('storage/karya/'.$data->karya)}}"
                                                                                    class="btn-gray" target="_blank"><i
                                                                                        class="fad fa-download text-xs mr-2"></i>Download
                                                                                    Karya</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Surat Originalitas</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <button>
                                                                                <a href="{{asset('storage/karya/'.$data->surat_originalitas)}}"
                                                                                    class="btn-gray" target="_blank"><i
                                                                                        class="fad fa-download text-xs mr-2"></i>Download
                                                                                    Surat</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">Essay Karya</td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <button>
                                                                                <a href="{{asset('storage/karya/'.$data->essay_karya)}}"
                                                                                    class="btn-gray" target="_blank"><i
                                                                                        class="fad fa-download text-xs mr-2"></i>Download
                                                                                    Essay</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">
                                                                            <label for="nilai"
                                                                                class="block text-sm">Nilai</label>
                                                                        </td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <input type="number" name="nilai" id="nilai"
                                                                                value="{{ $data->nilai }}"
                                                                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="px-6 py-3">
                                                                            <label for="keterangan"
                                                                                class="block text-sm">Keterangan
                                                                                Nilai</label>
                                                                        </td>
                                                                        <td class="px-6 py-3 text-gray-600">
                                                                            <textarea type="text" name="keterangan"
                                                                                id="keterangan"
                                                                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">{{ $data->keterangan_nilai }}</textarea>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 flex flex-row-reverse gap-2">
                                                    <button type="button" class="btn-bs-dark" id="bg-modal"
                                                        onclick="hideModal({{ $data->id_karya }})">
                                                        batal
                                                    </button>
                                                    <button type="submit" class="btn-indigo"
                                                        onclick="confirmEdit(event)">
                                                        Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('poster.penilaian.delete', $data->id_karya)}}"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline"
                                    data-confirm-delete="true">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-layout>