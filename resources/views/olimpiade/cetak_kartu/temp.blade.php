<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Card</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .card {
            width: 768px;
            height: 1086px;
            background-image: url('{{ asset('img/kartu_peserta.png') }}');
            background-size: cover;
            position: relative;
        }
        .content {
            position: absolute;
            top: 200px; /* Adjust as necessary */
            left: 50px; /* Adjust as necessary */
            color: black;
        }
        .content p {
            margin: 5px 0;
        }
        .qr-code {
            position: absolute;
            top: 150px; /* Adjust as necessary */
            left: 50px; /* Adjust as necessary */
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="qr-code">
            {!! QrCode::size(100)->generate('https://www.youtube.com/') !!}
        </div>
        <div class="content">
            <p>Nama Tim:</p>
            <p>Asal Sekolah: </p>
            <p>Alamat Sekolah: </p>
            <p>Nama Ketua: </p>
            <p>Email Ketua: </p>
            <p>Nomer Telpon/Ponsel Ketua: </p>
            <p>Nama Anggota 1: </p>
            <p>Nomer Telpon/Ponsel Anggota 1: </p>
            <p>Nama Anggota 2: </p>
            <p>Nomer Telpon/Ponsel Anggota 2: </p>
            <p>Nomer Peserta: </p>
            <p>Email Pendaftar: </p>
            <p>Cabang Wilayah: cabang</p>
        </div>
    </div>
</body>
</html>
