<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Edit Template Sertifikat</h1>
        </div>

        <div class="card-body">
            <form class="py-3" method="POST" action="{{ route('dashboard.setting.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2 gap-6 xl:grid-cols-1">
                    <div class="mb-10">
                        <p class="mb-4 text-black font-semibold">Background Login</p>
                        <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                            <img id="current-login-preview" src="{{ asset('build/assets/bg-login-1152a7b5.png') }}" alt="Background Login" class="h-full">
                        </div>
                        <div>
                            <label for="login" class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                            <input id="login" name="login" type="file" class="sr-only" accept="image/*" onchange="previewNewCert(event, 'preview-login')">
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-4 text-black font-semibold">Preview Login</p>
                        <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                            <img id="preview-login" class="h-full">
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-4 text-black font-semibold">Background Register</p>
                        <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                            <img id="current-register-preview" src="{{ asset('build/assets/bg-register-da4c61b1.png') }}" alt="Background Register" class="h-full">
                        </div>
                        <div>
                            <label for="register" class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                            <input id="register" name="register" type="file" class="sr-only" accept="image/*" onchange="previewNewCert(event, 'preview-register')">
                        </div>
                    </div>
                    <div class="mb-10">
                        <p class="mb-4 text-black font-semibold">Preview Register</p>
                        <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                            <img id="preview-register" class="h-full">
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
        function previewNewCert(event, previewId) {
            const [file] = event.target.files;
            if (file) {
                const newCertPreview = document.getElementById(previewId);
                newCertPreview.src = URL.createObjectURL(file);
            }
        }
    </script>
</x-layout>
