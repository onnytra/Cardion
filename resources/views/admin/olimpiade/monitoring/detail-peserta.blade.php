<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between items-center">
            <h1 class="h6">Data Peserta</h1>
            <button>
                <a href="{{ url()->previous() }}" class="btn-gray">
                    <i class="fad fa-chevron-left mr-2 leading-none"></i>
                    Kembali</a>
            </button>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Nama</td>
                    <td class="px-6 py-3 text-gray-600">DIARRA KHALIDA AYUTHA WINARDI</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Email</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Alamat Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Tim</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Ketua</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Email Ketua</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp Ketua</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">No. Telp Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">lorem ipsum</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Keterangan Ujian</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Judul Ujian</td>
                    <td class="px-6 py-3 text-gray-600">Olimpiade Cardion Gelombang 3</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Waktu Ujian</td>
                    <td class="px-6 py-3 text-gray-600">28/01/2024 13:20 - 26/04/2024 23:00</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Tipe Ujian</td>
                    <td class="px-6 py-3 text-gray-600">Periodik</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Jumlah Soal</td>
                    <td class="px-6 py-3 text-gray-600">121 Soal</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Durasi</td>
                    <td class="px-6 py-3 text-gray-600">120 Menit</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Detail Ujian</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            CAROUSEL
        </div>
    </div>
</x-layout>