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

        <form id="tab-1">
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
                        <input type="text" name="nama" id="nama"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp" class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel*</label>
                        </div>
                        <input type="number" name="notelp" id="notelp"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="email" class="block text-sm text-right font-medium text-gray-600">Email*</label>
                        </div>
                        <input type="email" name="email" id="email"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="sekolah"
                                class="block text-sm text-right font-medium text-gray-600">Sekolah*</label>
                        </div>
                        <input type="text" name="sekolah" id="sekolah"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="alamatsekolah" class="block text-sm text-right font-medium text-gray-600">Alamat
                                Sekolah*</label>
                        </div>
                        <textarea type="text" name="alamatsekolah" id="alamatsekolah"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md"
                            required></textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nomorsertifikat"
                                class="block text-sm text-right font-medium text-gray-600">Nomor Sertifikat</label>
                        </div>
                        <textarea type="text" name="nomorsertifikat" id="nomorsertifikat"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/public-poster/peserta" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>

        <form id="tab-2" class="hidden">
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
                        <select id="cabang" name="cabang"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm"></option>
                            <option class="font-medium text-sm">Online</option>
                            <option class="font-medium text-sm">Offline</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="rayon" class="block text-sm text-right font-medium text-gray-600">Rayon*</label>
                        </div>
                        <select id="rayon" name="rayon"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm">...</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/public-poster/peserta" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>

        <form id="tab-3" class="hidden">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex justify-center">
                        <h2 class="font-medium ">Data Anggota</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_tim" class="block text-sm text-right font-medium text-gray-600">Nama
                                Tim*</label>
                        </div>
                        <input type="text" name="nama_tim" id="nama_tim"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_ketua" class="block text-sm text-right font-medium text-gray-600">Nama
                                Ketua*</label>
                        </div>
                        <input type="text" name="nama_ketua" id="nama_ketua"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp_ketua" class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel Ketua*</label>
                        </div>
                        <input type="number" name="notelp_ketua" id="notelp_ketua"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="email_ketua" class="block text-sm text-right font-medium text-gray-600">Email
                                Ketua*</label>
                        </div>
                        <input type="email" name="email_ketua" id="email_ketua"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_anggota_1" class="block text-sm text-right font-medium text-gray-600">Nama
                                Anggota 1</label>
                        </div>
                        <input type="text" name="nama_anggota_1" id="nama_anggota_1"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp_anggota_1"
                                class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel Anggota 1</label>
                        </div>
                        <input type="number" name="notelp_anggota_1" id="notelp_anggota_1"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama_anggota_1" class="block text-sm text-right font-medium text-gray-600">Nama
                                Anggota 2</label>
                        </div>
                        <input type="text" name="nama_anggota_2" id="nama_anggota_2"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="notelp_anggota_2"
                                class="block text-sm text-right font-medium text-gray-600">Nomor
                                Telepon/Ponsel Anggota 2</label>
                        </div>
                        <input type="number" name="notelp_anggota_2" id="notelp_anggota_2"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/public-poster/peserta" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>

        <form id="tab-4" class="hidden">
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

            <div class="card-footer">
                <button>
                    <a href="/admin/public-poster/peserta" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>
</x-layout>