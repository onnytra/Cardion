<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header">
            <h1 class="h6">Kartu Peserta</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <div class="flex items-center gap-5">
                <img src="../../../img/user.svg" alt="user" class="w-20 h-20">
                <div>
                    <p class="text-gray-900">
                        Nomor Peserta : {{$peserta->nomor}}
                    </p>
                    <p class="mt-1 text-gray-900">
                        Email Pendaftar : {{$peserta->email}}
                    </p>
                    <p class="mt-1 text-gray-900">
                        Cabang/Rayon : {{$peserta->cabangs->cabang}}/{{$peserta->rayons->rayon}}
                    </p>
                </div>
            </div>
            <hr class="my-5">
            <table class="w-full text-sm text-left rtl:text-right">
                <tr>
                    <td class="px-6 py-3">Nama Tim</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->nama_team}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Asal Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->sekolah}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Alamat Sekolah</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->alamat_sekolah}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Ketua</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->nama}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Email Ketua</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->email}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nomor Telepon/Ponsel Ketua</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->telepon}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->anggota_pertama}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nomor Telepon/Ponsel Anggota 1</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->telepon_anggota_pertama}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nama Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->anggota_kedua}}</td>
                </tr>
                <tr>
                    <td class="px-6 py-3">Nomor Telepon/Ponsel Anggota 2</td>
                    <td class="px-6 py-3 text-gray-600">{{$peserta->telepon_anggota_kedua}}</td>
                </tr>
            </table>
            <hr class="my-5">
            <p class="text-gray-600">Harap diperhatikan kepada seluruh peserta untuk mencetak dan membawa kartu peserta
                saat babak penyisihan berlangsung</p>
        </div>

        <div class="card-footer">
            <button>
                <a href="{{route('user.cetak_kartu_process')}}" class="btn-indigo">
                    <i class="fad fa-download mr-2 leading-none"></i>
                    Download Kartu Peserta</a>
            </button>
        </div>
    </div>
</x-layout-u>