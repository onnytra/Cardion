<!doctype html>
<html>

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
            padding: 20px;
            font: 20px Helvetica, sans-serif;
            color: #efe8e8;
            background-color: #2e2929;
        }

        h1 {
            font-size: 50px;
            color: red; /* Ubah warna teks menjadi merah */
        }

        article {
            display: block;
            text-align: left;
            max-width: 650px;
            margin: 0 auto;
        }

        a {
            color: #dc8100;
            text-decoration: none;
        }

        a:hover {
            color: #efe8e8;
            text-decoration: none;
        }

        .info {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <article>
        <h1>Perhatian <br> Akun Terdeteksi Melakukan Pelanggaran</h1>
        <div>
            <p>Hubungi Admin Untuk Melakukan Pembebasan Pelanggaran</p>
            <p class="info">Jika Anda merasa ini adalah kesalahan, jelaskan kepada admin rincian kesalahannya.</p>
            <a href="{{route('olimpiade.ujian')}}">Kembali Ke Halaman Ujian</a>
        </div>
    </article>
</body>

</html>
