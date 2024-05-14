<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Edit Template Sertifikat</h1>
        </div>

        <div class="card-body">
            <div class="grid grid-cols-2 gap-6 xl:grid-cols-1">
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Foreground</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <button class="btn">
                        <label for="file-upload">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </button>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <button class="btn">
                        <label for="file-upload">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </button>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button>
                <a href="#" class="btn-bs-dark">simpan</a>
            </button>
        </div>
    </div>

</x-layout>