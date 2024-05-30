<x-layout-u>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card">
        <div class="card-header text-center">
            <h1 class="h4">Data Konfirmasi Pembayaran</h1>
            <h2 class="h6 lg:h8 text-gray-600 font-light">
                Lakukan pembayaran ke rekening yang sudah ditentukan dan tunggu konfirmasi oleh panitia
            </h2>
            <div>
                <p class="mt-10 hidden">
                    Note : Jika anda sudah melakukan pembayaran, silahkan isi bukti pembayaran ada pada form dibawah
                </p>
            </div>
            <div class="flex justify-center pt-4 px-4 text-center sm:block sm:p-0">
                <div class="card-body relative overflow-x-auto sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <tr>
                            <td class="px-6 py-3">Nama Rekening</td>
                            <td class="px-6 py-3 text-gray-600">A.n Desi
                                Rahmadani</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Bank</td>
                            <td class="px-6 py-3 text-gray-600">BRI</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Tanggal Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">2024-01-25
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Status Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">Menunggu</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">Bukti Pembayaran</td>
                            <td class="px-6 py-3 text-gray-600">
                                <a href="#" class="btn-gray">
                                    View
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <button class="my-5 hidden">
                <a href="/public-poster/pembayaran/add" class="btn-bs-dark">
                    <i class="fad fa-plus mr-2 leading-none"></i>
                    Input Bukti Pembayaran
                </a>
            </button>
            <button class="my-5">
                <a href="/public-poster/pembayaran/edit" class="btn-indigo">
                    <i class="fad fa-edit mr-2 leading-none"></i>
                    Update Bukti Pembayaran
                </a>
            </button>
        </div>
    </div>
</x-layout-u>