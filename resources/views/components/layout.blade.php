<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/toggle.css">
    <link href="https://cdn.datatables.net/2.0.7/css/dataTables.tailwindcss.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- // take from public/js/sweetalert.js  --}}
    <script src="{{asset('js/alert.js')}}"></script>


    <title>{{ $title }} | Cardion</title>
</head>

<body class="bg-gray-100">
    <x-navbar>{{ $slug }}</x-navbar>
    <!-- strat wrapper -->
    <div class="h-screen flex flex-row">
        <x-sidebar>{{ $title }}</x-sidebar>
        <!-- start content -->
        <div class="bg-gray-100 flex-1 md:mt-16">
            <div class="p-6 ">
                <x-header>
                    <x-slot:title>{{ $title }}</x-slot:title>
                    <x-slot:slug>{{ $slug }}</x-slot:slug>
                </x-header>
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
        <!-- end content -->
    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.tailwindcss.js"></script>
    <script>
        new DataTable('#datatable');
        new DataTable('#datatable2');
        new DataTable('#datatable3');
        new DataTable('#datatable4');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../../../js/scripts.js"></script>
    <!-- end script -->

</body>

</html>