<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>
    <!-- General Report -->
    <div class="grid grid-cols-2 gap-6 xl:grid-cols-1">

        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-brain"></div>
                        <span class="rounded-full text-white badge bg-teal-400 text-sm">
                            Olimpiade
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 flex flex-row items-center gap-3">
                        <h1 class="h5 text-blue-600">{{$main->peserta_olimpiade}}</h1>
                        <p>Jumlah peserta</p>
                    </div>
                    <!-- end bottom -->

                    <!-- bottom -->
                    <div class="mt-8 flex flex-row items-center gap-3">
                        <h1 class="h5 text-green-600">{{$main->peserta_olimpiade_aktif}}</h1>
                        <p>Jumlah peserta aktif</p>
                    </div>
                    <!-- end bottom -->

                    <!-- bottom -->
                    <div class="mt-8 flex flex-row items-center gap-3">
                        <h1 class="h5 text-red-600">{{$main->ujian}}</h1>
                        <p>Jumlah ujian</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>

        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-brush"></div>
                        <span class="rounded-full text-white badge bg-red-400 text-sm">
                            Public Poster
                        </span>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8 flex flex-row items-center gap-3">
                        <h1 class="h5 text-blue-600">{{$main->peserta_poster}}</h1>
                        <p>Jumlah peserta</p>
                    </div>
                    <!-- end bottom -->

                    <!-- bottom -->
                    <div class="mt-8 flex flex-row items-center gap-3">
                        <h1 class="h5 text-green-600">{{$main->peserta_poster_aktif}}</h1>
                        <p>Jumlah peserta aktif</p>
                    </div>
                    <!-- end bottom -->

                    <!-- bottom -->
                    <div class="mt-8 flex flex-row items-center gap-3">
                        <h1 class="h5 text-red-600">{{$main->pengumpulan_karya}}</h1>
                        <p>Jumlah ujian</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
    </div>
    <!-- End General Report -->

    <!-- start Analytics -->
    {{-- <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

        <div class="card">
            <div class="py-3 px-4 flex flex-row justify-between">
                <h1 class="h6">
                    <span>618</span>
                    <p>Peserta Olimpiade</p>
                </h1>

                <div
                    class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                    <i class="fad fa-brain"></i>
                </div>
            </div>
            <div class="analytics_1"></div>
        </div>

        <div class="card">
            <div class="py-3 px-4 flex flex-row justify-between">
                <h1 class="h6">
                    <span>94</span>
                    <p>Peserta Public Poster</p>
                </h1>

                <div
                    class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                    <i class="fad fa-brush"></i>
                </div>
            </div>
            <div class="analytics_1"></div>
        </div>

    </div> --}}
    <!-- end Analytics -->
</x-layout>