<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/toggle.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('js/alert.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    {{-- <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script> --}}
    <script type="text/javascript" id="MathJax-script" async
    src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <title>{{ $title }} | Cardion</title>
</head>

<body class="bg-gray-100">
    @include('sweetalert::alert')
    {{-- <x-navbar-u>{{ $slug }}</x-navbar-u> --}}
    <div class="h-screen flex flex-row flex-wrap">
        <div class="bg-gray-100 flex-1 md:mt-20">
            <div class="p-6 mt-20">
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Ups! Ada yang salah.</strong>
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{ $slot }}
            </div>
            <x-footer></x-footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>