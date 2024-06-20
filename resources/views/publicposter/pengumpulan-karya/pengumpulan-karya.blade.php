    <x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    @if ($closest_pengumpulan_karya != null)
    <div class="card">
        <div class="card-header">
            <h1 class="h6">{{$closest_pengumpulan_karya->judul}}</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <p class="text-gray-900 hover:text-blue-500">{{$closest_pengumpulan_karya->mulai}} - {{$closest_pengumpulan_karya->berakhir}}</p>
            </div>
        </div>

        <div class="card-footer flex justify-end">
            @if($karya == null)
            <button>
                <a href="{{route('poster.add-karya', $closest_pengumpulan_karya->id_pengumpulan)}}" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Tambah Hasil Karya</a>
            </button>
            @elseif($karya != null)
            {{-- <button>
                <a href="{{route('poster.edit-karya', $closest_pengumpulan_karya->id_pengumpulan)}}" class="btn-indigo">
                    <i class="fad fa-edit mr-2 leading-none"></i>
                    Edit Hasil Karya</a>
            </button> --}}
            @endif
        </div>
    </div>
    @else
    <div class="card">
        <div class="card-header">
            <h1 class="h6">Belum ada pengumpulan karya</h1>
        </div>
    </div>
    @endif
</x-layout-u>