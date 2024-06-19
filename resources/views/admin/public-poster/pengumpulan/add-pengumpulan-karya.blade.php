<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Pengumpulan Karya</h1>
        </div>

        <form action="{{route('poster.pengumpulan_karya.store')}}" method="POST">
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
                                class="block text-sm font-medium text-gray-600">Deskripsi</label>
                        </div>
                        <textarea type="text" name="deskripsi" id="classic-editor"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{ old('deskripsi') }}
                        </textarea>
                    </div>

                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor2"
                                class="block text-sm font-medium text-gray-600">Peraturan</label>
                        </div>
                        <textarea type="text" name="peraturan" id="classic-editor2"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{ old('peraturan') }}
                        </textarea>
                    </div>

                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor3" class="block text-sm font-medium text-gray-600">Group
                                WA</label>
                        </div>
                        <textarea type="text" name="group_wa" id="classic-editor3"
                            class="flex-grow w-full shadow-sm text-sm rounded-md">
                            {{ old('group_wa') }}
                        </textarea>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="mulai" class="block text-sm font-medium text-gray-600">Mulai*</label>
                        </div>
                        <input type="date" name="mulai" id="mulai" value="{{ old('mulai') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                            <input type="time" name="waktu_mulai" id="mulai" value="{{ old('waktu-mulai') }}"
                                class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="berakhir" class="block text-sm font-medium text-gray-600">Berakhir</label>
                        </div>
                        <input type="date" name="berakhir" id="berakhir" value="{{ old('berakhir') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md">
                            <input type="time" name="waktu_berakhir" id="mulai" value="{{ old('waktu-berakhir') }}"
                                class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>

                    <hr>

                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="toggle" class="block text-sm font-medium text-gray-600">Status Pengumpulan</label>
                        </div>
                        <div class="w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="status_pengumpulan" id="toggle" value="1" {{ old('status_pengumpulan') ? 'checked' : '' }}
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </div>
                    </div>
                <div class="card-footer flex justify">
                    <button>
                        <a href="{{route('poster.pengumpulan_karya.index')}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                    </button>
                    <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                        Simpan
                    </button>
                </div>
        </form>
    </div>

</x-layout>