<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    @vite('resources/css/app.css')
    <style>
        @font-face {
            font-family: 'Andalus';
            src: url("{{ asset('fonts/andalus.ttf') }}") format("truetype");
        }

        body {
            font-family: 'Andalus', sans-serif;
        }

        .bg-sertifikat-peserta {
            background-image: url('{{ asset('img/sertifikat-peserta.png') }}');
            background-size: cover;
        }

        @media print {
            @page{
                size: A4 landscape;
                margin: 0;
            }

            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .bg-sertifikat-peserta {
                background-image: url('{{ asset('img/sertifikat-peserta.png') }}') !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <div class="w-[1367px] h-[966px] bg-sertifikat-peserta bg-cover relative font-andalus">
        <div class="absolute text-center w-full pl-64 pt-4 top-60 text-2xl">
            <p>No. {{ $peserta->sertifikat }}</p>
        </div>
        <div class="absolute text-center w-full pl-64 pt-4 top-80 text-4xl font-bold">
            <p>{{ $peserta->nama }}</p>
        </div>
    </div>
    @if($peserta->anggota_pertama != null)
    <div class="w-[1367px] h-[966px] bg-sertifikat-peserta bg-cover relative font-andalus">
        <div class="absolute text-center w-full pl-64 pt-4 top-60 text-2xl">
            <p>No. {{ $peserta->sertifikat }}</p>
        </div>
        <div class="absolute text-center w-full pl-64 pt-4 top-80 text-4xl font-bold">
            <p>{{ $peserta->anggota_pertama }}</p>
        </div>
    </div>
    @endif
    @if($peserta->anggota_kedua != null)
    <div class="w-[1367px] h-[966px] bg-sertifikat-peserta bg-cover relative font-andalus">
        <div class="absolute text-center w-full pl-64 pt-4 top-60 text-2xl">
            <p>No. {{ $peserta->sertifikat }}</p>
        </div>
        <div class="absolute text-center w-full pl-64 pt-4 top-80 text-4xl font-bold">
            <p>{{ $peserta->anggota_kedua }}</p>
        </div>
    </div>
    @endif
</body>
</html>