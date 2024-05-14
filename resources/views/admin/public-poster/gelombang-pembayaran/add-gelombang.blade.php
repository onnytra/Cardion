<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Gelombang Pembayaran</h1>
        </div>

        <form>
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama
                                Gelombang*</label>
                        </div>
                        <input type="text" name="nama" id="nama"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
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
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="harga" class="block text-sm text-right font-medium text-gray-600">Harga*</label>
                        </div>
                        <input type="number" name="harga" id="harga"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl_mulai" class="block text-sm text-right font-medium text-gray-600">Tanggal
                                Mulai*</label>
                        </div>
                        <input type="date" name="tgl_mulai" id="tgl_mulai"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl_selesai" class="block text-sm text-right font-medium text-gray-600">Tanggal
                                Selesai*</label>
                        </div>
                        <input type="date" name="tgl_selesai" id="tgl_selesai"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/public-poster/gelombang-pembayaran" type="button"
                        class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>