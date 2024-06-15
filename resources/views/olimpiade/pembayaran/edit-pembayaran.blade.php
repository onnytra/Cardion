<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Bukti Pembayaran</h1>
        </div>

        <form action="{{route('user.update-pembayaran')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="nama" class="block text-sm font-medium text-gray-600">Nama
                                Rekening*</label>
                        </div>
                        <input type="text" name="nama" id="nama" value="{{ $pembayarans->nama_rekening }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="bank" class="block text-sm font-medium text-gray-600">Bank*</label>
                        </div>
                        <input type="text" name="bank" id="bank" value="{{ $pembayarans->bank }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl" class="block text-sm font-medium text-gray-600">Tanggal*</label>
                        </div>
                        <input type="date" name="tanggal" id="tgl" value="{{ $pembayarans->tanggal }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl" class="block text-sm font-medium text-gray-600">Metode Pembayaran*</label>
                        </div>
                        <select id="event" name="metode_pembayaran"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            <option class="font-medium text-sm" value="BNI" {{ $pembayarans->metode_pembayaran == 'BNI' ? 'selected' : ''}}>
                                BNI
                            </option>
                            <option class="font-medium text-sm" value="OVO" {{ $pembayarans->metode_pembayaran == 'OVO' ? 'selected' : ''}}>
                                OVO
                            </option>
                            <option class="font-medium text-sm" value="ShoopePay" {{ $pembayarans->metode_pembayaran == 'ShoopePay' ? 'selected' : ''}}>
                                ShoopePay
                            </option>
                            <option class="font-medium text-sm" value="Tunai" {{ $pembayarans->metode_pembayaran == 'Tunai' ? 'selected' : ''}}>
                                Tunai
                            </option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl" class="block text-sm font-medium text-gray-600">Gelombang Pembayaran*</label>
                        </div>
                        <input type="text" name="" id="tgl" value="{{ $pembayarans->gelombang_pembayarans->gelombang }} - (Rp.{{ $pembayarans->gelombang_pembayarans->harga }})"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required readonly>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="gambar" class="block text-sm font-medium text-gray-600">Bukti Pembayaran</label>
                        </div>
                        <input type="file" name="bukti_pembayaran" id="gambar" 
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                        <!-- Display existing file name or a preview if it exists -->
                        @if($pembayarans && $pembayarans->bukti)
                            <div class="mt-2">
                                <p>Existing file: {{ $pembayarans->bukti }}</p>
                                <!-- Optionally display an image preview if it's an image file -->
                                @if (in_array(pathinfo($pembayarans->bukti, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                    <img src="{{ asset('storage/' . $pembayarans->bukti) }}" alt="Bukti Pembayaran" class="mt-2 w-32 h-32 rounded-md">
                                @endif
                            </div>
                        @endif
                    </div>
                    
                    
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{route('user.pembayaran')}}" type="button" class="btn-bs-secondary mr-5">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmEdit(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout-u>