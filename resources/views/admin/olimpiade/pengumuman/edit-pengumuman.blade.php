<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Pengumuman</h1>
        </div>

        <form action="{{ route('olimpiade.pengumuman.update', $pengumumans->id_pengumuman) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="judul" class="block text-sm font-medium text-gray-600">Judul*</label>
                        </div>
                        <input type="text" name="judul" id="judul" value="{{$pengumumans->judul}}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tipe_pengumuman" class="block text-sm font-medium text-gray-600">Tipe Pengumuman*</label>
                        </div>
                        <select id="tipe_pengumuman" name="tipe_pengumuman"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            <option class="font-medium text-sm" value="broadcast" {{ $pengumumans->tipe_pengumuman == 'broadcast' ? 'selected' : '' }}>Broadcast</option>
                            <option class="font-medium text-sm" value="gelombang" {{ $pengumumans->tipe_pengumuman == 'gelombang' ? 'selected' : '' }}>Berdasarkan Gelombang Pembayaran</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4" id="gelombang_section" style="display: none;">
                        <div class="w-56">
                            <label for="gelombang" class="block text-sm font-medium text-gray-600">Gelombang Pembayaran*</label>
                        </div>
                        <select id="gelombang" name="gelombang"
                            class="btn-gray w-full lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            @foreach ($gelombangs as $data)
                            <option class="font-medium text-sm" value="{{ $data->id_gelombang }}" {{ $pengumumans->id_gelombang == $data->id_gelombang ? 'selected' : '' }}>{{ $data->gelombang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div>
                        <div class="w-48 mb-4">
                            <label for="classic-editor" class="block text-sm font-medium text-gray-600">Deskripsi*</label>
                        </div>
                        <textarea name="deskripsi" id="classic-editor"
                            class="flex-grow w-full shadow-sm text-sm rounded-md" required>{{$pengumumans->deskripsi}}</textarea>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="judul" class="block text-sm font-medium text-gray-600">Aktif*</label>
                        </div>
                        <div
                        class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                        <input type="checkbox" name="status_pengumuman" id="toggle" value="1" {{ $pengumumans->status_pengumuman ? 'checked' : '' }}
                            class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                        <label for="toggle"
                            class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer flex justify">
                <button>
                    <a href="{{ route('olimpiade.pengumuman.index') }}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmEdit(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tipePengumuman = document.getElementById('tipe_pengumuman');
        const gelombangSection = document.getElementById('gelombang_section');

        const toggleGelombang = () => {
            if (tipePengumuman.value === 'gelombang') {
                gelombangSection.style.display = 'flex';
            } else {
                gelombangSection.style.display = 'none';
            }
        };

        // Initialize display based on current selection
        toggleGelombang();

        // Listen for changes
        tipePengumuman.addEventListener('change', toggleGelombang);
    });
</script>