<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mb-5">
        <div class="card-body">
            <h1 class="h5">History Ujian</h1>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-1">
        @if ($assign_test == null)
        <div class="card">
            <div class="card-body">
                <h1 class="h4">Belum Ada History Ujian</h1>
                <h2 class="h6 text-gray-600 font-light">
                    Silahkan ikuti ujian olimpiade yang tersedia
                </h2>
            </div>
        </div>
        @else
        @foreach ($assign_test as $item)
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
                <button>
                    <a href="{{route('olimpiade.hasil_ujian', $item->id_ujian)}}" class="btn">
                        <i class="fad fa-poll leading-none"></i>
                        Lihat Hasil Ujian</a>
                </button>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</x-layout-u>