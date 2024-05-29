<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <h1 class="h6">Settings</h1>
        </div>

        <div class="card-body">
            <div class="grid grid-cols-2 gap-6 xl:grid-cols-1">
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Login Admin</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Login/Register Olimpiade</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Login/Register Try Out</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Login/Register Public Poster</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Card Member Olimpiade</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Card Member Try Out</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
                </div>
                <div class="mb-10">
                    <p class="mb-4 text-black font-semibold">Background Card Member Public Poster</p>
                    <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                        <img src="../../img/background-certificate.jpg" alt="Background Certificate" class="h-full">
                    </div>
                    <form class="py-3" method="POST" enctype="multipart/form-data">
                        <label for="file-upload"
                            class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Ubah</label>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </form>
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