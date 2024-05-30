<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="grid grid-cols-3 gap-5 lg:grid-cols-1" x-data="{ openPanel: null }">
        <div class="card col-span-2 self-start">
            <div class="card-header">
                <h1 class="h6">Hasil Ujian</h1>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                @for($i = 1; $i <= 120; $i++) <div class="border-b border-gray-300">
                    <button @click="openPanel = (openPanel === {{ $i }} ? null : {{ $i }})"
                        class="w-full text-left px-4 py-5 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:font-bold flex justify-between items-center">
                        Pertanyaan {{ $i }}
                        <i x-show="openPanel !== {{ $i }}" class="fad fa-chevron-right leading-none"></i>
                        <i x-show="openPanel === {{ $i }}" class="fad fa-chevron-down leading-none"></i>
                    </button>
                    <div x-show="openPanel === {{ $i }}" x-transition:enter="transition ease-out duration-200 transform"
                        x-transition:enter-start="opacity-0 scale-y-0 translate-y-1/2"
                        x-transition:enter-end="opacity-100 scale-y-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100 transform"
                        x-transition:leave-start="opacity-100 scale-y-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-y-0 translate-y-1/2">
                        <div class="px-4 pb-2">
                            <p class="pb-3 text-gray-900">Soal:</p>
                            <p class="pb-3 text-gray-900">
                                Saat Andi berhenti untuk menunggu lampu merah, Ia tiba tiba mencium aroma nasi goreng
                                yang
                                tercium kuat. Secara bersamaan, ia juga mencium aroma durian yang menyengat. Mengapa
                                Andi
                                dapat membedakan kedua aroma itu dengan tepat?
                            </p>
                            <p class="pb-2 text-gray-900">
                                Jawaban Anda:
                            </p>
                        </div>
                    </div>
            </div>
            @endfor
        </div>
    </div>

    <div class="card self-start">
        <div class="card-header">
            <h1 class="h6">Daftar Soal</h1>
        </div>

        <div class="card-body relative overflow-x-auto sm:rounded-lg">
            <div class="flex flex-wrap gap-2">
                @for($i = 1; $i <= 120; $i++) <a @click="openPanel = {{ $i }}" href="#"
                    class="w-12 h-12 bg-yellow-100 hover:bg-yellow-200 rounded-full flex items-center justify-center">
                    <span class="text-yellow-500 font-bold text-lg">{{ $i }}</span>
                    </a>
                    @endfor
            </div>
        </div>
    </div>
    </div>
</x-layout-u>