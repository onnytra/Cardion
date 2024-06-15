<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Bukti Pembayaran</h1>
        </div>

        <form action="{{route('user.store-pembayaran')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="nama" class="block text-sm font-medium text-gray-600">Nama
                                Rekening*</label>
                        </div>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="bank" class="block text-sm font-medium text-gray-600">Bank*</label>
                        </div>
                        <input type="text" name="bank" id="bank" value="{{ old('bank') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl" class="block text-sm font-medium text-gray-600">Tanggal*</label>
                        </div>
                        <input type="date" name="tanggal" id="tgl" value="{{ old('tanggal') }}"
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
                            <option class="font-medium text-sm" value="BNI" {{ old('metode_pembayaran') == 'BNI' ? 'selected' : ''}}>
                                BNI
                            </option>
                            <option class="font-medium text-sm" value="OVO" {{ old('metode_pembayaran') == 'OVO' ? 'selected' : ''}}>
                                OVO
                            </option>
                            <option class="font-medium text-sm" value="ShoopePay" {{ old('metode_pembayaran') == 'ShoopePay' ? 'selected' : ''}}>
                                ShoopePay
                            </option>
                            <option class="font-medium text-sm" value="Tunai" {{ old('metode_pembayaran') == 'Tunai' ? 'selected' : ''}}>
                                Tunai
                            </option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="tgl" class="block text-sm font-medium text-gray-600">Gelombang Pembayaran*</label>
                        </div>
                        <select id="event" name="gelombang_pembayaran"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            @foreach ($gelombangpembayaran as $item)
                            <option class="font-medium text-sm" value="{{$item->id_gelombang}}"
                                {{ old('gelombang_pembayaran') == $item->id_gelombang ? 'selected' : ''}}>
                                {{$item->gelombang}} - (Rp.{{$item->harga}})
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="gambar" class="block text-sm font-medium text-gray-600">Bukti
                                Pembayaran*</label>
                        </div>
                        <input type="file" name="bukti_pembayaran" id="gambar"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{route('user.pembayaran')}}" type="button" class="btn-bs-secondary mr-5">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout-u>