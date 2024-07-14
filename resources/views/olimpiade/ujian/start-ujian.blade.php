<x-layout-ujian>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="grid grid-cols-3 gap-5 lg:grid-cols-1">
        <div class="card col-span-2 self-start">
            <div class="card-header flex justify-between items-center">
                <div class="flex gap-2">
                    <a href="{{ route('olimpiade.start-ujian', ['ujians' => $ujian->id_ujian, 'sesis'=>$sesi->id_sesi, 'soals' => $previous_soal_id ]) }}"
                        class="w-8 h-8 bg-indigo-100 hover:bg-indigo-200 rounded-full flex items-center justify-center">
                        <i class="fad fa-chevron-left leading-none text-indigo-500"></i>
                    </a>
                    <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center">
                        <span class="text-indigo-100 font-bold">{{ $current_question_number }}</span>
                    </div>
                    <a href="{{ route('olimpiade.start-ujian', ['ujians' => $ujian->id_ujian, 'sesis'=>$sesi->id_sesi,'soals' => $next_soal_id ]) }}"
                        class="w-8 h-8 bg-indigo-100 hover:bg-indigo-200 rounded-full flex items-center justify-center">
                        <i class="fad fa-chevron-right leading-none text-indigo-500"></i>
                    </a>
                </div>
                <p class="text-sm font-bold">Soal {{ $current_question_number }} dari {{$ujian->total_soal}}</p>
            </div>

            <form action="{{ route('olimpiade.simpan_jawaban') }}" method="POST">
                @csrf
                <input type="hidden" name="id_soal" value="{{ $soal->id_soal }}">
                <input type="hidden" name="id_ujian" value="{{ $ujian->id_ujian }}">
            
                <div class="card-body relative overflow-x-auto sm:rounded-lg">
                    <span class="bg-orange-400 text-center text-sm px-2 py-1 rounded">{{ $soal->subyek->nama }}</span>
                    <p class="mt-2 mb-0">Soal</p>
                    <h2 class="h6 my-5">{!! $soal->soal !!}</h2>
                    <p class="mb-2 mt-3">Jawaban</p>
                    <div class="mb-5">
                        @foreach ($soal->jawaban as $jawaban)
                        <div class="mb-5">
                            <input type="radio" name="id_jawaban" id="jawaban{{ $loop->index }}" value="{{ $jawaban->id_jawaban }}" {{ $selected_jawaban_id == $jawaban->id_jawaban ? 'checked' : '' }}>
                            <label for="jawaban{{ $loop->index }}" class="text-sm">{!! $jawaban->jawaban !!}</label>
                        </div>
                        @endforeach
                    </div>                    
                    <div class="flex gap-5 justify-end items-center">
                        <div class="flex gap-2">
                            <p>Benar</p>
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">{{ $ujian->benar }}</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <p>Kosong</p>
                            <div class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">{{ $ujian->kosong }}</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <p>Salah</p>
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">{{ $ujian->salah }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-footer flex justify-end">
                    <button type="submit" class="btn">
                        <i class="fad fa-save mr-2 leading-none"></i>
                        Simpan Jawaban
                    </button>
                </form>
                @if ($selected_jawaban_id)
                        <form action="{{ route('olimpiade.hapus_jawaban') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_soal" value="{{ $soal->id_soal }}">
                            <input type="hidden" name="id_ujian" value="{{ $ujian->id_ujian }}">
                            <button type="submit" class="btn btn-danger ml-2">
                                <i class="fad fa-trash mr-2 leading-none"></i>
                                Hapus Jawaban
                            </button>
                        </form>
                    @endif
            </div>
            
        </div>

        <div>
            <div class="card mb-5">
                <div class="card-header">
                    <h1 class="h6">Sisa Waktu</h1>
                </div>

                <div class="card-body relative overflow-x-auto sm:rounded-lg text-center">
                    <h2 id="countdown" class="h4 text-indigo-500">Loading...</h2>
                </div>                
            </div>

            <div class="card self-start">
                <div class="card-header">
                    <h1 class="h6">Daftar Soal</h1>
                </div>

                <div class="card-body relative overflow-x-auto sm:rounded-lg">
                    <div class="flex flex-wrap gap-2">
                        @foreach ($soals as $soal)
                            @php
                                $answered_class = '';
                                if (App\Models\jawaban_users::where('id_soal', $soal->id_soal)
                                                            ->where('id_ujian', $ujian->id_ujian)
                                                            ->where('id_peserta', Auth::guard('peserta')->user()->id_peserta)
                                                            ->exists()) {
                                    $answered_class = 'bg-green-500 hover:bg-green-600';
                                }
                            @endphp
                            <a href="{{ route('olimpiade.start-ujian', ['ujians' => $ujian->id_ujian, 'sesis'=>$sesi->id_sesi,'soals' => $soal->id_soal]) }}"
                                class="w-12 h-12 {{ $answered_class }} rounded-full flex items-center justify-center">
                                <span class="font-bold text-lg {{ $answered_class ? 'text-white' : 'text-yellow-500' }}">{{ $loop->iteration }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="card-footer flex justify-end">
                    <form action="{{ route('olimpiade.finish_ujian') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_ujian" value="{{ $ujian->id_ujian }}">
                        <input type="hidden" name="id_peserta" value="{{ Auth::guard('peserta')->user()->id_peserta }}">
                        <button type="submit" class="btn btn-indigo">
                            <i class="fad fa-check mr-2 leading-none"></i>
                            Selesai Ujian
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form id="finishForm" action="{{ route('olimpiade.finish_ujian') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="id_ujian" value="{{ $ujian->id_ujian }}">
        <input type="hidden" name="id_sesi" value="{{ $sesi->id_sesi }}">
    </form>
    <script>
    const waktuMulai = new Date("{{ $sesi->mulai }}");
    const waktuBerakhir = new Date("{{ $sesi->berakhir }}");
    </script>
    <script src="{{asset('js/ujian.js')}}"></script>
</x-layout-ujian>
