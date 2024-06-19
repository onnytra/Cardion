<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Keterangan Ujian</h1>
            <button>
                <a href="{{route('olimpiade.monitoring_ujian.show_tests_monitoring')}}" class="btn-gray">
                    <i class="fad fa-chevron-left mr-2 leading-none"></i>
                    Kembali</a>
            </button>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Judul Ujian</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->judul}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Waktu Ujian</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->mulai}} - {{$ujian->berakhir}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Sesi Ujian</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->sesi}} Sesi</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Durasi</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->durasi}} Menit</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Peserta</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->peserta}} Peserta</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Peserta Belum Ujian</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->peserta_belum}} Peserta</td>
                </tr>
            </table>
        </div>

        <div class="card-footer">
            <button>
                <a href="{{route('olimpiade.exportexcel.ujian-peserta', $ujian->id_ujian)}}" class="btn-bs-dark"><i class="fad fa-print text-xs mr-2"></i>Export as Excel</a>
            </button>
        </div>
    </div>

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
                            Sudah Ujian
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-times text-xs mr-2"></i>
                            Belum Ujian
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
                                Nilai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu Pengumpulan
                            </th>
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
                                {{$loop->iteration}}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{$data->peserta->nama}}
                                </p>
                                <p class="text-xs">
                                    {{$data->peserta->nomor}}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{$data->peserta->sekolah}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->peserta->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->peserta->telepon}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-lg">{{$data->nilai->total_score}}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{$data->updated_at}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('olimpiade.monitoring_ujian.detail_peserta_monitoring', $data->id_assign_test)}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Reset</a>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesertas_belum as $data)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{$loop->iteration}}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{$data->peserta->nama}}
                                </p>
                                <p class="text-xs">
                                    {{$data->peserta->nomor}}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{$data->peserta->sekolah}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->peserta->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->peserta->telepon}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>