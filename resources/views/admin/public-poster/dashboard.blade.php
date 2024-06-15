<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <!-- General Report -->
    <div>
        <!-- Sales Overview -->
        <div class="card mt-6">
            <!-- header -->
            <div class="card-header">
                <h1 class="h6">Data Tanggal {{$datas->tanggal}}</h1>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="card-body">
                <div class="p-4">
                    <p class="text-black font-medium mb-2">Target Peserta : <strong>3250</strong></p>
                    <h1 class="h2 text-teal-400">{{$datas->peserta}}</h1>
                    <p class="text-black font-medium mb-4">Jumlah Peserta</p>

                    <div class="bg-gray-300 h-2 rounded-full mt-2 relative">
                        <div class="rounded-full bg-teal-400 h-full
                            w-{{$datas->persen}}
                        shadow-md"></div>
                    </div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->

        <!-- start numbers -->
        <div class="grid grid-cols-5 gap-6 xl:grid-cols-2">
            <!-- card -->
            <div class="card mt-6">
                <div class="card-body flex items-center">
                    <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                        <i class="fad fa-users"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{$datas->peserta}}</h1>
                        <p class="text-xs">Total Peserta</p>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6">
                <div class="card-body flex items-center">
                    <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                        <i class="fad fa-wallet"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{$datas->peserta_belumlunas}}</h1>
                        <p class="text-xs">Akun Belum Bayar</p>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6 xl:mt-1">
                <div class="card-body flex items-center">
                    <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                        <i class="fad fa-money-bill"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{$datas->pembayaran_menunggu}}</h1>
                        <p class="text-xs">Waiting Payment</p>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6 xl:mt-1">
                <div class="card-body flex items-center">
                    <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                        <i class="fad fa-sack-dollar"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{$datas->transaksi}}</h1>
                        <p class="text-xs">Total Transaksi</p>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="card mt-6 xl:mt-1 xl:col-span-2">
                <div class="card-body flex items-center">
                    <div class="px-3 py-2 rounded bg-pink-600 text-white mr-3">
                        <i class="fad fa-clipboard"></i>
                    </div>

                    <div class="flex flex-col">
                        <h1 class="font-semibold">{{$datas->ujian}}</h1>
                        <p class="text-xs">Aktif Tes</p>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end nmbers -->

        <!-- Sales Overview -->
        <div class="card mt-6 ">
            <!-- header -->
            <div class="card-header flex flex-row justify-between">
                <h1 class="h6">On Statistics</h1>
                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px">
                        <li class="me-2">
                            <a href="#" id="btn-tab-1"
                                class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active"
                                aria-current="page">
                                <i class="fad fa-globe text-xs mr-2"></i>
                                Online
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" id="btn-tab-2"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                                <i class="fad fa-globe-asia text-xs mr-2"></i>
                                Offline
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end header -->

            <!-- body -->
            <div class="card-body grid grid-cols-1">
                <div id="tab-1">
                    <div id="sealsOverview"></div>
                </div>
                <div id="tab-2">
                    <div id="sealsOverview"></div>
                </div>
            </div>
            <!-- end body -->
        </div>
        <!-- end Sales Overview -->
    </div>

</x-layout>