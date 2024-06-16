<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mb-5">
        <div class="card-body">
            <button>
                <a href="{{route('olimpiade.ujian')}}" class="btn-gray">
                    History Ujian</a>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-1">
        <div class="card">
            <div class="card-header  flex flex-row justify-between items-center">
                <h1 class="h6">{{$ujian->judul}}</h1>
                <span class="bg-green-500 text-white text-center text-sm px-2 py-1 rounded">Sedang Berlangsung</span>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="flex items-center gap-5">
                    <i class="fad fa-calendar mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$sesi->mulai}}</p>
                </div>
                <div class="flex items-center gap-5">
                    <i class="fad fa-clock mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$ujian->durasi}} Menit</p>
                </div>
                <div class="flex items-center gap-5">
                    <i class="fad fa-file-alt mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$ujian->total_soal}} Soal</p>
                </div>
                <div>
                    <h2 class="h6 mt-5">Deskripsi :</h2>
                        <div class="text-gray-900">
                            {!!$ujian->deskripsi!!}
                        </div>
                </div>
                
            </div>
            <div class="card-footer flex justify-end">
                <button>
                    <a href="{{route('olimpiade.detail-ujian', $ujian->id_ujian)}}" class="btn-indigo">
                        <i class="fad fa-clock mr-2 leading-none"></i>
                        Ikuti Ujian</a>
                </button>
            </div>
        </div>
    </div>
</x-layout-u>