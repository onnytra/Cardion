<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header">
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2">
                        <a href="#" id="btn-tab-1" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active" aria-current="page">
                            <i class="fad fa-check text-xs mr-2"></i>
                            Telah Dibayar
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-2" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-spinner text-xs mr-2"></i>
                            Menunggu
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-3" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-times text-xs mr-2"></i>
                            Ditolak
                        </a>
                    </li>
                    <li class="me-2">
                        <a href="#" id="btn-tab-4" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fad fa-question text-xs mr-2"></i>
                            Belum Konfirmasi
                        </a>
                    </li>
                </ul>
            </div>

            <div class="relative overflow-x-auto sm:rounded-lg text-sm p-10" id="tab-1">
                <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konfirmasi Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lunas as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->telepon }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->rayons->rayon }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->cabangs->cabang }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->gelombang_pembayarans->gelombang }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-2 pb-2 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div class="card-header">
                                                            <h1 class="h6">Data Konfirmasi Pembayaran</h1>
                                                        </div>
                                                        <div class="card-body relative overflow-x-auto sm:rounded-lg">
                                                            <table class="w-full text-sm text-left rtl:text-right">
                                                                <tr>
                                                                    <td class="px-6 py-3">Nama</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->peserta->nama }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bank</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->bank }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Tanggal Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->tanggal }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Status Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->status_pembayaran }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bukti Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">
                                                                        <a href="{{asset('storage/'.$data->bukti)}}" class="btn-gray" target="_blank">
                                                                            View
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <button type="button" class="btn-bs-dark w-full" id="close-modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route($event.'.pembayaran.tolak', $data->id_pembayaran)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Tolak</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-2">
                <table id="datatable2" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konfirmasi Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menunggu as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->telepon }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->rayons->rayon }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->cabangs->cabang }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->gelombang_pembayarans->gelombang }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-2 pb-2 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div class="card-header">
                                                            <h1 class="h6">Data Konfirmasi Pembayaran</h1>
                                                        </div>
                                                        <div class="card-body relative overflow-x-auto sm:rounded-lg">
                                                            <table class="w-full text-sm text-left rtl:text-right">
                                                                <tr>
                                                                    <td class="px-6 py-3">Nama</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->peserta->nama }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bank</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->bank }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Tanggal Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->tanggal }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Status Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->status_pembayaran }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bukti Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">
                                                                        <a href="{{asset('storage/'.$data->bukti)}}" class="btn-gray" target="_blank">
                                                                            View
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <button type="button" class="btn-bs-dark w-full" id="close-modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a id="modal-box{{ $data->id_pembayaran }}" onclick="showModal({{ $data->id_pembayaran }})" class="font-medium text-gray-900 cursor-pointer">
                                    <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                                </a>
                                <div id="modal{{ $data->id_pembayaran }}" class="absolute right-0 hidden z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center text-center">
                                        <div id="bg-modal{{  $data->id_pembayaran }}" onclick="hideModal({{ $data->id_pembayaran }})" class="fixed inset-0" aria-hidden="true"></div>
                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                            <div class="bg-white">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                            <button class="w-full">
                                                                <a href="{{route($event.'.pembayaran.terima', $data->id_pembayaran)}}" class="btn-bs-success">
                                                                    <i class="fad fa-check mr-2 leading-none"></i>
                                                                    Terima Pembayaran</a>
                                                            </button>
                                                            <button class="w-full mt-2">
                                                                <a href="{{route($event.'.pembayaran.delete', $data->id_pembayaran)}}" class="btn-bs-danger" data-confirm-delete="true">
                                                                    <i class="fad fa-trash mr-2 leading-none"></i>
                                                                    Hapus Pembayaran</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-3">
                <table id="datatable3" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Konfirmasi Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ditolak as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->telepon }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->rayons->rayon }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->cabangs->cabang }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->gelombang_pembayarans->gelombang }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="" id="modal-box" class="text-blue-600 hover:underline">Lihat Konfirmasi
                                    Pembayaran</a>
                                <div id="modal" class="fixed z-10 inset-0 top-20 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center pt-24 px-4 pb-20 text-center">
                                        <div class="fixed inset-0 bg-gray-200 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                            <div class="bg-white px-4 pt-2 pb-2 sm:p-6 sm:pb-4">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div class="card-header">
                                                            <h1 class="h6">Data Konfirmasi Pembayaran</h1>
                                                        </div>
                                                        <div class="card-body relative overflow-x-auto sm:rounded-lg">
                                                            <table class="w-full text-sm text-left rtl:text-right">
                                                                <tr>
                                                                    <td class="px-6 py-3">Nama</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->peserta->nama }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bank</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->bank }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Tanggal Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->tanggal }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Status Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">{{ $data->status_pembayaran }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="px-6 py-3">Bukti Pembayaran</td>
                                                                    <td class="px-6 py-3 text-gray-600">
                                                                        <a href="{{asset('storage/'.$data->bukti)}}" class="btn-gray" target="_blank">
                                                                            View
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                <button type="button" class="btn-bs-dark w-full" id="close-modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a id="modal-box{{ $data->id_pembayaran }}" onclick="showModal({{ $data->id_pembayaran }})" class="font-medium text-gray-900 cursor-pointer">
                                    <i class="fad fa-ellipsis-h mr-2 leading-none"></i>
                                </a>
                                <div id="modal{{ $data->id_pembayaran }}" class="absolute right-0 hidden z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-end justify-center text-center">
                                        <div id="bg-modal{{  $data->id_pembayaran }}" onclick="hideModal({{ $data->id_pembayaran }})" class="fixed inset-0" aria-hidden="true"></div>
                                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                                            <div class="bg-white">
                                                <div class="sm:flex sm:items-start">
                                                    <div class="cart mt-1 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                        <div class="card-body relative overflow-x-visible sm:rounded-lg">
                                                            <button class="w-full">
                                                                <a href="{{route($event.'.pembayaran.terima', $data->id_pembayaran)}}" class="btn-bs-success">
                                                                    <i class="fad fa-check mr-2 leading-none"></i>
                                                                    Terima Pembayaran</a>
                                                            </button>
                                                            <button class="w-full mt-2">
                                                                <a href="{{route($event.'.pembayaran.delete', $data->id_pembayaran)}}" class="btn-bs-danger" data-confirm-delete="true">
                                                                    <i class="fad fa-trash mr-2 leading-none"></i>
                                                                    Hapus Pembayaran</a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto hidden sm:rounded-lg text-sm p-10" id="tab-4">
                <table id="datatable4" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Peserta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rayon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gelombang Pendaftaran
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menunggu as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td scope="row" class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->nama }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->telepon }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-gray-900">
                                    {{ $data->peserta->rayons->rayon }}
                                </p>
                                <p class="text-xs">
                                    {{ $data->peserta->cabangs->cabang }}
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->tanggal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->gelombang_pembayarans->gelombang }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


</x-layout>