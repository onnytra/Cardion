<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Card</title>
    @vite('resources/css/app.css')
    <style>
        @font-face {
            font-family: 'Andalus';
            src: url("{{ asset('fonts/andalus.ttf') }}") format("truetype");
        }

        body {
            font-family: 'Andalus', sans-serif;
            font-weight: bold;
        }

        .bg-sertifikat-peserta {
            background-image: url('{{ asset('img/sertifikat-peserta.png') }}');
            background-size: cover;
        }

        @media print {
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
    <div class="w-[1367px] h-[960px] bg-sertifikat-peserta bg-cover relative font-andalus">
        <div class="absolute text-center w-full pl-64 pt-4 top-80 text-4xl ">
            <p>{{ $peserta->nama }}</p>
        </div>
    </div>
</body>

</html>
