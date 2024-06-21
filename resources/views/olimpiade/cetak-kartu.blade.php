<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header">
            <h1 class="h6">Kartu Peserta</h1>
        </div>

        {{-- <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <div class="flex items-center gap-5">
                <img src="../../../img/user.svg" alt="user" class="w-20 h-20">
                <div>
                    <p class="text-gray-900">
                        Nomor Peserta : 02-01-007-0640
                    </p>
                    <p class="mt-1 text-gray-900">
                        Email Pendaftar : onnytra@gmail.com
                    </p>
                    <p class="mt-1 text-gray-900">
                        Cabang/Rayon : Online/Online
                    </p>
                </div>
            </div>
            <hr class="my-5">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Nama Tim</td>
                    <td class="px-6 py-3 text-gray-600">Onic</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Asal Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">SMAN 5 Malang</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Alamat Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">Klojen</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Ketua</td>
                    <td class="px-6 py-3 text-gray-600">Nanda Nabila Maharani</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Email Ketua</td>
                    <td class="px-6 py-3 text-gray-600">nanda@gmail.com</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nomor Telepon/Ponsel Ketua</td>
                    <td class="px-6 py-3 text-gray-600">08123456789</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">Nanda Nabila Maharani</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nomor Telepon/Ponsel Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">08123456789</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">Nanda Nabila Maharani</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nomor Telepon/Ponsel Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">08123456789</td>
                </tr>
            </table>
            <hr class="my-5">
            <p class="text-gray-600">Harap diperhatikan kepada seluruh peserta untuk mencetak dan membawa kartu peserta
                saat babak penyisihan berlangsung</p>
        </div> --}}

        <div class="card-footer">
            <button>
                <a href="/olympiad/cetak-kartu/pdf" class="btn-indigo">
                    <i class="fad fa-download mr-2 leading-none"></i>
                    Download Kartu Peserta</a>
            </button>
        </div>
    </div>
</x-layout-u>