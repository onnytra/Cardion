<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Edit Template Sertifikat</h1>
        </div>

        <div class="card-body">
            <form class="py-3" method="POST" action="{{ route('dashboard.sertifikat.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-6 xl:grid-cols-1">
                    <div class="mb-10">
                        <p class="mb-4 text-black font-semibold">Background Sertifikat</p>
                        <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                            <img id="current-cert-preview" src="{{ asset('img/sertifikat-peserta.png') }}" alt="Background Certificate" class="h-full">
                        </div>
                        <div>
                            <label for="file-upload" class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" onchange="previewNewCert(event)">
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-4 text-black font-semibold">Preview Sertifikat</p>
                        <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                            <img id="new-cert-preview" class="h-full">
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn-bs-dark">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewNewCert(event) {
            const [file] = event.target.files;
            if (file) {
                const newCertPreview = document.getElementById('new-cert-preview');
                newCertPreview.src = URL.createObjectURL(file);
            }
        }
    </script>
</x-layout>
