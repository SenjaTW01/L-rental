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
    @section('navbar')
        <nav class="flex justify-between items-center bg-nav-color py-4 ps-20 pe-16">
            {{-- Bagian 1 --}}
            <div class="">
                <span class="text-secondary">LOGO</span>
            </div>
            {{-- Bagian 2 --}}
            <div class="ms-32 px-4 bg-secondary rounded-full py-1">
                <label for="search" class="text-primary pe-2 hover:cursor-pointer"><i class="bi bi-search"></i></label>
                <input type="text" name="" id="search"
                    class="w-64 focus:outline-none focus:w-80 transition-all ease-in-out delay-100 outline-none">
                <button class="text-primary"><i class="bi bi-list"></i></button>
            </div>
            {{-- Bagian 3 --}}
            <div class="flex gap-11">
                <div class="flex gap-2">
                    <button class="text-secondary text-xl"><i class="bi bi-cart3"></i></button>
                    <button class="text-secondary text-xl"><i class="bi bi-bell"></i></button>
                    <button class="text-secondary text-xl"><i class="bi bi-envelope"></i></button>
                </div>
                <div class="text-secondary flex gap-2">
                    <a href="">sign In</a>
                    <span>||</span>
                    <a href="">Login</a>
                </div>
            </div>
        </nav>
    @endsection
</body>

</html>
