<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active" aria-current="page" onclick="showTab(event, 'tab-1')">
                            <i class="fad fa-user text-xs mr-2"></i>
                            Data
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" onclick="showTab(event, 'tab-2')">
                            <i class="fad fa-lock text-xs mr-2"></i>
                            Hak Akses
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form id="main-form" action="{{ route('dashboard.user-type.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="grid gap-6 justify-center">
                    <!-- Profil -->
                    <div id="tab-1" class="form-tab">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40 lg:w-20">
                                <label for="nama" class="block text-sm text-right font-medium text-gray-600">Nama*</label>
                            </div>
                            <input type="text" name="nama" id="nama" value="{{$role->name}}" class="p-2 border border-gray w-96 lg:w-full shadow-sm text-sm rounded-md" required>
                        </div>
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-40 lg:w-20">
                                <label for="toggle" class="block text-sm text-right font-medium text-gray-600">Aktif</label>
                            </div>
                            <div class="lg:w-full">
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="status_role" id="toggle" value="1" {{ $role->status_role == 1 ? 'checked' : '' }} class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer transition-colors duration-500" />
                                    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer transition-colors duration-500"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Password -->
                    <div id="tab-2" class="hidden form-tab">
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
                                        <input type="checkbox" id="permission[{{ $permission->id }}]" name="permission[{{ $permission->id }}]" value="{{ $permission->name }}" {{ $role->permissions->contains($permission) ? 'checked' : '' }}
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
</x-layout>