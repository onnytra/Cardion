<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Ujian Olimpiade</h1>
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
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="peraturan" class="block text-sm font-medium text-gray-600">Peraturan</label>
                        </div>
                        <textarea type="text" name="peraturan" id="peraturan"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="peraturan_inggris" class="block text-sm font-medium text-gray-600">Peraturan
                                (Inggris)</label>
                        </div>
                        <textarea type="text" name="peraturan_inggris" id="peraturan_inggris"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="group_wa" class="block text-sm font-medium text-gray-600">Group WA</label>
                        </div>
                        <textarea type="text" name="group_wa" id="group_wa"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="group_wa_inggris" class="block text-sm font-medium text-gray-600">Group WA
                                (Inggris)</label>
                        </div>
                        <textarea type="text" name="group_wa_inggris" id="group_wa_inggris"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="durasi" class="block text-sm font-medium text-gray-600">Durasi (per
                                menit)*</label>
                        </div>
                        <input type="number" name="durasi" id="durasi"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="total_soal" class="block text-sm font-medium text-gray-600">Total Soal*</label>
                        </div>
                        <input type="number" name="total_soal" id="total_soal"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="tipe_ujian" class="block text-sm font-medium text-gray-600">Tipe
                                Ujian*</label>
                        </div>
                        <select id="tipe_ujian" name="tipe_ujian"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm">...</option>
                            <option class="font-medium text-sm">Periodik</option>
                            <option class="font-medium text-sm">Satu Waktu</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="nilai_benar" class="block text-sm font-medium text-gray-600">Nilai Benar</label>
                        </div>
                        <input type="number" name="nilai_benar" id="nilai_benar"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" value="0">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="nilai_salah" class="block text-sm font-medium text-gray-600">Nilai Salah</label>
                        </div>
                        <input type="number" name="nilai_salah" id="nilai_salah"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" value="0">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="nilai_kosong" class="block text-sm font-medium text-gray-600">Nilai
                                Kosong</label>
                        </div>
                        <input type="number" name="nilai_kosong" id="nilai_kosong"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" value="0">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="toggle" class="block text-sm font-medium text-gray-600">Soal Acak</label>
                        </div>
                        <div class="w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="soal_acak" id="toggle"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="tampilkan_jawaban" class="block text-sm font-medium text-gray-600">Tampilkan
                                Jawaban</label>
                        </div>
                        <select id="tampilkan_jawaban" name="tampilkan_jawaban"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline">
                            <option class="font-medium text-sm">Tidak</option>
                            <option class="font-medium text-sm">Ya</option>
                            <option class="font-medium text-sm">Setelah Ujian</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="tampilkan_nilai" class="block text-sm font-medium text-gray-600">Tampilkan
                                Nilai/Poin</label>
                        </div>
                        <select id="tampilkan_nilai" name="tampilkan_nilai"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline">
                            <option class="font-medium text-sm">Tidak</option>
                            <option class="font-medium text-sm">Ya</option>
                            <option class="font-medium text-sm">Setelah Ujian</option>
                        </select>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="toggle" class="block text-sm font-medium text-gray-600">Status ujian</label>
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

                    <hr>

                    <h1 class="font-medium">Gelombang 1</h1>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="mulai" class="block text-sm font-medium text-gray-600">Mulai*</label>
                        </div>
                        <input type="date" name="mulai" id="mulai"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="berakhir" class="block text-sm font-medium text-gray-600">Berakhir</label>
                        </div>
                        <input type="date" name="berakhir" id="berakhir"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/olimpiade/ujian" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>