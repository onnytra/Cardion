<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-400">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                            aria-current="page">
                            <i class="fad fa-user text-xs mr-2"></i>
                            Profil
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="tab-1" action="{{ route($event.'.account.update', $pesertas->id_peserta) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="email" class="block text-sm text-right font-medium text-gray-600">Email*</label>
                        </div>
                        <input type="email" name="email" id="email" value="{{ $pesertas->email }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="password" class="block text-sm text-right font-medium text-gray-600">Buat
                                Password Baru</label>
                        </div>
                        <input type="password" name="password" id="password"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" >
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="verify-password"
                                class="block text-sm text-right font-medium text-gray-600">Ulangi Password</label>
                        </div>
                        <input type="password" name="verify-password" id="verify-password"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md">
                    </div>
                </div>
            </div>
            <div class="card-footer flex justify">
                <button>
                    <a href="{{url()->previous()}}" type="button" class="btn-bs-secondary mr-3">kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmEdit(event)">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</x-layout-u>