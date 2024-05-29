<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header">
            <h1 class="h6">Detail Tim</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg ">
            <div class="flex lg:block justify-between px-20 lg:px-10">
                <div class="flex items-center gap-5 lg:pb-10">
                    <img src="../../../img/user.svg" alt="user" class="w-20 h-20">
                    <h1 class="h6">User</h1>
                </div>
                <table class="text-sm text-left rtl:text-right">
                    <tr>
                        <td class="px-6 py-3">Cabang</td>
                        <td class="px-6 py-3 text-gray-600">Online</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">Rayon</td>
                        <td class="px-6 py-3 text-gray-600">Online</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">Sekolah</td>
                        <td class="px-6 py-3 text-gray-600">SMAN 5 Malang</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">Alamat</td>
                        <td class="px-6 py-3 text-gray-600">Jl Joyosuko No. 1</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card-footer flex items-center justify-around">
            <div class="flex items-center gap-5">
                <i class="fad fa-file-alt mr-2 leading-none"></i>
                <div>
                    <p>Hasil Karya</p>
                    <p class="text-gray-900">Tes Karya</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <div>
                    <p>Tanggal Mulai</p>
                    <p class="text-gray-900">22/05/2024 00:00</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <div>
                    <p>Tanggal Selesai</p>
                    <p class="text-gray-900">30/11/2024 14:30</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header">
            <h1 class="h6">Input Hasil Karya</h1>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-56">
                            <label for="nama" class="block text-sm font-medium text-gray-600">Hasil Karya*</label>
                        </div>
                        <div>
                            <div class="mb-4 h-56 w-full bg-gray-300 flex justify-center">
                                <img src="../../img/background-certificate.jpg" alt="Background Certificate"
                                    class="h-full">
                            </div>
                            <div class="py-3">
                                <label for="file-upload"
                                    class="bg-gray-500 hover:bg-gray-400 text-white px-5 py-3 cursor-pointer rounded-md">Select
                                    Image</label>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </div>
                            <p class="mt-2">jpg,jpeg,png Max 2 Mb</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-56">
                            <label for="surat" class="block text-sm font-medium text-gray-600">Surat
                                Originalitas*</label>
                        </div>
                        <div>
                            <input type="file" name="surat" id="surat"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                            <p class="mt-2">pdf,doc,docx Max 2 Mb</p>
                        </div>
                        <button>
                            <a href="" class="btn-indigo">Preview</a>
                        </button>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-56">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi
                                Karya*</label>
                        </div>
                        <div>
                            <input type="file" name="deskripsi" id="deskripsi"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                            <p class="mt-2">pdf,doc,docx Max 2 Mb</p>
                        </div>

                        <button>
                            <a href="" class="btn-indigo">Preview</a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="#" type="button" class="btn-bs-secondary">simpan draf hasil karya</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan hasil karya</a>
                </button>
            </div>
        </form>
    </div>
</x-layout-u>