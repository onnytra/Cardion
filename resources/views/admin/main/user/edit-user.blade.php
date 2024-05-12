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
                            Profil
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-lock text-xs mr-2"></i>
                            Password
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="tab-1">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex items-center gap-4">
                        <div class="w-40 ">
                            <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama
                                Lengkap*</label>
                        </div>
                        <input type="text" name="nama" id="nama"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40 ">
                            <label for="user_type" class="block text-sm text-right font-medium text-gray-600">User
                                Type*</label>
                        </div>
                        <select id="user_type" name="user_type"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline">
                            <option class="font-medium text-sm"></option>
                            <option class="font-medium text-sm">PJ Rayon</option>
                            <option class="font-medium text-sm">Sponsor</option>
                            <option class="font-medium text-sm">Bendahara</option>
                            <option class="font-medium text-sm">Admin</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40 ">
                            <label for="email" class="block text-sm text-right font-medium text-gray-600">Email*</label>
                        </div>
                        <input type="email" name="email" id="email"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/main/user" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>

        <form id="tab-2" class="hidden">
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex items-center gap-4">
                        <div class="w-40 ">
                            <label for="password" class="block text-sm text-right font-medium text-gray-600">Password
                                Baru*</label>
                        </div>
                        <input type="password" name="password" id="password"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40 ">
                            <label for="verify-password"
                                class="block text-sm text-right font-medium text-gray-600">Ulangi Password*</label>
                        </div>
                        <input type="password" name="verify-password" id="verify-password"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button>
                    <a href="/admin/main/user" type="button" class="btn-bs-secondary">kembali</a>
                </button>
                <button>
                    <a href="#" type="submit" class="btn-bs-dark">simpan</a>
                </button>
            </div>
        </form>
    </div>

</x-layout>