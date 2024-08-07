<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <!-- Incluindo a fonte Roboto do Google Fonts com peso 100 -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">

    {{-- -------------------------------------------------------------------------------------------------- --}}
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('build/assets/app-FOKdml_h.css') }}" rel="stylesheet" /> --}}

    {{-- -------------------------------------------------------------------------------------------------- --}}


    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}


    {{-- -------------------------------------------------------------------------------------------------- --}}


    {{-- icons --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.8/af-2.7.0/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/b-print-3.0.2/cr-2.0.3/date-1.5.2/fc-5.0.1/fh-4.0.1/kt-2.12.1/r-3.0.2/rg-1.5.0/rr-1.5.0/sc-2.4.3/sb-1.7.1/sp-2.3.1/sl-2.0.3/sr-1.4.1/datatables.min.css"
        rel="stylesheet"> --}}

    {{-- -------------------------------------------------------------------------------------------------- --}}

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    {{-- -------------------------------------------------------------------------------------------------- --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <style>
        body,
        table.dataTable {
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }

        .form-control:focus {
            border-color: #cccccc;
            ;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<body class="sb-nav-fixed">

    <main class="py-4">
        @include('back.layout.navbar')
        <div id="layoutSidenav">

            @include('back.layout.sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('back.layout.footer')
            </div>
        </div>
    </main>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}

    {{-- -------------------------------------------------------------------------------------------------- --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}


    {{-- -------------------------------------------------------------------------------------------------- --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    {{-- -------------------------------------------------------------------------------------------------- --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script
        src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.0.8/af-2.7.0/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/b-print-3.0.2/cr-2.0.3/date-1.5.2/fc-5.0.1/fh-4.0.1/kt-2.12.1/r-3.0.2/rg-1.5.0/rr-1.5.0/sc-2.4.3/sb-1.7.1/sp-2.3.1/sl-2.0.3/sr-1.4.1/datatables.min.js">
    </script> --}}

    {{-- -------------------------------------------------------------------------------------------------- --}}

    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>

    {{-- -------------------------------------------------------------------------------------------------- --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script> --}}
    {{-- <script src="js/datatables-simple-demo.js"></script> --}}

    {{-- -------------------------------------------------------------------------------------------------- --}}

    {{-- <script src="{{ asset('build/assets/app-CuY4mDe9.js') }}"></script> --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
    @yield('js')
</body>

</html>
