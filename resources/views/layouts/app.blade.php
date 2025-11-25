<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Custom Green Theme -->
    <!-- Custom Green Theme -->
    <style>
        body {
            background: #f2f9f4;
            font-family: "Instrument Sans", sans-serif;
        }

        header,
        nav {
            background: #157347;
            color: #fff;
            padding: 12px 20px;
            border-bottom: 3px solid #0f5b38;
        }

        a {
            color: #157347;
            text-decoration: none;
            font-weight: 600;
        }

        a:hover {
            text-decoration: underline;
        }

        .container-fluid {
            padding: 25px;
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 8px rgba(0, 0, 0, .1);
        }

        table thead {
            background: #157347;
            color: #fff;
        }

        table th,
        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e6e6e6;
        }

        tr:hover {
            background: #f0fff7;
        }

        .btn-add {
            background: #198754;
            padding: 8px 14px;
            border-radius: 6px;
            color: white !important;
        }

        .btn-add:hover {
            background: #166f45;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')

    @session('status')
    @endsession

    @session('error')
    @endsession

    <div class="container-fluid">
        @yield('content')
    </div>
</body>

</html>