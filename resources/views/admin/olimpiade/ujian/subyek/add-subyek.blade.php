<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Form Tambah Subyek</h1>
        </div>

        <form action="{{ route('olimpiade.subyek.store', $ujians->id_ujian) }}" method="POST">
            @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="label" class="block text-sm font-medium text-gray-600">Label*</label>
                        </div>
                        <input type="text" name="label" id="label" value="{{ old('label') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-56 ">
                            <label for="total_soal" class="block text-sm font-medium text-gray-600">Total Soal*</label>
                        </div>
                        <input type="number" name="total_soal" id="total_soal" value="{{ old('total_soal') }}"
                            class="p-2 border border-gray w-full lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{route('olimpiade.subyek.index', $ujians->id_ujian)}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout>