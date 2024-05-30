<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header">
            <h1 class="h6">Pengumpulan Karya Public Poster</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <p class="text-gray-900 hover:text-blue-500">22/05/2024 00:00 - 30/11/2024 14:30</p>
            </div>
        </div>

        <div class="card-footer flex justify-end">
            <button>
                <a href="/public-poster/pengumpulan-karya/add" class="btn-bs-dark hidden">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Tambah Hasil Karya</a>
            </button>
            <button>
                <a href="/public-poster/pengumpulan-karya/edit" class="btn-indigo">
                    <i class="fad fa-edit mr-2 leading-none"></i>
                    Edit Hasil Karya</a>
            </button>
        </div>
    </div>
</x-layout-u>