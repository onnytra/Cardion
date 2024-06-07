<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Bukti Pembayaran</h1>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="nama" class="block text-sm font-medium text-gray-600">Nama
                                Rekening*</label>
                        </div>
                        <input type="text" name="nama" id="nama"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="bank" class="block text-sm font-medium text-gray-600">Bank*</label>
                        </div>
                        <input type="text" name="bank" id="bank"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl" class="block text-sm font-medium text-gray-600">Tanggal*</label>
                        </div>
                        <input type="date" name="tgl" id="tgl"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="gambar" class="block text-sm font-medium text-gray-600">Bukti
                                Pembayaran*</label>
                        </div>
                        <input type="file" name="gambar" id="gambar"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/public-poster/pembayaran" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>
</x-layout-u>