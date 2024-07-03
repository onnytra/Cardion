<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    @if ($closest_pengumpulan_karya != null)
    @foreach ($closest_pengumpulan_karya as $pengumpulan_karya)
    <div class="card mb-5">
        <div class="card-header">
            <h1 class="h6">{{$pengumpulan_karya->pengumpulan_karya->judul}}</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <p class="text-gray-900 hover:text-blue-500">{{$pengumpulan_karya->pengumpulan_karya->mulai}} - {{$pengumpulan_karya->pengumpulan_karya->berakhir}}</p>
            </div>
        </div>

        <div class="card-footer flex justify-end">
            @if ($pengumpulan_karya->pengumpulan_karya->mulai > $today)
            <h3>
                <i class="fad fa-lock mr-2 leading-none"></i>
                Pengumpulan Karya Belum Dibuka
            </h3>
            @elseif($pengumpulan_karya->pengumpulan_karya->berakhir < $today)
            <h3>
                <i class="fad fa-lock mr-2 leading-none"></i>
                Pengumpulan Karya Telah Ditutup
            </h3>
            @elseif($pengumpulan_karya->status_test == 'sudah')
            <button>
                <a href="{{route('poster.view-karya', $pengumpulan_karya->pengumpulan_karya->id_pengumpulan)}}" class="btn-bs-dark">
                    <i class="fad fa-eye
                    mr-2 leading-none"></i>Lihat Hasil Karya</a>
            </button>
            @else
            <button>
                <a href="{{route('poster.add-karya', $pengumpulan_karya->pengumpulan_karya->id_pengumpulan)}}" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Tambah Hasil Karya</a>
            </button>
            @endif
        </div>
    </div>
    @endforeach
    @else
    <div class="card">
        <div class="card-header">
            <h1 class="h6">Belum ada pengumpulan karya</h1>
        </div>
    </div>
    @endif
</x-layout-u>