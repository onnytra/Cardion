<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header text-center">
            <h1 class="h4">Data Konfirmasi Pembayaran</h1>
            <h2 class="h6 lg:h8 text-gray-600 font-light">
                Lakukan pembayaran ke rekening yang sudah ditentukan dan tunggu konfirmasi oleh panitia
            </h2>
            @if($pembayaran == null)
            <div>
                <p class="mt-10">
                    Note : Jika anda sudah melakukan pembayaran, silahkan isi bukti pembayaran ada pada form dibawah
                </p>
            </div>
            @else
            <div class="flex justify-center pt-4 px-4 text-center sm:block sm:p-0">
                <div class="card-body relative overflow-x-auto sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <tr>
                            <td class="px-6 py-3">Nama Rekening</td>
                            <td class="px-6 py-3 text-gray-600">{{$pembayaran->nama_rekening}}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Bank</td>
                            <td class="px-6 py-3 text-gray-600">{{$pembayaran->bank}}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Tanggal Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">{{$pembayaran->tanggal}}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Metode Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">{{$pembayaran->metode_pembayaran}}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Status Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600" style="text-transform: capitalize">
                                @if($pembayaran->status_pembayaran == 'belum_konfirmasi')
                                <span class="inline-flex items-center rounded-md bg-yellow-200 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">
                                    Belum Konfirmasi
                                </span>
                                @elseif($pembayaran->status_pembayaran == 'menunggu')
                                <span class="inline-flex items-center rounded-md bg-blue-200 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">
                                    Menunggu
                                </span>
                                @elseif($pembayaran->status_pembayaran == 'ditolak')
                                <span class="inline-flex items-center rounded-md bg-red-200 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">
                                    Ditolak
                                </span>
                                @elseif($pembayaran->status_pembayaran == 'lunas')
                                <span class="inline-flex items-center rounded-md bg-green-200 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                    Lunas
                                </span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Gelombang Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">{{$pembayaran->gelombang_pembayarans->gelombang}}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Bukti Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">
                                <a href="{{asset('storage/'.$pembayaran->bukti)}}" class="btn-gray" target="_blank">
                                    View
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            @endif
            @if($pembayaran == null)
            <button class="my-5">
                <a href="{{route('user.add-pembayaran')}}" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Input Bukti Pembayaran
                </a>
            </button>
            @elseif($pembayaran->status_pembayaran == 'belum_konfirmasi' || $pembayaran->status_pembayaran == 'ditolak')
            <div class="row">
                <div class="col">
                    <button class="my-5">
                        <a href="{{route('user.edit-pembayaran')}}" class="btn-indigo">
                            <i class="fad fa-edit mr-2 leading-none"></i>
                            Update Bukti Pembayaran
                        </a>
                    </button>
                </div>
                <div class="col">
                    <button class="my-5">
                        <a href="{{route('user.konfirmasi-pembayaran')}}" class="btn">
                            <i class="fad fa-edit mr-2 leading-none"></i>
                            Konfirmasi Bukti Pembayaran
                        </a>
                    </button>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-layout-u>