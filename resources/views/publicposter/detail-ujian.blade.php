<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card col-span-2 mb-5">
        <div class="card-body">
            <button>
                <a href="/public-poster/ujian/history" class="btn-gray">
                    History Ujian</a>
            </button>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-5 lg:grid-cols-1">
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
                <span class="bg-red-500 text-white px-2 py-1 rounded">Sudah Berakhir</span>
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
                <button>
                    <a href="/public-poster/ujian/detail" class="btn-indigo">
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
</x-layout-u>