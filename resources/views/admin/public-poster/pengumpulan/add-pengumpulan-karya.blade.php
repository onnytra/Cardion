<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Pengumpulan Karya Public Poster</h1>
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

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="peraturan" class="block text-sm font-medium text-gray-600">Peraturan</label>
                        </div>
                        <textarea type="text" name="peraturan" id="peraturan"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>
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
                            <label for="mulai_submission" class="block text-sm font-medium text-gray-600">Mulai Sesi
                                Submission</label>
                        </div>
                        <input type="date" name="mulai_submission" id="mulai_submission"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="berakhir_submission" class="block text-sm font-medium text-gray-600">Berakhir
                                Sesi Submission</label>
                        </div>
                        <input type="date" name="berakhir_submission" id="berakhir_submission"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
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
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="biaya" class="block text-sm font-medium text-gray-600">Biaya</label>
                        </div>
                        <input type="text" name="biaya" id="biaya"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex">
                        <button class="btn">Tambah Sesi</button>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/public-poster/pengumpulan-karya" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>