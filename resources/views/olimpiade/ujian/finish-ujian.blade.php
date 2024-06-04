<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header text-center">
            <h1 class="h4">Ujian Selesai</h1>
            <h2 class="h6 text-gray-600 font-light">
                Terima kasih telah mengikuti ujian ini. Silahkan kembali ke halaman utama.
            </h2>
            <button onclick="closeWin()" class="mt-5">
                <a class="btn-indigo">
                    <i class="fad fa-chevron-left mr-2 leading-none"></i>
                    Kembali
                </a>
            </button>
        </div>
    </div>
    <script>
        function closeWin() {
            window.close();
            window.opener.location.reload();
        }
    </script>
</x-layout-u>