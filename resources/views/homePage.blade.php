<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Homepage - L`Rent</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>
</head>

<body>
    @extends('master')
    {{-- rawr --}}

    @section('section1')
        <section class="bg-primary flex justify-center gap-10 p-8">
            {{-- img pindah --}}
            <div class="w-135 h-56 bg-secondary overflow-hidden rounded-2xl"></div>
            {{-- iklan --}}
            {{-- RARW --}}
            <div class="flex flex-col gap-4">
                <div class="w-96 h-27 bg-secondary overflow-hidden rounded-2xl"></div>
                <div class="w-96 h-27 bg-secondary overflow-hidden rounded-2xl"></div>
            </div>
        </section>
    @endsection

    @section('section2')
        <section class="bg-secondary flex justify-center flex-col">
            <div class="flex px-48 pt-10">
                <span class="text-primary text-5xl font-ubuntu font-medium">
                    Mau rental kendaraan <br>tapi bingung tempatnya dimana? <br>L - Rent in Aja !
                </span>
            </div>
            <div class="">
                <span></span>
                <div class="flex gap-10 justify-center py-10 ">
                    <div class="w-40 h-40 bg-primary flex relative rounded-2xl">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8 rounded-bl-2xl rounded-br-2xl">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-40 h-40 bg-primary flex relative rounded-2xl">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8 rounded-bl-2xl rounded-br-2xl">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-40 h-40 bg-primary flex relative rounded-2xl">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8 rounded-bl-2xl rounded-br-2xl">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-40 h-40 bg-primary flex relative rounded-2xl">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8 rounded-bl-2xl rounded-br-2xl">
                            <span></span>
                        </div>
                    </div>
                    <div class="w-40 h-40 bg-primary flex relative rounded-2xl">
                        <div class="absolute bottom-0 w-full bg-nav-color h-8 rounded-bl-2xl rounded-br-2xl">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('section3')
        <section class="flex justify-between px-48 pt-10 bg-sec3">
            <div class="w-96 overflow-hidden">
                <img src="{{ asset('assets/Ellipse 23.png') }}" alt="">
            </div>
            <div class="flex flex-col w-96">
                <span class="text-4xl font-ubuntu text-primary pt-5 font-bold">Tentang L`Rent</span>
                <span class="pt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, sequi rerum? Accusamus
                    quidem cumque
                    nostrum, dicta atque inventore iure quis reprehenderit, obcaecati modi assumenda natus error ex non vero
                    quod!</span>
                <span class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, provident, atque
                    deleniti
                    laudantium dolore a nostrum quidem similique tempore cumque aspernatur ad sed esse nemo perspiciatis
                    saepe! Minima, consectetur eum.</span>
            </div>
        </section>
    @endsection
</body>

</html>
