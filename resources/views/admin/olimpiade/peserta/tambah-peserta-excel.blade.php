<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:slug>{{ $slug }}</x-slot:slug>

    <div class="card mt-6">
        <div class="card-header flex flex-row items-center">
            <h1 class="h6 mr-5">Input Peserta Excel</h1>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg text-sm p-10">
            
            <form action="{{route($event.'.peserta.store-excel')}}" method="POST">
                @csrf
            <table id="datatable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tim
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ketua
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telepon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cabang Lomba
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Anggota 1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telepon Anggota 1
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Anggota 2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Telepon Anggota 2
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sekolah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat Sekolah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cabang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rayon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gelombang Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Metode Pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bukti Pembayaran
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data[0] as $index => $row)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">
                        <input type="text" name="nama_team[{{ $index }}]" value="{{ $row['nama_team'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="ketua[{{ $index }}]" value="{{ $row['ketua'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="email" name="email[{{ $index }}]" value="{{ $row['email'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="telepon[{{ $index }}]" value="{{ $row['telepon'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="password" name="password[{{ $index }}]" value="{{ $row['password'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <select id="event" name="cabang_lomba[{{ $index }}]"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            <option class="font-medium text-sm" value="olimpiade" {{$row['cabang_lomba'] == 'olimpiade' ? 'selected' : ''}}>
                                olimpiade
                            </option>
                            <option class="font-medium text-sm" value="poster" {{$row['cabang_lomba'] == 'poster' ? 'selected' : ''}}>
                                poster
                            </option>
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="anggota_pertama[{{ $index }}]" value="{{ $row['anggota_pertama'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="telepon_anggota_pertama[{{ $index }}]" value="{{ $row['telepon_anggota_pertama'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="anggota_kedua[{{ $index }}]" value="{{ $row['anggota_kedua'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="telepon_anggota_kedua[{{ $index }}]" value="{{ $row['telepon_anggota_kedua'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="sekolah[{{ $index }}]" value="{{ $row['sekolah'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="alamat_sekolah[{{ $index }}]" value="{{ $row['alamat_sekolah'] }}" class="form-control" />
                    </td>
                    <td class="px-6 py-4">
                        <select id="cabang" name="id_cabang[{{ $index }}]"
                                class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                                required>
                                <option class="font-medium text-sm" value="#">...</option>
                                @foreach ($cabangs as $item)
                                <option class="font-medium text-sm" value="{{$item->id_cabang}}" {{$row['cabang'] == $item->cabang ? 'selected' : ''}}
                                    >{{$item->cabang}}</option>
                                @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <select id="rayon" name="id_rayon[{{ $index }}]"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            @foreach ($rayons as $item)
                            <option class="font-medium text-sm" value="{{$item->id_rayon}}" {{$row['rayon'] == $item->rayon ? 'selected' : ''}}
                                >{{$item->rayon}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <select id="gelombang_pembayaran" name="gelombang_pembayaran[{{ $index }}]"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            @foreach ($gelombang as $item)
                            <option class="font-medium text-sm" value="{{$item->id_gelombang}}" {{$row['gelombang_pembayaran'] == $item->gelombang ? 'selected' : ''}}
                                >{{$item->gelombang}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <select id="event" name="metode_pembayaran[{{ $index }}]"
                            class="btn-gray w-96 lg:w-full shadow-sm text-sm text-left focus:outline-none focus:shadow-outline"
                            required>
                            <option class="font-medium text-sm" value="#">...</option>
                            <option class="font-medium text-sm" value="BNI" {{$row['metode_pembayaran'] == 'BNI' ? 'selected' : ''}}>
                                BNI
                            </option>
                            <option class="font-medium text-sm" value="OVO" {{$row['metode_pembayaran'] == 'OVO' ? 'selected' : ''}}>
                                OVO
                            </option>
                            <option class="font-medium text-sm" value="ShoopePay" {{$row['metode_pembayaran'] == 'ShoopePay' ? 'selected' : ''}}>
                                ShoopePay
                            </option>
                            <option class="font-medium text-sm" value="Tunai" {{$row['metode_pembayaran'] == 'Tunai' ? 'selected' : ''}}>
                                Tunai
                            </option>
                        </select>
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" name="bukti_pembayaran[{{ $index }}]" value="{{ $row['bukti_pembayaran'] }}" class="form-control" />
                    </td>
                </tr>
            @endforeach
                </tbody>
            </table>
            <div class="card-footer flex justify">
                <button>
                    <a href="{{route($event.'.peserta.index')}}" type="button" class="btn-bs-secondary mr-3">Kembali</a>
                </button>
                <button type="submit" class="btn-bs-dark" onclick="confirmInput(event)">
                    Simpan
                </button>
            </div>
        </form>
        </div>
    </div>

</x-layout>