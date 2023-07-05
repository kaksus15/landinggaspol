<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>LOGIN | Gerakan Atasi Stunting Peduli Donasi Telur</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('/template/frontsite/css/styles.css') }}" />
</head>

<body class="text-gray-700 font-rbt bg-[#F6F6F6]">
    <!-- Main Start-->
    <main class="grid gap-4">
        @yield('content')
    </main>

    <!-- Main End -->
    <script src="{{ asset('/template/frontsite/js/scrollreveal.js') }}"></script>
    <script src="{{ asset('/template/frontsite/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('/template/frontsite/js/main.js') }}"></script>

</body>

</html>
