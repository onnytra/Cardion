<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Edit Sesi Ujian ({{$sesis->ujian->judul}})</h1>
        </div>

        <form action="{{route('olimpiade.sesi.update', $sesis->id_sesi)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="mulai" class="block text-sm font-medium text-gray-600">Mulai*</label>
                        </div>
                        <input type="date" name="mulai" id="mulai" value="{{ $sesis->mulai }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                            <input type="time" name="waktu_mulai" id="mulai" value="{{ $sesis->waktu_mulai }}"
                                class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="berakhir" class="block text-sm font-medium text-gray-600">Berakhir*</label>
                        </div>
                        <input type="date" name="berakhir" id="berakhir" value="{{ $sesis->berakhir }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                            <input type="time" name="waktu_berakhir" id="mulai" value="{{ $sesis->waktu_berakhir }}"
                                class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>
            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout>