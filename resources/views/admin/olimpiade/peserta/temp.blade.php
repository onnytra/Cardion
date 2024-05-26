<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                            aria-current="page">
                            <i class="fad fa-user text-xs mr-2"></i>
                            Profil
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-city text-xs mr-2"></i>
                            Cabang/Rayon
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-3"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-users text-xs mr-2"></i>
                            Anggota
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-4"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-lock text-xs mr-2"></i>
                            Ubah Password
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="tab-1" action="{{route('olimpiade.peserta.store')}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex justify-center">
                        <h2 class="font-medium ">Data Peserta</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama
                                Lengkap*</label>
                        </div>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp" class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel*</label>
                        </div>
                        <input type="number" name="telepon" id="telepon" value="{{ old('telepon') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="email" class="block text-sm text-right font-medium text-gray-600">Email*</label>
                        </div>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="sekolah"
                                class="block text-sm text-right font-medium text-gray-600">Sekolah*</label>
                        </div>
                        <input type="text" name="sekolah" id="sekolah" value="{{ old('sekolah') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="alamatsekolah" class="block text-sm text-right font-medium text-gray-600">Alamat
                                Sekolah*</label>
                        </div>
                        <textarea type="text" name="alamat_sekolah" id="alamat_sekolah"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md"
                            required>{{old('alamat_sekolah')}}</textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nomorsertifikat"
                                class="block text-sm text-right font-medium text-gray-600">Nomor Sertifikat</label>
                        </div>
                        <textarea type="text" name="sertifikat" id="sertifikat"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">{{old('sertifikat')}}</textarea>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>

        <form id="tab-2" class="hidden" action="{{route('olimpiade.peserta.store')}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex justify-center">
                        <h2 class="font-medium ">Data Cabang/Rayon</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="cabang"
                                class="block text-sm text-right font-medium text-gray-600">Cabang*</label>
                        </div>
                        <select id="cabang" name="id_cabang"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            @foreach ($cabangs as $item)
                            <option class="font-medium text-sm" value="{{$item->id_cabang}}" {{old('id_cabang') == $item->id_cabang ? 'selected' : ''}}
                                >{{$item->cabang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="rayon" class="block text-sm text-right font-medium text-gray-600">Rayon*</label>
                        </div>
                        <select id="rayon" name="id_rayon"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>

        <form id="tab-3" class="hidden" action="{{route('olimpiade.peserta.store')}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex justify-center">
                        <h2 class="font-medium ">Data Anggota</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_tim" class="block text-sm text-right font-medium text-gray-600">Nama
                                Team*</label>
                        </div>
                        <input type="text" name="nama_team" id="nama_team" value="{{ old('nama_team') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    {{-- <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_ketua" class="block text-sm text-right font-medium text-gray-600">Nama
                                Ketua*</label>
                        </div>
                        <input type="text" name="nama_ketua" id="nama_ketua"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div> --}}
                    {{-- <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp_ketua" class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel Ketua*</label>
                        </div>
                        <input type="number" name="notelp_ketua" id="notelp_ketua"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div> --}}
                    {{-- <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="email_ketua" class="block text-sm text-right font-medium text-gray-600">Email
                                Ketua*</label>
                        </div>
                        <input type="email" name="email_ketua" id="email_ketua"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div> --}}
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_anggota_1" class="block text-sm text-right font-medium text-gray-600">Nama
                                Anggota 1</label>
                        </div>
                        <input type="text" name="anggota_pertama" id="nama_anggota_1" value="{{ old('anggota_pertama') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp_anggota_1"
                                class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel Anggota 1</label>
                        </div>
                        <input type="number" name="telepon_anggota_pertama" id="notelp_anggota_1" value="{{ old('telepon_anggota_pertama') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_anggota_1" class="block text-sm text-right font-medium text-gray-600">Nama
                                Anggota 2</label>
                        </div>
                        <input type="text" name="anggota_kedua" id="nama_anggota_2" value="{{ old('anggota_kedua') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp_anggota_2"
                                class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel Anggota 2</label>
                        </div>
                        <input type="number" name="telepon_anggota_kedua" id="notelp_anggota_2" value="{{ old('telepon_anggota_kedua') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>

        <form id="tab-4" class="hidden" action="{{route('olimpiade.peserta.store')}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex justify-center">
                        <h2 class="font-medium">Ubah Password</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="password" class="block text-sm text-right font-medium text-gray-600">Password
                                Baru*</label>
                        </div>
                        <input type="password" name="password" id="password"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="verify_password"
                                class="block text-sm text-right font-medium text-gray-600">Ulangi Password*</label>
                        </div>
                        <input type="password" name="verify_password" id="verify_password"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout>












<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                            aria-current="page">
                            <i class="fad fa-user text-xs mr-2"></i>
                            Profil
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-city text-xs mr-2"></i>
                            Cabang/Rayon
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-3"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-users text-xs mr-2"></i>
                            Anggota
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-4"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-lock text-xs mr-2"></i>
                            Ubah Password
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="main-form" action="{{route('olimpiade.peserta.store')}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <!-- Profil -->
                    <div id="tab-1" class="form-tab">
                        <div class="flex justify-center">
                            <h2 class="font-medium ">Data Peserta</h2>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama Lengkap*</label>
                            </div>
                            <input type="text" name="nama" id="nama" value="{{$pesertas->nama}}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="notelp" class="block text-sm text-right font-medium text-gray-600">Nomor
                                    Telepon/Ponsel*</label>
                            </div>
                            <input type="number" name="telepon" id="telepon" value="{{$pesertas->telepon}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="email" class="block text-sm text-right font-medium text-gray-600">Email*</label>
                            </div>
                            <input type="email" name="email" id="email" value="{{$pesertas->email}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="sekolah"
                                    class="block text-sm text-right font-medium text-gray-600">Sekolah*</label>
                            </div>
                            <input type="text" name="sekolah" id="sekolah" value="{{$pesertas->sekolah}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="alamatsekolah" class="block text-sm text-right font-medium text-gray-600">Alamat
                                    Sekolah*</label>
                            </div>
                            <textarea type="text" name="alamat_sekolah" id="alamat_sekolah"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md"
                                required>{{$pesertas->alamat_sekolah}}</textarea>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="nomorsertifikat"
                                    class="block text-sm text-right font-medium text-gray-600">Nomor Sertifikat</label>
                            </div>
                            <textarea type="text" name="sertifikat" id="sertifikat"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">{{$pesertas->sertifikat}}</textarea>
                        </div>
                    </div>
                    <!-- Cabang/Rayon -->
                    <div id="tab-2" class="hidden form-tab">
                        <div class="flex justify-center">
                            <h2 class="font-medium ">Data Cabang/Rayon</h2>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="cabang"
                                    class="block text-sm text-right font-medium text-gray-600">Cabang*</label>
                            </div>
                            <select id="cabang" name="id_cabang"
                                class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                                required>
                                <option class="font-medium text-sm" value="#">...</option>
                                @foreach ($cabangs as $item)
                                <option class="font-medium text-sm" value="{{$item->id_cabang}}"{{$item->id_cabang == $pesertas->id_cabang ? 'selected' : ''}}
                                    >{{$item->cabang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="rayon" class="block text-sm text-right font-medium text-gray-600">Rayon*</label>
                            </div>
                            <select id="rayon" name="id_rayon"
                                class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                                required>
                                <option class="font-medium text-sm" value="#">...</option>
                                @foreach ($rayons as $item)
                                <option class="font-medium text-sm" value="{{$item->id_rayon}}"{{$item->id_rayon == $pesertas->id_rayon ? 'selected' : ''}}>{{$item->rayon}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Anggota -->
                    <div id="tab-3" class="hidden form-tab">
                        <div class="flex justify-center">
                            <h2 class="font-medium ">Data Anggota</h2>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="nama_tim" class="block text-sm text-right font-medium text-gray-600">Nama
                                    Team*</label>
                            </div>
                            <input type="text" name="nama_team" id="nama_team" value="{{$pesertas->nama_team}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        {{-- <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="nama_ketua" class="block text-sm text-right font-medium text-gray-600">Nama
                                    Ketua*</label>
                            </div>
                            <input type="text" name="nama_ketua" id="nama_ketua"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div> --}}
                        {{-- <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="notelp_ketua" class="block text-sm text-right font-medium text-gray-600">Nomor
                                    Telepon/Ponsel Ketua*</label>
                            </div>
                            <input type="number" name="notelp_ketua" id="notelp_ketua"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div> --}}
                        {{-- <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="email_ketua" class="block text-sm text-right font-medium text-gray-600">Email
                                    Ketua*</label>
                            </div>
                            <input type="email" name="email_ketua" id="email_ketua"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div> --}}
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="nama_anggota_1" class="block text-sm text-right font-medium text-gray-600">Nama
                                    Anggota 1</label>
                            </div>
                            <input type="text" name="anggota_pertama" id="nama_anggota_1" value="{{$pesertas->anggota_pertama}}
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="notelp_anggota_1"
                                    class="block text-sm text-right font-medium text-gray-600">Nomor
                                    Telepon/Ponsel Anggota 1</label>
                            </div>
                            <input type="number" name="telepon_anggota_pertama" id="notelp_anggota_1" value="{{$pesertas->telepon_anggota_pertama}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="nama_anggota_1" class="block text-sm text-right font-medium text-gray-600">Nama
                                    Anggota 2</label>
                            </div>
                            <input type="text" name="anggota_kedua" id="nama_anggota_2" value="{{$pesertas->anggota_kedua}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="notelp_anggota_2"
                                    class="block text-sm text-right font-medium text-gray-600">Nomor
                                    Telepon/Ponsel Anggota 2</label>
                            </div>
                            <input type="number" name="telepon_anggota_kedua" id="notelp_anggota_2" value="{{$pesertas->telepon_anggota_kedua}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                        </div>
                    </div>
                    <!-- Ubah Password -->
                    <div id="tab-4" class="hidden form-tab">
                        <div class="flex justify-center">
                            <h2 class="font-medium">Ubah Password</h2>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="password" class="block text-sm text-right font-medium text-gray-600">Password
                                    Baru*</label>
                            </div>
                            <input type="password" name="password" id="password" value="{{$pesertas->password}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40">
                                <label for="verify_password"
                                    class="block text-sm text-right font-medium text-gray-600">Ulangi Password*</label>
                            </div>
                            <input type="password" name="verify_password" id="verify_password" value="{{$pesertas->password}}"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout>
