<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Data Peserta</h1>
            <button>
                <a href="{{route('olimpiade.monitoring_ujian.detail_monitoring', $ujian->id_ujian)}}" class="btn-gray">
                    <i class="fad fa-chevron-left mr-2 leading-none"></i>
                    Kembali</a>
            </button>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Nama (Ketua)</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->nama}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Email (Ketua)</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->email}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp(Ketua)</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->telepon}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->sekolah}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Alamat Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->alamat_sekolah}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Tim</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->nama_team}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->anggota_pertama}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->telepon_anggota_pertama}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->anggota_kedua}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">{{$assign_tests->peserta->telepon_anggota_kedua}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Keterangan Ujian</h1>
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
                    <td class="px-6 py-3">Jumlah Sesi</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->sesi}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Soal</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->total_soal}} Soal</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Durasi</td>
                    <td class="px-6 py-3 text-gray-600">{{$ujian->durasi}} Menit</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Detail Ujian</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg" x-data="{ openPanel: null }">
            <h2 class="h6 m-4">Total Poin : {{$nilai_ujian->total_score}}</h2>
            @foreach ($detail_ujian as $data)
            <div class="border-b border-gray-300">
                <button @click="openPanel = (openPanel === {{ $data->id_soal }} ? null : {{ $data->id_soal }})"
                    class="w-full text-left px-4 py-5 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:font-bold flex justify-between items-center">
                    Pertanyaan {{ $loop->iteration }}
                    <i x-show="openPanel !== {{ $data->id_soal }}" class="fad fa-chevron-right leading-none"></i>
                    <i x-show="openPanel === {{ $data->id_soal }}" class="fad fa-chevron-down leading-none"></i>
                </button>
                <div x-show="openPanel === {{ $data->id_soal }}"
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 scale-y-0 translate-y-1/2"
                    x-transition:enter-end="opacity-100 scale-y-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100 transform"
                    x-transition:leave-start="opacity-100 scale-y-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-y-0 translate-y-1/2">
                    <div class="px-4 pb-2">
                        <p class="pb-3 text-gray-900">
                            Soal: 
                            <p>
                                {!! strip_tags($data->soal) !!}
                            </p>
                        </p>
                        <p class="pb-5 text-gray-900">
                            Jawaban Peserta: <span class="font-bold">{!! strip_tags($data->jawaban) !!}</span>
                        </p>
                        <p class="pb-5 text-gray-900">
                            Jawaban Benar: <span class="font-bold">{!! strip_tags($data->jawaban_benar->jawaban) !!}</span>
                        </p>
                        <p class="pb-2 text-gray-900">
                            Poin: 
                            @if ($data->jawaban_status == 'false')
                            <span class="font-bold">{{$data->result}}</span> <span
                                class="bg-red-500 text-white text-center text-sm px-2 py-1 rounded">Salah</span>
                            @elseif ($data->jawaban_status == 'true')
                            <span class="font-bold">{{$data->result}}</span> <span
                                class="bg-green-500 text-white text-center text-sm px-2 py-1 rounded">Benar</span>
                            @else
                            <span class="font-bold">{{$data->result}}</span> <span
                                class="bg-yellow-500 text-white text-center text-sm px-2 py-1 rounded">Tidak Dijawab</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- @for($i = 1; $i <= 120; $i++) <div class="border-b border-gray-300">
                <button @click="openPanel = (openPanel === {{ $i }} ? null : {{ $i }})"
                    class="w-full text-left px-4 py-5 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:font-bold flex justify-between items-center">
                    Pertanyaan {{ $i }}
                    <i x-show="openPanel !== {{ $i }}" class="fad fa-chevron-right leading-none"></i>
                    <i x-show="openPanel === {{ $i }}" class="fad fa-chevron-down leading-none"></i>
                </button>
                <div x-show="openPanel === {{ $i }}" x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 scale-y-0 translate-y-1/2"
                    x-transition:enter-end="opacity-100 scale-y-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100 transform"
                    x-transition:leave-start="opacity-100 scale-y-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-y-0 translate-y-1/2">
                    <div class="px-4 pb-2">
                        <p class="pb-3 text-gray-900">Soal:</p>
                        <p class="pb-3 text-gray-900">
                            Saat Andi berhenti untuk menunggu lampu merah, Ia tiba tiba mencium aroma nasi goreng
                            yang
                            tercium kuat. Secara bersamaan, ia juga mencium aroma durian yang menyengat. Mengapa
                            Andi
                            dapat membedakan kedua aroma itu dengan tepat?
                        </p>
                        <p class="pb-5 text-gray-900">
                            Jawaban Peserta: <span class="font-bold">A</span>
                        </p>
                        <p class="pb-5 text-gray-900">
                            Jawaban Benar: <span class="font-bold">A</span>
                        </p>
                        <p class="pb-2 text-gray-900">
                            Poin: <span class="font-bold">4</span> <span
                                class="bg-green-500 text-white text-center text-sm px-2 py-1 rounded">Benar</span>
                        </p>
                    </div>
                </div>
            @endfor --}}
        </div>
    </div>
</x-layout>