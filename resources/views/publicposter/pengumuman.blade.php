<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    @for ($i = 1; $i <= 5; $i++) <div class="card">
        <div class="card-header">
            <h1 class="h6">Materi Kedokteran Dasar {{ $i }}</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <p class="text-gray-900">Materi Kedokteran Dasar {{ $i }}</p>
            <a class="block mt-2 text-blue-500 hover:underline"
                href="https://drive.google.com/file/d/1vgGjU0a94T7WCgzPOy8RkUvMvVmqS_kQ/view?usp=drive_link">https://drive.google.com/file/d/1vgGjU0a94T7WCgzPOy8RkUvMvVmqS_kQ/view?usp=drive_link</a>
        </div>

        <div class="card-footer">
            <button>
                <a href="/public-poster/pengumuman/detail" class="btn">
                    Baca Selengkapnya</a>
            </button>
        </div>
        </div>
        @endfor
</x-layout-u>