<!DOCTYPE html>
<html lang="en">

<head>
    {{--
    <meta charset="UTF-8"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Card</title>
    {{-- @vite('resources/css/app.css') --}}
    <style>
        @font-face {
            font-family: 'Andalus';
            src: url("{{ asset('fonts/andalus.ttf') }}") format("truetype");
        }

        body {
            font-family: 'Andalus', sans-serif;
            font-weight: bold;
        }

        .card {
            width: 768px;
            height: 1086px;
            background-image: url("{{ asset('img/kartu-peserta.png') }}");
            background-size: cover;
            position: relative;
        }

        .content {
            width: 100%;
            display: flex;
            align-items: center;
            padding: 4rem
        }

        .content div {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .top-content {
            display: flex;
            gap: 0.75rem;
        }

        .content p {
            margin: 5px 0;
        }

        .top-data {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .bottom-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            padding: 10px;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="content">
            <div>
                <div class="top-content">
                    <div>
                        {!! QrCode::size(100)->generate('youtube.com') !!}
                    </div>
                    <div class="top-data">
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
        <p class="bottom-content">Harap diperhatikan kepada seluruh peserta untuk
            mencetak dan
            membawa kartu peserta
            saat babak penyisihan berlangsung</p>
    </div>
</body>

</html>