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
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                            class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40 lg:w-20">
                            <label for="toggle" class="block text-sm text-right font-medium text-gray-600">Aktif</label>
                        </div>
                        <div class="lg:w-full">
                            <div
                                class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                <input type="checkbox" name="status_role" id="toggle" value="1" {{ old('status_role') == 1 ? 'checked' : '' }}
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
                    @foreach($rowingBydescription as $group => $descriptions)
                    <hr>
                    <p>{{ ucwords(str_replace('_group', ' ', $group)) }}</p>
                        @foreach($descriptions as $description => $permissions)
                            <div class="flex items-center gap-5">
                                <p class="w-96 xl:w-24 text-right">{{ $description }}</p>
                                @foreach($permissions as $permission)
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox" id="{{ $permission->name }}" name="{{ $permission->name }}" value="{{ $permission->name }}" 
                                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                        <div class="w-20">
                                            <label for="{{ $permission->name }}" class="block text-sm font-medium text-gray-600">{{ ucfirst($permission->label) }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</x-layout>
