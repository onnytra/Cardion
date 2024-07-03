<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    @foreach ($pengumuman_broadcast as $broadcast)
    <div class="card">
        <div class="card-header">
            <h1 class="h6">{{ $broadcast->judul }}</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <p class="text-gray-900">
                {!! $broadcast->deskripsi !!}
            </p>
        </div>

        {{-- <div class="card-footer">
            <button>
                <a href="/olympiad/pengumuman/detail" class="btn">
                    Baca Selengkapnya</a>
            </button>
        </div> --}}
    </div>
    @endforeach
    @foreach ($pengumuman_gelombang as $pengumuman)
    <div class="card">
        <div class="card-header">
            <h1 class="h6">{{ $pengumuman->judul }}</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <p class="text-gray-900">
                {!! $pengumuman->deskripsi !!}
            </p>
        </div>

        {{-- <div class="card-footer">
            <button>
                <a href="/olympiad/pengumuman/detail" class="btn">
                    Baca Selengkapnya</a>
            </button>
        </div> --}}
    </div>
    @endforeach
</x-layout-u>