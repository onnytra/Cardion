<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Pengumuman Olimpiade</h1>
        </div>

        <form>
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="judul" class="block text-sm font-medium text-gray-600">Judul*</label>
                        </div>
                        <input type="text" name="judul" id="judul"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="judul_inggris" class="block text-sm font-medium text-gray-600">Judul
                                (Inggris)</label>
                        </div>
                        <input type="text" name="judul_inggris" id="judul_inggris"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="cabang" class="block text-sm font-medium text-gray-600">Cabang*</label>
                        </div>
                        <select id="cabang" name="cabang"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm"></option>
                            <option class="font-medium text-sm">Online</option>
                            <option class="font-medium text-sm">Offline</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="rayon" class="block text-sm font-medium text-gray-600">Rayon*</label>
                        </div>
                        <select id="rayon" name="rayon"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm"></option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="ujian" class="block text-sm font-medium text-gray-600">Ujian*</label>
                        </div>
                        <select id="ujian" name="ujian"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm"></option>
                            <option class="font-medium text-sm">Olimpiade Cardion Gelombang 1</option>
                            <option class="font-medium text-sm">Olimpiade Cardion Gelombang 2</option>
                            <option class="font-medium text-sm">Olimpiade Cardion Gelombang 3</option>
                        </select>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                        </div>
                        <textarea type="text" name="deskripsi" id="deskripsi"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="deskripsi_inggris" class="block text-sm font-medium text-gray-600">Deskripsi
                                (Inggris)</label>
                        </div>
                        <textarea type="text" name="deskripsi_inggris" id="deskripsi_inggris"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="toggle" class="block text-sm font-medium text-gray-600">Aktif</label>
                        </div>
                        <div class="w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="status_ujian" id="toggle"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/olimpiade/pengumuman" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>