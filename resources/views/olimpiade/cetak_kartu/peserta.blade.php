<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{--
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Card</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .card {
            width: 768px;
            height: 1086px;
            background-image: url('{{ asset(' img/kartu_peserta.png') }}');
            background-size: cover;
            position: relative;
        }

        .content {
            position: absolute;
            top: 200px;
            /* Adjust as necessary */
            left: 50px;
            /* Adjust as necessary */
            color: black;
        }

        .content p {
            margin: 5px 0;
        }

        .qr-code {
            position: absolute;
            top: 150px;
            /* Adjust as necessary */
            left: 50px;
            /* Adjust as necessary */
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="content">
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
            <p>Nomer Peserta: {{ $peserta->nomor }}</p>
            <p>Email Pendaftar: {{ $peserta->email }}</p>
            <p>Cabang Wilayah: {{ $peserta->cabangs->cabang }}/{{$peserta->rayons->rayon}}</p>
        </div>
    </div>
</body>

</html>