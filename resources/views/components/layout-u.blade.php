<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/toggle.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }} | Cardion</title>
</head>

<body class="bg-gray-100">
    <x-navbar-u>{{ $slug }}</x-navbar-u>
    <div class="h-screen flex flex-row flex-wrap">
        <div class="bg-gray-100 flex-1 md:mt-20">
            <div class="p-6 mt-20">
                {{ $slot }}
            </div>
            <x-footer></x-footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../../../js/scripts.js"></script>
</body>

</html>