<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Rayon</h1>
        </div>

        <form>
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama
                                Rayon*</label>
                        </div>
                        <input type="text" name="nama" id="nama"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="kode" class="block text-sm text-right font-medium text-gray-600">Kode</label>
                        </div>
                        <input type="number" name="kode" id="kode"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="harga" class="block text-sm text-right font-medium text-gray-600">Harga*</label>
                        </div>
                        <input type="number" name="harga" id="harga"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="kuota" class="block text-sm text-right font-medium text-gray-600">Kuota*</label>
                        </div>
                        <input type="number" name="kuota" id="kuota"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="contact" class="block text-sm text-right font-medium text-gray-600">Contact
                                Person</label>
                        </div>
                        <input type="number" name="contact" id="contact"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="deskripsi"
                                class="block text-sm text-right font-medium text-gray-600">Deskripsi</label>
                        </div>
                        <textarea type="text" name="deskripsi" id="deskripsi"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md"></textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40 lg:w-20">
                            <label for="toggle" class="block text-sm text-right font-medium text-gray-600">Aktif</label>
                        </div>
                        <div class="lg:w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="toggle" id="toggle"
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
                    <a href="/admin/olimpiade/cabang/rayon" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>