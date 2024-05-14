<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/toggle.css">
    <title>{{ $title }} | Cardion</title>
</head>

<body class="bg-gray-100">
    <x-navbar>{{ $slug }}</x-navbar>
    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">
        <x-sidebar>{{ $title }}</x-sidebar>
        <!-- start content -->
        <div class="bg-gray-100 flex-1 md:mt-16">
            <div class="p-6 ">
                <x-header>
                    <x-slot:title>{{ $title }}</x-slot:title>
                    <x-slot:slug>{{ $slug }}</x-slot:slug>
                </x-header>
                {{ $slot }}
            </div>
            <x-footer></x-footer>
        </div>
        <!-- end content -->
    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../../../js/scripts.js"></script>
    <!-- end script -->

</body>

</html>