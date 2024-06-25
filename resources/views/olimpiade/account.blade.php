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
                            <label for="password" class="block text-sm text-right font-medium text-gray-600">Password Baru</label>
                        </div>
                        <div class="relative w-96 lg:w-full">
                            <input type="password" name="password" id="password"
                                class="p-2 border border-gray w-full shadow-sm text-sm rounded-md pr-10" required>
                            <i class="fa fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" id="togglePassword"></i>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-40">
                            <label for="verify-password" class="block text-sm text-right font-medium text-gray-600">Ulangi Password</label>
                        </div>
                        <div class="relative w-96 lg:w-full">
                            <input type="password" name="confirm_password" id="verify_password"
                                class="p-2 border border-gray w-full shadow-sm text-sm rounded-md pr-10" required>
                            <i class="fa fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" id="toggleVerifyPassword"></i>
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
    <style>
        .relative input {
            padding-right: 2.5rem; /* Ensure there's space for the icon */
        }
    
        .fa-eye {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
        }
    
        .fa-eye:hover {
            color: #000;
        }
    </style>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    
        const toggleVerifyPassword = document.getElementById('toggleVerifyPassword');
        const verifyPassword = document.getElementById('verify_password');
        toggleVerifyPassword.addEventListener('click', function () {
            const type = verifyPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            verifyPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</x-layout-u>