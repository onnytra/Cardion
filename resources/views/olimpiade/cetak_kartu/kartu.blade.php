<!DOCTYPE html>
<html lang="en">

<head>
    {{--
    <meta charset="UTF-8"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Card</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-[768px] h-[1086px] bg-kartu-peserta bg-cover relative font-andalus font-bold">
        <div class=" h-full flex items-center p-16">
            <div class="flex flex-col gap-3">
                <div class="flex gap-3">
                    <div>
                        {!! QrCode::size(100)->generate('youtube.com') !!}
                    </div>
                    <div class="flex flex-col gap-2">
                        <p>Nomer Peserta: {{ $peserta->nomor }}</p>
                        <p>Email Pendaftar: {{ $peserta->email }}</p>
                        <p>Cabang Wilayah: {{ $peserta->cabangs->cabang }}/{{$peserta->rayons->rayon}}</p>
                    </div>
                </div>
                <p>Nama Tim: {{$peserta->nama_team}}</p>
                <p>Asal Sekolah: {{ $peserta->sekolah }}</p>
                <p>Alamat Sekolah: {{ $peserta->alamat_sekolah}}</p>
                <p>Nama Ketua: {{ $peserta->nama }}</p>
                <p>Email Ketua: {{ $peserta->email }}</p>
                <p>Nomer Telpon/Ponsel Ketua: {{ $peserta->telepon }}</p>
                <p>Nama Anggota 1: {{ $peserta->anggota_pertama }}</p>
                <p>Nomer Telpon/Ponsel Anggota 1: {{ $peserta->telepon_anggota_pertama }}</p>
                <p>Nama Anggota 2: {{ $peserta->anggota_kedua }}</p>
                <p>Nomer Telpon/Ponsel Anggota 2: {{ $peserta->telepon_anggota_kedua }}</p>
            </div>
        </div>
        <p class="absolute bottom-0 text-white text-center p-10">Harap diperhatikan kepada seluruh peserta untuk
            mencetak dan
            membawa kartu peserta
            saat babak penyisihan berlangsung</p>
    </div>
</body>

</html>