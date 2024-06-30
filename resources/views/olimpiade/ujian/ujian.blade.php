<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mb-5">
        <div class="card-body">
            <button>
                <a href="{{route('olimpiade.history_ujian')}}" class="btn-gray">
                    History Ujian</a>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-1">
        @if ($sesis == null)
        <div class="card">
            <div class="card-body">
                <h1 class="h6">Tidak ada ujian yang tersedia</h1>
            </div>
        </div>
        @else
        @foreach ($sesis as $item)
        <div class="card ml-1 mr-1">
            <div class="card-header  flex flex-row justify-between items-center">
                <h1 class="h6">{{$item->ujian->judul}}</h1>
                    @if ($item->mulai > $today )
                    <span class="bg-green-500 text-white text-center text-sm px-2 py-1 rounded">
                        Belum Dimulai
                    </span>
                    @elseif ($item->mulai < $today && $item->berakhir > $today)
                    <span class="bg-blue-500 text-white text-center text-sm px-2 py-1 rounded">
                        Sedang Berlangsung
                    </span>
                    @elseif ($item->berakhir < $today)
                    <span class="bg-red-500 text-white text-center text-sm px-2 py-1 rounded">
                        Sudah Berakhir
                    </span>
                    @endif
            </div>
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="flex items
                -center gap-5">
                    <i class="fad fa-calendar mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$item->mulai}} - {{$item->berakhir}}</p>
                </div>
                <div class="flex items
                -center gap-5">
                    <i class="fad fa-clock mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$item->ujian->durasi}} Menit</p>
                </div>
                <div class="flex items
                -center gap-5">
                    <i class="fad fa-file-alt mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$item->ujian->total_soal}} Soal</p>
                </div>
                <div>
                    <h2 class="h6 mt-5">Deskripsi :</h2>
                        <div class="text-gray-900">
                            {!!$item->ujian->deskripsi!!}
                        </div>
                </div>
            </div>
            <div class="card-footer flex justify-end">
                {{-- @if ($item->mulai < $today && $item->berakhir > $today) --}}
                @if ($today->between($item->mulai, $item->berakhir))
                <button type="button" class="btn-indigo" onclick="confirmIkutUjian('{{ route('olimpiade.detail-ujian', ['ujians' => $item->ujian->id_ujian, 'sesis' => $item->id_sesi]) }}')">
                    <i class="fad fa-clock mr-2 leading-none"></i>
                    Ikuti Ujian
                </button>
                @elseif ($item->berakhir < $today && $item->id_sesi_peserta == $item->id_sesi)
                <button type="button" class="btn-danger" onclick="confirmKumpulkanUjian('{{ route('olimpiade.kumpulkan_ujian', ['ujians' => $item->ujian->id_ujian]) }}')">
                    <i class="fad fa-clock mr-2 leading-none"></i>
                    Kumpulkan Ujian
                </button>
                @endif
            </div>
            {{-- <div class="card-footer flex justify-end">
                @if ($item->mulai < $today && $item->berakhir > $today)
                <button>
                    <a href="{{route('olimpiade.detail-ujian', ['ujians'=>$item->ujian->id_ujian, 'sesis'=>$item->id_sesi])}}" class="btn-indigo" onclick="confirmIkutUjian('')">
                        <i class="fad fa-clock mr-2 leading-none"></i>
                        Ikuti Ujian</a>
                </button>
                @endif
            </div> --}}
        </div>
        @endforeach
        @endif
    </div>
</x-layout-u>