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
                            <td class="px-6 py-3">Nama Rekenings</td>
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
                            <td class="px-6 py-3 text-gray-600">{{$pembayaran->status_pembayaran}}</td>
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
            @else
            <button class="my-5">
                <a href="{{route('user.edit-pembayaran')}}" class="btn-indigo">
                    <i class="fad fa-edit mr-2 leading-none"></i>
                    Update Bukti Pembayaran
                </a>
            </button>
            @endif
        </div>
    </div>
</x-layout-u>