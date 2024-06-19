<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="grid grid-cols-3 gap-5 lg:grid-cols-1">
        <div class="card col-span-2 self-start">
            <div class="card-header flex justify-between items-center">
                <div class="flex gap-2">
                    <a href="/olympiad/ujian/start/previous"
                        class="w-8 h-8 bg-indigo-100 hover:bg-indigo-200 rounded-full flex items-center justify-center">
                        <i class="fad fa-chevron-left leading-none text-indigo-500"></i>
                    </a>
                    <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center">
                        <span class="text-indigo-100 font-bold">1</span>
                    </div>
                    <a href="/olympiad/ujian/start/next"
                        class="w-8 h-8 bg-indigo-100 hover:bg-indigo-200 rounded-full flex items-center justify-center">
                        <i class="fad fa-chevron-right leading-none text-indigo-500"></i>
                    </a>
                </div>
                <p class="text-sm font-bold">Ujian 1 dari {{$ujians->total_soal}}</p>
            </div>

            <form action="">
                <div class="card-body relative overflow-x-auto sm:rounded-lg">
                    <span class="bg-orange-400 text-center text-sm px-2 py-1 rounded">Biologi Biologi</span>
                    <h2 class="h6 my-5">Sehubungan dengan proses respirasi aerobik, pernyataan manakah yang BENAR?</h2>
                    <p class="mb-2">Jawaban</p>
                    <div class="mb-5">
                        <div class="mb-5">
                            <input type="radio" name="jawaban" id="a" value="a">
                            <label for="a" class="text-sm">Pada tahap glikolisis, glukosa diubah menjadi asam
                                piruvat</label>
                        </div>
                        <div class="mb-5">
                            <input type="radio" name="jawaban" id="b" value="b">
                            <label for="b" class="text-sm">Pada tahap siklus Krebs, asam piruvat diubah menjadi asam
                                sitrat</label>
                        </div>
                        <div class="mb-5">
                            <input type="radio" name="jawaban" id="c" value="c">
                            <label for="c" class="text-sm">Pada tahap glikolisis, asam piruvat diubah menjadi asam
                                sitrat</label>
                        </div>
                        <div class="mb-5">
                            <input type="radio" name="jawaban" id="d" value="d">
                            <label for="d" class="text-sm">Pada tahap siklus Krebs, asam sitrat diubah menjadi asam
                                piruvat</label>
                        </div>
                        <div class="mb-5">
                            <input type="radio" name="jawaban" id="e" value="e">
                            <label for="e" class="text-sm">Pada tahap glikolisis, asam sitrat diubah menjadi asam
                                piruvat</label>
                        </div>
                    </div>
                    <div class="flex gap-5 justify-end items-center">
                        <div class="flex gap-2">
                            <p>Benar</p>
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">4</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <p>Kosong</p>
                            <div class="w-6 h-6 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">0</span>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <p>Salah</p>
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm">-1</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer flex justify-end">
                    <button>
                        <a href="/olympiad/ujian/start/next" class="btn">
                            <i class="fad fa-save mr-2 leading-none"></i>
                            Simpan Jawaban</a>
                    </button>
                </div>
            </form>
        </div>

        <div>
            <div class="card mb-5">
                <div class="card-header">
                    <h1 class="h6">Sisa Watu</h1>
                </div>

                <div class="card-body relative overflow-x-auto sm:rounded-lg text-center">
                    <h2 class="h4 text-indigo-500">1:52:13</h2>
                </div>
            </div>

            <div class="card self-start">
                <div class="card-header">
                    <h1 class="h6">Daftar Soal</h1>
                </div>

                <div class="card-body relative overflow-x-auto sm:rounded-lg">
                    <div class="flex flex-wrap gap-2">
                        @for($i = 1; $i <= 120; $i++) {{-- Jika sudah menjawab pertanyaan --}} <a href="#"
                            class="hidden w-12 h-12 bg-green-100 hover:bg-green-200 rounded-full flex items-center justify-center">
                            <span class="text-green-500 font-bold text-lg">{{ $i }}A</span>
                            </a>
                            {{-- Jika belum menjawab pertanyaan --}}
                            <a href="#"
                                class="w-12 h-12 bg-yellow-100 hover:bg-yellow-200 rounded-full flex items-center justify-center">
                                <span class="text-yellow-500 font-bold text-lg">{{ $i }}</span>
                            </a>
                            @endfor
                    </div>
                </div>

                <div class="card-footer flex justify-end">
                    <button>
                        <a href="/olympiad/ujian/detail/finish" class="btn-indigo">
                            <i class="fad fa-check mr-2 leading-none"></i>
                            Selesai Ujian</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('keydown', function(event) {
            if (event.ctrlKey || event.altKey || event.keyCode === 9) {
                event.preventDefault();
            }
        });

        window.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });
    </script>
</x-layout-u>