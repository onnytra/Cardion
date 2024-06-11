<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Sesi Ujian ({{$ujians->judul}})</h1>
        </div>

        <form action="{{route('olimpiade.sesi.store', $ujians->id_ujian)}}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
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
                </div>
            </div>
            <div class="card-footer flex justify">
                <button>
                    <a href="{{route('olimpiade.sesi.index', $ujians->id_ujian)}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout>