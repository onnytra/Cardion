<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="grid grid-cols-3 gap-5 lg:grid-cols-1" x-data="{ openPanel: null }">
        <div class="card col-span-2 self-start">
            <div class="card-header">
                <div class="header-content">
                    @if ($ujians->tampilkan_nilai == 1)
                    <h2 class="h6 font-bold">Nilai {{$ujians->judul}}:</h2>
                    <div class="nilai-wrapper">
                        <span class="nilai-circle">
                            {{ $ujians->nilai }}
                        </span>
                    </div>
                    @else
                    <h1 class="h6">Hasil {{$ujians->judul}}</h1>
                    @endif
                </div>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                @foreach ($soals as $soal)
                <div class="border-b border-gray-300">
                    <button @click="openPanel = (openPanel === {{ $soal->id_soal }} ? null : {{ $soal->id_soal }})"
                        class="w-full text-left px-4 py-5 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900 focus:font-bold flex justify-between items-center">
                        Pertanyaan {{ $loop->iteration }}
                        <i x-show="openPanel !== {{ $soal->id_soal }}" class="fad fa-chevron-right leading-none"></i>
                        <i x-show="openPanel === {{ $soal->id_soal }}" class="fad fa-chevron-down leading-none"></i>
                    </button>
                    <div x-show="openPanel === {{ $soal->id_soal }}"
                        x-transition:enter="transition ease-out duration-200 transform"
                        x-transition:enter-start="opacity-0 scale-y-0 translate-y-1/2"
                        x-transition:enter-end="opacity-100 scale-y-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100 transform"
                        x-transition:leave-start="opacity-100 scale-y-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-y-0 translate-y-1/2">
                        <div class="px-4 pb-2">
                            <p class="pb-3 text-gray-900">Soal:</p>
                            <p class="pb-3 text-gray-900">
                                {!! $soal->soal !!}
                            </p>
                            
                            @if ($ujians->tampilkan_jawaban == 1)
                            <p class="pb-2 text-gray-900">
                                Jawaban Anda: {!! $soal->jawaban !!}
                                @if ($soal->jawaban_status == 'benar')
                                    <i class="fas fa-check text-green-500">
                                        Benar
                                    </i>
                                @elseif($soal->jawaban_status == 'salah')
                                    <i class="fas fa-times text-red-500">
                                        Salah
                                    </i>
                                @else
                                    <i class="fas fa-question text-black-500">
                                        Kosong
                                    </i>
                                @endif
                            </p>
                            @endif
                            {{-- <p class="pb-2 text-gray-900">
                                Jawaban Benar: {!! $soal->jawaban_benar !!}
                            </p> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card self-start">
            <div class="card-header">
                <h1 class="h6">Daftar Soal</h1>
            </div>
    
            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="flex flex-wrap gap-2">
                    @foreach ($soals as $soal)
                    <a @click="openPanel = {{ $soal->id_soal }}" href="#"
                        class="w-12 h-12 bg-yellow-100 hover:bg-yellow-200 rounded-full flex items-center justify-center">
                        <span class="text-yellow-500 font-bold text-lg">{{ $loop->iteration }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        .nilai-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 20px; /* Adjust this as needed */
        }

        .nilai-circle {
            background-color: #3b82f6; /* bg-blue-500 */
            color: white;
            text-align: center;
            font-size: 2rem;
            width: 100px;
            height: 100px;
            line-height: 100px; /* Untuk memposisikan teks di tengah secara vertikal */
            border-radius: 50%;
        }

        .header-content {
            display: flex;
            align-items: center;
        }

        .header-content h2 {
            margin: 0; /* Remove margin to avoid extra space */
        }
    </style>
</x-layout-u>