<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row items-center">
            <h1 class="h6 mr-5">Form Import Excel</h1>
            
            <button class="mr-5">
                <a href="{{route($event.'.importexcel.format-excel')}}" class="btn-indigo">Format Excel</a>
            </button>
        </div>

        <form action="{{route($event.'.importexcel.import-peserta')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-40 ">
                            <label for="file" class="block text-sm text-right font-medium text-gray-600">File Excel*</label>
                        </div>
                        <input type="file" name="file" id="file"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer flex justify">
                <button>
                    <a href="{{route($event.'.peserta.index')}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout>