<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Soal</h1>
        </div>

        <form>
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Soal*</label>
                        </div>
                        <textarea type="text" name="soal" id="classic-editor"
                            class="flex-grow w-full shadow-sm text-sm rounded-md" required></textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="tipe_soal" class="block text-sm font-medium text-gray-600">Tipe
                                Soal*</label>
                        </div>
                        <select id="tipe_soal" name="tipe_soal"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm"></option>
                            <option class="font-medium text-sm">Pilihan Ganda</option>
                            <option class="font-medium text-sm">Essai</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="subyek" class="block text-sm font-medium text-gray-600">Subyek</label>
                        </div>
                        <select id="subyek" name="subyek"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline">
                            <option class="font-medium text-sm"></option>
                            <option class="font-medium text-sm">Kedoteran</option>
                            <option class="font-medium text-sm">Biologi</option>
                            <option class="font-medium text-sm">Kimia</option>
                        </select>
                    </div>
                    <hr>
                    <hr>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="urutan_soal" class="block text-sm font-medium text-gray-600">Urutan Soal</label>
                        </div>
                        <input type="number" name="urutan_soal" id="urutan_soal"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" value="0">
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/olimpiade/ujian/soal" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>
</x-layout>