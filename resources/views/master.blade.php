<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>

    @include('layouts.navbar')

    {{-- Bagian Section 1 --}}
    @yield('section1')

    {{-- Bagian Section 2 ( Jika pada tampilan tidak mempunyai section 2 maka buat saja section 2 isinya kosong ) --}}
    @yield('section2')


    {{-- Bagian Section 2 ( Jika pada tampilan tidak mempunyai section 2 maka buat saja section 2 isinya kosong ) --}}
    @yield('section3')

    @include('layouts.footer')
</body>

</html>
