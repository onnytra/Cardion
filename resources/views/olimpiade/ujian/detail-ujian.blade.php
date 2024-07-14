<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="grid grid-cols-3 gap-5 lg:grid-cols-1">
        <div class="card col-span-2">
            <div class="card-header">
                <h1 class="h6">Keterangan Ujian</h1>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div>
                    <h2 class="h6">Judul :</h2>
                    <p class="text-gray-900 hover:text-blue-500">{{$ujians->judul}}</p>
                </div>
                <div>
                    <h2 class="h6 mt-5">Deskripsi :</h2>
                        <div class="text-gray-900">
                            {!!$ujians->deskripsi!!}
                        </div>
                </div>
            </div>
        </div>

        <div class="card self-start lg:order-last">
            <div class="card-header flex flex-row justify-between items-center">
                <h1 class="h6">Data Ujian</h1>
                <span class="bg-blue-500 text-white text-center text-sm px-2 py-1 rounded">Sedang Berlangsung</span>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="flex items-center gap-5">
                    <i class="fad fa-calendar mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$sesi->mulai}} - {{$sesi->berakhir}} ({{Auth::guard('peserta')->user()->zona_waktu}})</p>
                </div>
                <div class="flex items-center gap-5">
                    <i class="fad fa-clock mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$ujians->durasi}} Menit</p>
                </div>
                <div class="flex items-center gap-5">
                    <i class="fad fa-file-alt mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">{{$ujians->total_soal}} Soal</p>
                </div>
            </div>

            <div class="card-footer flex justify-end">
                <button>
                    <a href="{{route('olimpiade.start-ujian', ['ujians'=>$ujians->id_ujian, 'sesis'=>$sesi->id_sesi, 'soals'=>1])}}" class="btn">
                        <i class="fad fa-clock mr-2 leading-none"></i>
                        Start Ujian
                    </a>
                </button>
            </div>
        </div>

        <div class="card col-span-2">
            <div class="card-header">
                <h1 class="h6">Peraturan Ujian</h1>
            </div>
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="text-gray-900">
                    {!!$ujians->peraturan!!}
                </div>
            </div>
        </div>
    </div>
</x-layout-u>