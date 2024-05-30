<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Gelombang Pembayaran</h1>
        </div>

        <form action="{{route('olimpiade.gelombang_pembayaran.update', $gelombang_pembayarans->id_gelombang)}}" method="POST">
        @csrf
        @method('PUT')
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama
                                Gelombang*</label>
                        </div>
                        <input type="text" name="nama" id="nama" value="{{ $gelombang_pembayarans->gelombang }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="toggle" class="block text-sm text-right font-medium text-gray-600">Aktif</label>
                        </div>
                        <div class="lg:w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="status_gelombang" id="toggle" value="1" {{ $gelombang_pembayarans->status_gelombang_pembayaran == 1 ? 'checked' : '' }}
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
                        <input type="number" name="harga" id="harga" value="{{ $gelombang_pembayarans->harga }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl_mulai" class="block text-sm text-right font-medium text-gray-600">Tanggal
                                Mulai*</label>
                        </div>
                        <input type="date" name="tgl_mulai" id="tgl_mulai"  value="{{ $gelombang_pembayarans->mulai }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl_selesai" class="block text-sm text-right font-medium text-gray-600">Tanggal
                                Selesai*</label>
                        </div>
                        <input type="date" name="tgl_selesai" id="tgl_selesai" value="{{ $gelombang_pembayarans->selesai }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmEdit(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout>