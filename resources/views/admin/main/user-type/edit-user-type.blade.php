<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>
    <div class="card mt-6">
        <div class="card-header">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                            aria-current="page">
                            <i class="fad fa-user text-xs mr-2"></i>
                            Data
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-lock text-xs mr-2"></i>
                            Hak Akses
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="tab-1">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex items-center gap-4">
                        <div class="w-40 lg:w-20">
                            <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama*</label>
                        </div>
                        <input type="text" name="nama" id="nama"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40 lg:w-20">
                            <label for="toggle" class="block text-sm text-right font-medium text-gray-600">Aktif</label>
                        </div>
                        <div class="lg:w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="toggle" id="toggle"
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                <label for="toggle"
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/main/user-type" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>

        <form id="tab-2" class="hidden">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6">
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">User</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="user_view" name="user_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="user_view" class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="user_create_edit" name="user_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="user_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="user_delete" name="user_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="user_delete" class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">User Type</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="user_type_view" name="user_type_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="user_type_view" class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="user_type_create_edit" name="user_type_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="user_type_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="user_type_delete" name="user_type_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="user_type_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Sertifikat</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="sertifikat_view" name="sertifikat_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="sertifikat_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="sertifikat_edit" name="sertifikat_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="sertifikat_edit"
                                    class="block text-sm font-medium text-gray-600">Edit</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Settings</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="settings_view" name="settings_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="settings_view" class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="settings_edit" name="settings_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="settings_edit" class="block text-sm font-medium text-gray-600">Edit</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Olimpiade</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olimpiade" name="olimpiade"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Cabang</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_cabang_view" name="olim_cabang_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_cabang_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_cabang_create_edit" name="olim_cabang_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_cabang_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_cabang_delete" name="olim_cabang_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_cabang_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Rayon</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_rayon_view" name="olim_rayon_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_rayon_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_rayon_create_edit" name="olim_rayon_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_rayon_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_rayon_delete" name="olim_rayon_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_rayon_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Peserta</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_peserta_view" name="olim_peserta_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_peserta_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_peserta_create_edit" name="olim_peserta_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_peserta_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_peserta_delete" name="olim_peserta_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_peserta_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Pembayaran</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_pembayaran_view" name="olim_pembayaran_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_pembayaran_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_pembayaran_create_edit" name="olim_pembayaran_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_pembayaran_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_pembayaran_delete" name="olim_pembayaran_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_pembayaran_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Ujian</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujian_view" name="olim_ujian_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_ujian_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujian_create_edit" name="olim_ujian_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_ujian_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujian_delete" name="olim_ujian_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_ujian_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Ujian: Soal</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujiansoal_view" name="olim_ujiansoal_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_ujiansoal_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujiansoal_create_edit" name="olim_ujiansoal_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_ujiansoal_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujiansoal_delete" name="olim_ujiansoal_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_ujiansoal_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Ujian: Subyek</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujiansubyek_view" name="olim_ujiansubyek_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_ujiansubyek_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujiansubyek_create_edit" name="olim_ujiansubyek_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_ujiansubyek_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_ujiansubyek_delete" name="olim_ujiansubyek_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_ujiansubyek_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Assign Test</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_test_view" name="olim_test_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_test_view" class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_test_create_edit" name="olim_test_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_test_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_test_delete" name="olim_test_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_test_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Monitoring Ujian</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_monitor_view" name="olim_monitor_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_monitor_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_monitor_create_edit" name="olim_monitor_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_monitor_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_monitor_delete" name="olim_monitor_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_monitor_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Pengumuman</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_pengumuman_view" name="olim_pengumuman_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_pengumuman_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_pengumuman_create_edit" name="olim_pengumuman_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_pengumuman_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_pengumuman_delete" name="olim_pengumuman_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_pengumuman_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Gelombang</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_gelombang_view" name="olim_gelombang_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_gelombang_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_gelombang_create_edit" name="olim_gelombang_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="olim_gelombang_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="olim_gelombang_delete" name="olim_gelombang_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="olim_gelombang_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>


                    <hr>

                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Public Poster</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="checkbox" name="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Cabang</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_cabang_view" name="poster_cabang_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_cabang_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_cabang_create_edit" name="poster_cabang_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="poster_cabang_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_cabang_delete" name="poster_cabang_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_cabang_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Peserta</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_peserta_view" name="poster_peserta_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_peserta_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_peserta_create_edit" name="poster_peserta_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="poster_peserta_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_peserta_delete" name="poster_peserta_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_peserta_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Pengumpulan Karya</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_pengumpulan_view" name="poster_pengumpulan_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_pengumpulan_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_pengumpulan_create_edit"
                                name="poster_pengumpulan_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="poster_pengumpulan_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_pengumpulan_delete" name="poster_pengumpulan_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_pengumpulan_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Penilaian</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_penilaian_view" name="poster_penilaian_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_penilaian_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_penilaian_create_edit" name="poster_penilaian_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="poster_penilaian_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_penilaian_delete" name="poster_penilaian_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_penilaian_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Assign Test</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_test_view" name="poster_test_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_test_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_test_create_edit" name="poster_test_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="poster_test_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_test_delete" name="poster_test_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_test_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <p class="w-96 xl:w-24 text-right">Pembayaran</p>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_pembayaran_view" name="poster_pembayaran_view"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_pembayaran_view"
                                    class="block text-sm font-medium text-gray-600">View</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_pembayaran_create_edit"
                                name="poster_pembayaran_create_edit"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-20">
                                <label for="poster_pembayaran_create_edit"
                                    class="block text-sm font-medium text-gray-600">Create/Edit</label>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="poster_pembayaran_delete" name="poster_pembayaran_delete"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <div class="w-10">
                                <label for="poster_pembayaran_delete"
                                    class="block text-sm font-medium text-gray-600">Delete</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/main/user-type" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>