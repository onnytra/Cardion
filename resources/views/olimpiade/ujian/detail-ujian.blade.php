<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div id="detailUjian" class="grid grid-cols-3 gap-5 lg:grid-cols-1">
        <div class="card col-span-2">
            <div class="card-header">
                <h1 class="h6">Keterangan Ujian</h1>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <h2 class="h6">Simbol dan konstanta berikut digunakan di ujian ini kecuali ada ketentuan lain:</h2>
                <h2 class="h6 mt-5">Identitas Trigonometri:</h2>
                <pre class="mt-2">
                    Sin(x + y) = sin(x)cos(y) + cos(x)sin(y)
                
                    Cos(x + y) = cos(x)cos(y) - sin(x)sin(y)
                
                    Sin(2x) = 2sin(x)cos(x)
                
                    Cos(2x) = cos2(x) - sin2(x)
                
                    Sin(x)cos(y) = ½(sin(x + y) + sin(x - y))
                
                    Cos(x)cos(y) = ½(cos(x + y) + cos(x - y))
                
                    Sin(x)sin(y) = ½(cos(x - y) - cos(x + y))
                </pre>
                <h2 class="h6 mt-5">Ketentuan berikut akan diterapkan pada semua pertanyaan kecuali :</h2>
                <ul>
                    ● Semua benda berada dekat permukaan bumi dan gaya gravitasinya mengarah ke bawah.
                </ul>
                <ul>
                    ● Abaikan hambatan udara.
                </ul>
                <ul>
                    ● Semua kecepatan jauh lebih kecil dari kecepatan cahaya.
                </ul>
            </div>
        </div>

        <div class="card self-start lg:order-last">
            <div class="card-header flex flex-row justify-between items-center">
                <h1 class="h6">Data Ujian</h1>
                <span class="bg-green-500 text-white text-center text-sm px-2 py-1 rounded">Sedang Berlangsung</span>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
                <div class="flex items-center gap-5">
                    <i class="fad fa-calendar mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">28/01/2024 13:20</p>
                </div>
                <div class="flex items-center gap-5">
                    <i class="fad fa-clock mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">120 Menit</p>
                </div>
                <div class="flex items-center gap-5">
                    <i class="fad fa-file-alt mr-2 leading-none"></i>
                    <p class="text-gray-900 hover:text-blue-500">121 Soal</p>
                </div>
            </div>

            <div class="card-footer flex justify-end">
                <button id="startFullScreen">
                    <a class="btn-indigo">
                        <i class="fad fa-clock mr-2 leading-none"></i>
                        Ikuti Ujian</a>
                </button>
            </div>
        </div>

        <div class="card col-span-2">
            <div class="card-header">
                <h1 class="h6">Peraturan Ujian</h1>
            </div>

            <div class="card-body relative overflow-x-auto sm:rounded-lg">
            </div>
        </div>
    </div>

    <div id="startUjian" class="hidden grid grid-cols-3 gap-5 lg:grid-cols-1">
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
                <p class="text-sm font-bold">Ujian 1 dari 120</p>
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
                    <button id="doneFullScreen">
                        <a class="btn-indigo">
                            <i class="fad fa-check mr-2 leading-none"></i>
                            Selesai Ujian</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const startFullScreen = document.getElementById('startFullScreen');
        const doneFullScreen = document.getElementById('doneFullScreen');

        const disableCtrlAndRightClick = (event) => {
            event.preventDefault();
        };

        if (startFullScreen) {
            startFullScreen.addEventListener('click', () => {
                document.documentElement.requestFullscreen().catch(err => {
                    alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
                });
                document.getElementById("detailUjian").classList.add("hidden");
                document.getElementById("startUjian").classList.remove("hidden");
                document.getElementById("navbar-u").classList.add("hidden");
                document.addEventListener('keydown', disableCtrlAndRightClick);
                document.addEventListener('contextmenu', disableCtrlAndRightClick);
                document.addEventListener('contextmenu', disableCtrlAndRightClick);
            });
        }
        if (doneFullScreen) {
            doneFullScreen.addEventListener('click', () => {
                document.exitFullscreen();
                document.getElementById("startUjian").classList.add("hidden");
                document.getElementById("detailUjian").classList.remove("hidden");
                document.getElementById("navbar-u").classList.remove("hidden");
                document.removeEventListener('keydown', disableCtrlAndRightClick);
                document.removeEventListener('contextmenu', disableCtrlAndRightClick);
                window.scrollTo(0, 0);
            });
        }

    </script>
</x-layout-u>