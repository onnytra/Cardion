<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Ujian Olimpiade</h1>
        </div>

        <form action="{{route('olimpiade.ujian.store')}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="judul" class="block text-sm font-medium text-gray-600">Judul*</label>
                        </div>
                        <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>

                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor"
                                class="block text-sm font-medium text-gray-600">Deskripsi*</label>
                        </div>
                        <textarea type="text" name="deskripsi" id="classic-editor"
                            class="flex-grow w-full shadow-sm text-sm rounded-md" required></textarea>
                    </div>

                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor2"
                                class="block text-sm font-medium text-gray-600">Pengaturan*</label>
                        </div>
                        <textarea type="text" name="pengaturan" id="classic-editor2"
                            class="flex-grow w-full shadow-sm text-sm rounded-md" required></textarea>
                    </div>

                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor3" class="block text-sm font-medium text-gray-600">Group
                                WA*</label>
                        </div>
                        <textarea type="text" name="group_wa" id="classic-editor3"
                            class="flex-grow w-full shadow-sm text-sm rounded-md" required></textarea>
                    </div>
                    <hr>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="durasi" class="block text-sm font-medium text-gray-600">Durasi (per
                                menit)*</label>
                        </div>
                        <input type="number" name="durasi" id="durasi" value="{{ old('durasi') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="total_soal" class="block text-sm font-medium text-gray-600">Total Soal*</label>
                        </div>
                        <input type="number" name="total_soal" id="total_soal" value="{{ old('total_soal') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    {{-- <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="tipe_ujian" class="block text-sm font-medium text-gray-600">Tipe
                                Ujian*</label>
                        </div>
                        <select id="tipe_ujian" name="tipe_ujian"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#" {{ old('tipe_ujian') == '#' ? 'selected' : '' }}>...</option>
                            <option class="font-medium text-sm" value="periodik" {{ old('tipe_ujian') == 'periodik' ? 'selected' : '' }}>Periodik</option>
                            <option class="font-medium text-sm" value="satu_waktu" {{ old('tipe_ujian') == 'satu_waktu' ? 'selected' : '' }}>Satu Waktu</option>
                        </select>
                    </div> --}}
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="nilai_benar" class="block text-sm font-medium text-gray-600">Nilai Benar</label>
                        </div>
                        <input type="number" name="benar" id="nilai_benar" value="{{ old('nilai_benar') }}" placeholder="0"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="nilai_salah" class="block text-sm font-medium text-gray-600">Nilai Salah</label>
                        </div>
                        <input type="number" name="salah" id="nilai_salah" value="{{ old('nilai_salah') }}" placeholder="0"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="nilai_kosong" class="block text-sm font-medium text-gray-600">Nilai
                                Kosong</label>
                        </div>
                        <input type="number" name="kosong" id="nilai_kosong" value="{{ old('nilai_kosong') }}" placeholder="0"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="toggle" class="block text-sm font-medium text-gray-600">Soal Acak</label>
                        </div>
                        <div class="w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="soal_acak" id="toggle" value="1" {{ old('soal_acak') == 1 ? 'checked' : '' }}
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
                            <option class="font-medium text-sm" value="tidak" {{ old('tampilkan_jawaban') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                            <option class="font-medium text-sm" value="ya" {{ old('tampilkan_jawaban') == 'ya' ? 'selected' : '' }}>Ya</option>
                            <option class="font-medium text-sm" value="setelah_ujian" {{ old('tampilkan_jawaban') == 'setelah_ujian' ? 'selected' : '' }}>Setelah Ujian</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="tampilkan_nilai" class="block text-sm font-medium text-gray-600">Tampilkan
                                Nilai/Poin</label>
                        </div>
                        <select id="tampilkan_nilai" name="tampilkan_nilai"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"><option class="font-medium text-sm" value="tidak" {{ old('tampilkan_nilai') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                            <option class="font-medium text-sm" value="ya" {{ old('tampilkan_nilai') == 'ya' ? 'selected' : '' }}>Ya</option>
                            <option class="font-medium text-sm" value="setelah_ujian" {{ old('tampilkan_nilai') == 'setelah_ujian' ? 'selected' : '' }}>Setelah Ujian</option>
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
                                <input type="checkbox" name="status_ujian" id="toggle" value="1" {{ old('status_ujian') == 1 ? 'checked' : '' }}
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </div>
                    </div>
                    {{-- <h1 class="font-medium">Gelombang 1</h1>
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
                    </div> --}}
                </div>
            </div>
            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout>