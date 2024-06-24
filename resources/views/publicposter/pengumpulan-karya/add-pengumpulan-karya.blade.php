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
                    <h1 class="h6">{{$user->nama_team}}</h1>
                </div>
                <table class="text-sm text-left rtl:text-right">
                    <tr>
                        <td class="px-6 py-3">Cabang</td>
                        <td class="px-6 py-3 text-gray-600">{{$user->cabangs->cabang}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">Rayon</td>
                        <td class="px-6 py-3 text-gray-600">{{$user->rayons->rayon}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">Sekolah</td>
                        <td class="px-6 py-3 text-gray-600">{{$user->sekolah}}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">Alamat</td>
                        <td class="px-6 py-3 text-gray-600">{{$user->alamat_sekolah}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card-footer flex items-center justify-around">
            <div class="flex items-center gap-5">
                <i class="fad fa-file-alt mr-2 leading-none"></i>
                <div>
                    <p>Hasil Karya</p>
                    <p class="text-gray-900">{{$pengumpulan_karyas->judul}}</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <div>
                    <p>Tanggal Mulai</p>
                    <p class="text-gray-900">{{$pengumpulan_karyas->mulai}}</p>
                </div>
            </div>
            <div class="flex items-center gap-5">
                <i class="fad fa-calendar mr-2 leading-none"></i>
                <div>
                    <p>Tanggal Selesai</p>
                    <p class="text-gray-900">{{$pengumpulan_karyas->berakhir}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header">
            <h1 class="h6">Input Hasil Karya</h1>
        </div>

        <form action="{{route('poster.store-karya')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_pengumpulan" value="{{$pengumpulan_karyas->id_pengumpulan}}">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-start gap-4">
                        <div class="w-56">
                            <label for="surat" class="block text-sm font-medium text-gray-600">Karya Poster*</label>
                        </div>
                        <div>
                            <input type="file" name="karya_poster" id="karya_poster"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                            <p class="mt-2">jpg, png, jpeg  Max 2 Mb</p>
                        </div>
                        {{-- <button>
                            <a href="" class="btn-indigo">Preview</a>
                        </button> --}}
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-56">
                            <label for="surat" class="block text-sm font-medium text-gray-600">Surat
                                Originalitas*</label>
                        </div>
                        <div>
                            <input type="file" name="surat" id="surat"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                            <p class="mt-2">pdf Max 2 Mb</p>
                        </div>
                        {{-- <button>
                            <a href="" class="btn-indigo">Preview</a>
                        </button> --}}
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-56">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-600">Essay
                                Karya*</label>
                        </div>
                        <div>
                            <input type="file" name="essay" id="deskripsi"
                                class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                            <p class="mt-2">pdf Max 2 Mb</p>
                        </div>
                        {{-- <button>
                            <a href="" class="btn-indigo">Preview</a>
                        </button> --}}
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <p class="mt-2">*** Periksa Kembali Data Yang Anda Kumpulkan, Pengumpulan Hanya Bisa Dilakukan Satu Kali***</p>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-layout-u>