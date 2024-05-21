<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header text-center">
            <h1 class="h4">Sertifikat Peserta</h1>
            <h2 class="h6 text-gray-600 font-light">
                Silahkan mengunduh sertifikat di bawah ini
            </h2>
            <button class="mt-5">
                <a href="/olympiad/sertifikat/pdf" class="btn-indigo">
                    <i class="fad fa-download mr-2 leading-none"></i>
                    Download E-Sertifikat Test1
                </a>
            </button>
        </div>
    </div>
</x-layout-u>